<?php
class Gallery extends CActiveRecord
{
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function tableName()
	{
		return 'galleries';
	}

	public function rules()
	{
		
		return array(
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('name, description', 'length', 'max'=>255),
			array('created_date, updated_date,slide', 'safe'),			
			array('id, name, description, created_date, created_by, updated_date, updated_by', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'events' => array(self::HAS_MANY, 'Event', 'gallery_id'),
			'updatedBy' => array(self::BELONGS_TO, 'Admins', 'updated_by'),
			'createdBy' => array(self::BELONGS_TO, 'Admins', 'created_by'),
			'items' => array(self::HAS_MANY, 'Item', 'gallery_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
			'updated_date' => 'Updated Date',
			'updated_by' => 'Updated By',
			'slide' => 'slide'
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('updated_by',$this->updated_by);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>100,
				),
			'sort' => array(
				'defaultOrder' => array(
					'id' => 'DESC'
					),
				),
		));
	}
}