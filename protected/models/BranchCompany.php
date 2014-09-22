<?php
class BranchCompany extends CActiveRecord
{
	public function tableName()
	{
		return 'branch_companies';
	}

	public function rules()
	{
		return array(
			array('menu_id', 'required'),
			array('menu_id', 'numerical', 'integerOnly'=>true),
			array('title, address', 'length', 'max'=>255),
			array('tel, fax', 'length', 'max'=>50),
			array('map', 'safe'),
			array('id, menu_id, map, title, address, tel, fax', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'menu' => array(self::BELONGS_TO, 'Menu', 'menu_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'menu_id' => 'Menu',
			'map' => 'Map',
			'title' => 'Title',
			'address' => 'Address',
			'tel' => 'Tel',
			'fax' => 'Fax',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('map',$this->map,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('fax',$this->fax,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
