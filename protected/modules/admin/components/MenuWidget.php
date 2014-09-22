<?php
	class MenuWidget extends CWidget
	{
		public function run()
		{
			$this->getmenu();
		}
		public function getmenu()
		{
			$user = Yii::app()->session['LOGGED_USER'];
			$this->render('menu',array('user' => $user));
		}
	}
?>