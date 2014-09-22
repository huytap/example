<?php

class AdsController extends AdminController{
	public $parentUrl;

    public function init(){
        parent::init();
        $this->parentUrl = $this->module->id .'/'.Yii::app()->getController()->getId();
    }

    public function actionIndex(){
    	try{
    		$model = Ads::model()->findAll();

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
	    	$model = new Ads();
	    	if(isset($_POST['Ads'])){
	    		$model->attributes = $_POST['Ads'];
                
	    		$model->created_date = time();                
                $model->page = '';
                if(isset($_POST['tags'])){
                    $i=1;
                    foreach ($_POST['tags'] as $key => $value) {
                        $model->page .= $value;
                        if($i<count($_POST['tags'])){
                            $model->page .= ',';
                        }
                        $i++;
                    }
                }
	    		$file = CUploadedFile::getInstance($model,'photo');
				if($file){
					$fileName = 'images_' . md5(time()) . '.' . $file->extensionName;
					$model->photo = $fileName;
					$file->saveAs(Yii::app()->basePath . "/../images/$fileName");
				}
	    		$model->validate();
	    		if(!$model->hasErrors()){
	    			if($model->save()){
	    				$this->redirect(Yii::app()->createAbsoluteUrl('admin/ads'));
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
        //try{
            $model = $this->loadModel($id);
            $older_photo = $model['photo'];
            if(isset($_POST['Ads'])){
                $model->attributes = $_POST['Ads'];
                
                $model->created_date = time();                
                $model->page = '';
                if(isset($_POST['tags'])){
                    $i=1;
                    foreach ($_POST['tags'] as $key => $value) {
                        $model->page .= $value;
                        if($i<count($_POST['tags'])){
                            $model->page .= ',';
                        }
                        $i++;
                    }
                }
                $file = CUploadedFile::getInstance($model,'photo');
                if($file !== NULL){
                    $fileName = 'images_' . md5(time()) . '.' . $file->extensionName;
                    $model->photo = $fileName;
                    $saveFile = $file->saveAs(Yii::app()->basePath . "/../images/$fileName");
                    if($saveFile && $older_photo !== '' && file_exists(Yii::app()->basePath . "/../images/$older_photo")){
                        unlink(Yii::app()->basePath . "/../images/$older_photo");
                    }
                }else{
                    $model['photo'] = $older_photo;
                }
                $model->validate();
                if(!$model->hasErrors()){
                    if($model->save()){
                        $this->redirect(Yii::app()->createAbsoluteUrl('admin/ads'));
                    }   
                }
            }
            $this->render('update', array(
                'model' => $model,
                'parentUrl' => $this->parentUrl
            ));
        // }catch(Exception $e){
        //     Yii::log("Invalid request(Language). Please do not repeat this request again.");
        //     throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        // }
    }

    public function actionDelete($id){
    	$model = $this->loadModel($id);	
    	$older_photo = $model['photo'];
		if($model){
			if($model->delete()){				
				if(file_exists(Yii::app()->basePath . "/../images/$older_photo")){
					unlink(Yii::app()->basePath . "/../images/$older_photo");
				}
				$this->redirect(Yii::app()->createAbsoluteUrl('admin/ads'));
			}
		}
    }

    public function loadModel($id){
    	try{
    		$model = Ads::model()->findByPk($id);
    		if($model)
    			return $model;
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }
}