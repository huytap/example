<?php 
	class SearchWidget extends CWidget
	{
		public function run()
		{
			$this->getsearch();
		}
		public function getsearch()
		{
			$this->render('search');
		}
	}
?>