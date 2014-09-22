<?php

class UploadController extends AdminController{
	public $parentUrl;

    public function init(){
        parent::init();
        $this->parentUrl = $this->module->id .'/'.Yii::app()->getController()->getId();
    }

    public function actionIndex(){
    	try{
    		$model = Upload::model()->findAll();

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
	    	$model = new Upload();
	    	if(isset($_POST['Upload'])){
	    		$model->attributes = $_POST['Upload'];                
	    		$model->created_date = time();                   
	    		$file = CUploadedFile::getInstance($model,'url');
				if($file){
					$fileName = md5(time()) . '.' . $file->extensionName;
					$model->url = Yii::app()->baseUrl.'/data/'. $fileName;
                    $model->file_ext = $file->type;
                    $model->old_filename = $file->name;
					$file->saveAs(Yii::app()->basePath . "/../data/$fileName");
				}
	    		$model->validate();
	    		if(!$model->hasErrors()){
	    			if($model->save()){
	    				$this->redirect(Yii::app()->createAbsoluteUrl('admin/upload'));
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

    public function actionDelete($id){
    	$model = $this->loadModel($id);	
    	$older_file = $model['url'];
		if($model){
			if($model->delete()){				
				if(file_exists(Yii::app()->basePath . "/../$older_file")){
					unlink(Yii::app()->basePath . "/../$older_file");
				}
				$this->redirect(Yii::app()->createAbsoluteUrl('admin/upload'));
			}
		}
    }

    public function loadModel($id){
    	try{
    		$model = Upload::model()->findByPk($id);
    		if($model)
    			return $model;
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }
}