<?php
class MenuController extends AdminController{
	public $parentUrl;

    public function init(){
        parent::init();
        $this->parentUrl = $this->module->id .'/'.Yii::app()->getController()->getId();
    }

    public function actionIndex(){
    	try{
    		$model = Menu::model()->findAll();

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
	    	$model = new Menu();
	    	if(isset($_POST['Menu'])){
	    		$model->attributes = $_POST['Menu'];
	    		$model->show_link_parent = isset($_POST['Menu']['show_link_parent']) ? 1 : 0;
                $model->static_page = isset($_POST['Menu']['static_page']) ? 1 : 0;
	    		$model->url = MyFunctionCustom::create_slug($model->name);
                $file = CUploadedFile::getInstance($model,'cover_photo');
                if($file){
                    $fileName = 'images_' . md5(time()) . '.' . $file->extensionName;
                    $model->cover_photo = $fileName;
                    $file->saveAs(Yii::app()->basePath . "/../images/$fileName");
                }
	    		$model->validate();
	    		if(!$model->hasErrors()){
	    			if($model->save()){
	    				$this->redirect(Yii::app()->createAbsoluteUrl('admin/menu'));
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
    		if(isset($_POST['Menu'])){
	    		$model->attributes = $_POST['Menu'];
                $model->show_link_parent = isset($_POST['Menu']['show_link_parent']) ? 1 : 0;
	    		$model->static_page = isset($_POST['Menu']['static_page']) ? 1 : 0;
	    		$model->url = MyFunctionCustom::create_slug($model->name);
                $file = CUploadedFile::getInstance($model,'cover_photo');
                if($file !== NULL){
                    $fileName = 'images_' . md5(time()) . '.' . $file->extensionName;
                    $model->cover_photo = $fileName;
                    $saveFile = $file->saveAs(Yii::app()->basePath . "/../images/$fileName");
                    if($saveFile && $older_photo !== NULL && file_exists(Yii::app()->basePath . "/../images/$older_photo")){
                        unlink(Yii::app()->basePath . "/../images/$older_photo");
                    }
                }else{
                    $model['cover_photo'] = $older_photo;
                }
	    		$model->validate();
	    		if(!$model->hasErrors()){
	    			if($model->save()){
	    				$this->redirect(Yii::app()->createAbsoluteUrl('admin/menu'));
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
				$this->redirect(Yii::app()->createAbsoluteUrl('admin/menu'));
			}
		}
    }

    public function loadModel($id){
    	try{
    		$model = Menu::model()->findByPk($id);
    		if($model)
    			return $model;
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }
}