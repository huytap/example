<?php 
	class ScriptWidget extends CWidget
	{
		public function run()
		{
			$this->getscript();
		}
		public function getscript()
		{
			$this->render('script');
		}
	}
?>