<?php

class Cms extends CActiveRecord
{
	public function tableName()
	{
		return 'cms';
	}

	public function rules()
	{
		return array(
			array('menu_id', 'required'),
			array('gallery_id, menu_id, index, created_date', 'numerical', 'integerOnly'=>true),
			array('file, title, cover_photo, url, page', 'length', 'max'=>255),
			array('short_description', 'length', 'max'=>765),
			array('description', 'safe'),
			array('file, gallery_id, id, title, index, url, page, short_description, description, menu_id, cover_photo, created_date', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'short_description' => 'Short Description',
			'description' => 'Description',
			'menu_id' => 'Menu',
			'cover_photo' => 'Cover Photo',
			'created_date' => 'Created Date',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('cover_photo',$this->cover_photo,true);
		$criteria->compare('created_date',$this->created_date,true);

		return new CActiveDataProvider($this, array(
			'pagination'=>array(
				'pageSize'=>10,
				),
			'sort' => array(
				'defaultOrder' => array(
					'created_date' => 'DESC'
					),
				),
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
