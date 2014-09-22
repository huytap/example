<?php

class BranchController extends AdminController{
	public $parentUrl;

    public function init(){
        parent::init();
        $this->parentUrl = $this->module->id .'/'.Yii::app()->getController()->getId();
    }

    public function actionIndex(){
    	try{
    		$model = BranchCompany::model()->findAll();

    		$this->render('index', array(
    			'data' => $model,
    			'parentUrl' => $this->parentUrl
    		));
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }

    public function actionCreate(){
    	try{
	    	$model = new BranchCompany();
	    	if(isset($_POST['BranchCompany'])){
	    		$model->attributes = $_POST['BranchCompany'];
	    		$model->validate();
	    		if(!$model->hasErrors()){
	    			if($model->save()){
	    				$this->redirect(Yii::app()->createAbsoluteUrl('admin/branch'));
	    			}	
	    		}
	    	}
	    	$this->render('create', array(
	    		'model' => $model,
	    		'parentUrl' => $this->parentUrl
	    	));
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }

    public function actionUpdate($id){
        try{
            $model = $this->loadModel($id);
            if(isset($_POST['BranchCompany'])){
                $model->attributes = $_POST['BranchCompany'];
                $model->validate();
                if(!$model->hasErrors()){
                    if($model->save()){
                        $this->redirect(Yii::app()->createAbsoluteUrl('admin/branch'));
                    }   
                }
            }
            $this->render('update', array(
                'model' => $model,
                'parentUrl' => $this->parentUrl
            ));
        }catch(Exception $e){
            Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    public function actionDelete($id){
    	$model = $this->loadModel($id);	
		if($model){
			if($model->delete()){				
				$this->redirect(Yii::app()->createAbsoluteUrl('admin/branch'));
			}
		}
    }

    public function loadModel($id){
    	try{
    		$model = BranchCompany::model()->findByPk($id);
    		if($model)
    			return $model;
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }
}