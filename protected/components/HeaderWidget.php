<?php
	class HeaderWidget extends CWidget
	{
		public function run()
		{
			$this->getheader();
		}
		public function getheader()
		{
			//if(!Yii::app()->cache->get('menu')){
				$criteria = new CDbCriteria;
				$criteria->select = 't.*';
				$criteria->condition = 't.disabled=:status AND t.parent_id IS NULL';
				$criteria->params =array(':status' => 1);
				$criteria->order = 't.priority ASC';
				$menu = Menu::model()->findAll($criteria);
			// 	Yii::app()->cache->set('menu', $menu);
			// }else{
			// 	$menu = Yii::app()->cache->get('menu');
			// }
			$this->render('header', compact('menu'));
		}
	}
?>