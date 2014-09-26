<?php
	class FooterWidget extends CWidget
	{
		public function run()
		{
			$this->getfooter();
		}
		public function getfooter()
		{			
			$model = new Contact();
			$flag = false;
			if(isset($_POST['Contact'])){
				$model->attributes = $_POST['Contact'];
				$model->created_date = time();
				$model->validate();
				if(!$model->hasErrors()){
					if($model->save()){
						$flag = true;
					}
				}
			}
			$this->render('footer', compact('model', 'flag'));
		}
	}
?>