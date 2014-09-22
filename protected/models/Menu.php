<?php
class Menu extends CActiveRecord
{

	public function tableName()
	{
		return 'menu';
	}

	public function rules(){
		return array(
			array('priority', 'required'),
			array('show_link_parent, parent_id, static_page, disabled, priority', 'numerical', 'integerOnly'=>true),
			array('name, url', 'length', 'max'=>100),
			array('cover_photo', 'length', 'max'=>255),
			array('cover_photo, show_link_parent, id, name, url, parent_id, static_page, disabled, priority', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'cms' => array(self::HAS_MANY, 'Cms', 'menu_id'),
			'parent' => array(self::BELONGS_TO, 'Menu', 'parent_id'),
			'menus' => array(self::HAS_MANY, 'Menu', 'parent_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'url' => 'Url',
			'parent_id' => 'Parent',
			'static_page' => 'Static Page',
			'disabled' => 'Disabled',
			'priority' => 'Priority',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('static_page',$this->static_page);
		$criteria->compare('disabled',$this->disabled);
		$criteria->compare('priority',$this->priority);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
