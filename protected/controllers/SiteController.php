<?php

class SiteController extends Controller
{
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		try{
			//get top 2 news
			$news = $this->getCMS('su-kien', 2);
			//get top 1
			//$top1 = $this->getPage('');
			//gallery
			/*Gallery Library*/
			//get component
			$criteria_banner = new CDbCriteria;
			$criteria_banner->select = 't.*';
			$criteria_banner->condition = 'disabled=:status';
			$criteria_banner->params = array(':status' => 1);
			$criteria_banner->order = 'priority ASC';
			$banner = Banner::model()->findAll($criteria_banner);
			//if(!Yii::app()->cache->get('library')){
				$slide_criteria = new CDbCriteria;
				$slide_criteria->select = 't.*';
				$slide_criteria->join = 'JOIN galleries g ON g.id = t.gallery_id';
				$slide_criteria->condition = 'g.slide=:slide AND t.active_status=:status';
				$slide_criteria->params = array(':slide' => 'library', ':status' => 1);
				$slide_criteria->order = 't.priority ASC';
				$library = Item::model()->findAll($slide_criteria);
				//Yii::app()->cache->set('library', $library);
			// }else{
			// 	$library = Yii::app()->cache->get('library');
			// }
			$this->render('index', array(
				'news' => $news,
				'library' => $library,
				'component' => $banner
			));
		}catch(Exception $e){
			echo 'Không tìm thấy yêu cầu của bạn';

		}
	}

	public function getCMS($page, $limit){
		$criteria = new CDbCriteria;
		$criteria->select = 't.*';
		$criteria->condition = "t.index=:index AND t.page=:page";
		$criteria->params = array(":index" => 1, ":page" => $page);
		$criteria->order = "t.created_date DESC";
		$criteria->limit = $limit;
		$cms = Cms::model()->findAll($criteria);
		return $cms;
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


	public function actionContact()
	{
		try{
			$menu = Menu::model()->findByAttributes(array('url' => 'lien-he'));

			$criteria = new CDbCriteria;
			$criteria->condition = 'disabled=:status';
			$criteria->params = array(':status' => 1);
			$ads = Ads::model()->findAll($criteria);
			$model = BranchCompany::model()->findAll();
			$this->render('contact',array('model'=>$model, 'ads' => $ads, 'menu' => $menu));
		}catch(Exception $e){
			echo 'Không tìm thấy yêu cầu của bạn';
		}
	}

	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}