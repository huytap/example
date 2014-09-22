<?php 
	class HeaderWidget extends CWidget
	{
		public function run()
		{
			$this->getheader();
		}
		public function getheader()
		{
			// $customer = ContactForm::model()->findAllByAttributes(array('viewed' => 1));
			$result = Yii::app()->session['LOGGED_USER'];
			// $this->render('header',array('user' => $result,'customer' => $customer));
			$this->render('header',array('user' => $result));
		}
	}
?>