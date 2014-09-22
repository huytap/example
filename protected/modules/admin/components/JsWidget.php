<?php
	class JsWidget extends CWidget
	{
		public function run()
		{
			$this->getjs();
		}
		public function getjs()
		{
			$this->render('js');
		}
	}
?>