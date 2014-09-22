<?php
	class FooterWidget extends CWidget
	{
		public function run()
		{
			$this->getfooter();
		}
		public function getfooter()
		{			
			$this->render('footer');
		}
	}
?>