<?php

class CustomerController extends AdminController{
	public $parentUrl;

    public function init(){
        parent::init();
        $this->parentUrl = $this->module->id .'/'.Yii::app()->getController()->getId();
    }

    public function actionIndex(){
    	try{
    		$model = new Contact('search');
    		$model->unsetAttributes();
    		if (isset($_GET['Customer'])) {
	            $model->attributes = $_GET['Customer'];
	        }

    		$this->render('index', array(
    			'data' => $model,
    			'parentUrl' => $this->parentUrl
    		));
    	}catch(Exception $e){
    		Yii::log("Invalid request. Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }

    public function actionView($id){
        try{
            $model = $this->loadModel($id);
            $this->render('view', compact('model'));
        }catch(Exception $e){
            Yii::log("Invalid request. Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    public function actionDelete($id){
        $model = $this->loadModel($id);
        if($model){
            if($model->delete()){               
                $this->redirect(Yii::app()->createAbsoluteUrl('admin/customer'));
            }
        }
    }

    public function loadModel($id){
        try{
            $model = Contact::model()->findByPk($id);
            if($model)
                return $model;
        }catch(Exception $e){
            Yii::log("Invalid request. Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }
}