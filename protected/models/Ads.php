<?php

class Ads extends CActiveRecord
{
	public function tableName()
	{
		return 'ads';
	}

	public function rules()
	{
		return array(
			array('disabled', 'numerical', 'integerOnly'=>true),
			array('title, page', 'length', 'max'=>100),
			array('photo', 'length', 'max'=>200),
			array('link_url', 'length', 'max'=>255),
			array('created_date', 'length', 'max'=>10),
			array('description', 'length', 'max'=>765),
			array('id, title, photo, link_url, disabled, page, created_date, description', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'photo' => 'Photo',
			'link_url' => 'Link Url',
			'disabled' => 'Disabled',
			'page' => 'Page',
			'created_date' => 'Created Date',
			'description' => 'Description',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('link_url',$this->link_url,true);
		$criteria->compare('disabled',$this->disabled);
		$criteria->compare('page',$this->page,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
