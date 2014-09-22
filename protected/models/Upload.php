<?php

class Upload extends CActiveRecord
{

	public function tableName()
	{
		return 'uploads';
	}

	public function rules()
	{

		return array(
			array('url, title', 'required'),
			array('title', 'length', 'max'=>200),
			array('old_filename', 'length', 'max'=>100),
			array('created_date, file_ext', 'safe'),
			array('id, created_date, file_ext, url, title, old_filename', 'safe', 'on'=>'search'),
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
			'url' => 'Url',
			'title' => 'Title',
			'old_filename' => 'Old Filename',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('old_filename',$this->old_filename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
