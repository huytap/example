<?php

class Item extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function tableName()
	{
		return 'items';
	}

	public function rules()
	{
		return array(
			array('priority,gallery_id, cover_image, thumb_nails, active_status', 'numerical', 'integerOnly'=>true),
			array('name, description,file_ext, old_name', 'length', 'max'=>255),
			array('url,description,', 'safe'),
			array('id, priority,description,name, url, file_ext, old_name,cover_image, gallery_id, thumb_nails, active_status', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'gallery' => array(self::BELONGS_TO, 'Gallery', 'gallery_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'url' => 'Path',
			'file_ext' => 'File Ext',
			'old_name' => 'Old Name',
			'gallery_id' => 'Gallery',
			'thumb_nails' => 'Thumb Nails',
            'active_status' => 'Status',
            'priority' => 'priority',
            'description' => 'description'
		); 
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('file_ext',$this->file_ext,true);
		$criteria->compare('old_name',$this->old_name,true);
        if(!empty($this->gallery_id)) {
            $criteria->compare('gallery.name', $this->gallery_id, true);
        }
		$criteria->compare('thumb_nails',$this->thumb_nails);
		$criteria->with = 'gallery';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>500,
				),
			'sort' => array(
				'defaultOrder' => array(
					'id' => 'DESC'
					),
				),
		));
	}
}