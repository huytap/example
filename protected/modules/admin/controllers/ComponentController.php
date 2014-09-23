<?php
class ComponentController extends AdminController{
	public $parentUrl;

    public function init(){
        parent::init();
        $this->parentUrl = $this->module->id .'/'.Yii::app()->getController()->getId();
    }

    public function actionIndex(){
    	try{
    		$criteria = new CDbCriteria;
    		$criteria->order = 'priority ASC';
    		$model = Banner::model()->findAll($criteria);

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
	    	$model = new Banner();
	    	if(isset($_POST['Banner'])){
	    		$model->attributes = $_POST['Banner'];
	    		$file = CUploadedFile::getInstance($model,'cover_photo');
				if($file){
					$fileName = 'images_' . md5(time()) . '.' . $file->extensionName;
					$model->cover_photo = $fileName;
					$file->saveAs(Yii::app()->basePath . "/../images/$fileName");
				}
	    		$model->validate();
	    		if(!$model->hasErrors()){
	    			if($model->save()){
	    				$this->redirect(Yii::app()->createAbsoluteUrl('admin/component'));
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
            $older_photo = $model['cover_photo'];
            if(isset($_POST['Banner'])){
                $model->attributes = $_POST['Banner'];
                $file = CUploadedFile::getInstance($model,'cover_photo');
                if($file !== NULL){
                    $fileName = 'images_' . md5(time()) . '.' . $file->extensionName;
                    $model->cover_photo = $fileName;
                    $saveFile = $file->saveAs(Yii::app()->basePath . "/../images/$fileName");
                    if($saveFile && $older_photo !== '' && file_exists(Yii::app()->basePath . "/../images/$older_photo")){
                        unlink(Yii::app()->basePath . "/../images/$older_photo");
                    }
                }else{
                    $model['cover_photo'] = $older_photo;
                }
                $model->validate();
                if(!$model->hasErrors()){
                    if($model->save()){
                        $this->redirect(Yii::app()->createAbsoluteUrl('admin/component'));
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
    	$older_photo = $model['cover_photo'];
		if($model){
			if($model->delete()){				
				if(file_exists(Yii::app()->basePath . "/../images/$older_photo")){
					unlink(Yii::app()->basePath . "/../images/$older_photo");
				}
				$this->redirect(Yii::app()->createAbsoluteUrl('admin/component'));
			}
		}
    }

    public function loadModel($id){
    	try{
    		$model = Banner::model()->findByPk($id);
    		if($model)
    			return $model;
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }
}