<?php 
	class CssWidget extends CWidget
	{
		public function run()
		{
			$this->getcss();
		}
		public function getcss()
		{
			$this->render('css');
		}
	}
?>