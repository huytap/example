<?php

class SiteController extends AdminController
{
	public function actionLogin()
	{
                $this->layout=false;
		$model=new AdminLoginForm();
		if(isset($_POST['AdminLoginForm']))
		{
                    $model->attributes = $_POST['AdminLoginForm'];
                    if($model->validate()){
                    	date_default_timezone_set('UTC');
                    	$current_date = date("Y-m-d");
						$this->redirect(Yii::app()->createAbsoluteUrl('admin/default/index'));
                    }
		}
		$this->render('login', array('model'=>$model));
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->createAbsoluteUrl('admin/site/login'));
	}      
        
	public function actionError()
	{
            
            if($error=Yii::app()->errorHandler->error)
            {
                if(Yii::app()->request->isAjaxRequest)
                    echo $error['message'];
                else
                    $this->render('error', $error);
            }
	} 
        
        public function actionDine(){
            $this->render('dine');
        }
        
}