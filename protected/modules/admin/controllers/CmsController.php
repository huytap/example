<?php

class CmsController extends AdminController{
	public $parentUrl;

    public function init(){
        parent::init();
        $this->parentUrl = $this->module->id .'/'.Yii::app()->getController()->getId();
    }

    public function actionIndex(){
    	try{
    		$model = new Cms('search');
    		$model->unsetAttributes();
    		if (isset($_GET['Cms'])) {
	            $model->attributes = $_GET['Cms'];
	        }

    		$this->render('index', array(
    			'data' => $model,
    			'parentUrl' => $this->parentUrl
    		));
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }

    public function actionView($id){
    	try{
    		$model = $this->loadModel($id);

    		$this->render('view', array(
    			'model' => $model,
    			'parentUrl' => $this->parentUrl
    		));
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }
    public function actionCreate(){
    	try{
	    	$model = new Cms();
            $item = new Item('search');
            $item->unsetAttributes();
            if(isset($_GET['Item'])) {
                $item->attributes = $_GET['Item'];
            }
	    	if(isset($_POST['Cms'])){
	    		$model->attributes = $_POST['Cms'];
                $menu = MyFunctionCustom::getParentMenuById($model['menu_id']);
                if(isset($menu['parent_id']) && $menu['parent_id'] != null){
                    $model['page'] = $menu['parent']['url'];
                }else{
                    $model['page'] = $menu['url'];
                }
                $model['url'] = MyFunctionCustom::create_slug($model['title']);
	    		$model->created_date = time();
                $model->index = isset($_POST['Cms']['index']) ? 1 : 0;

                $file_document = CUploadedFile::getInstance($model,'file');
                if($file_document){
                    $fileNameDocument = md5(time()) . '.' . $file_document->extensionName;
                    $model->file = Yii::app()->baseUrl.'/data/'. $fileNameDocument;
                    $file_document->saveAs(Yii::app()->basePath . "/../data/$fileNameDocument");
                }


	    		$file = CUploadedFile::getInstance($model,'cover_photo');
				if($file){
					$fileName = 'images_' . md5(time()) . '.' . $file->extensionName;
					$model->cover_photo = $fileName;
					$file->saveAs(Yii::app()->basePath . "/../images/$fileName");
				}
	    		$model->validate();
	    		if(!$model->hasErrors()){
	    			if($model->save()){
	    				$this->redirect(Yii::app()->createAbsoluteUrl('admin/cms'));
	    			}	
	    		}
	    	}
	    	$this->render('create', array(
	    		'model' => $model,
                'data' => $item,
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
            $item = new Item('search');
            $item->unsetAttributes();
            if(isset($_GET['Item'])) {
                $item->attributes = $_GET['Item'];
            }
	    	$older_photo = $model['cover_photo'];
            $older_file = $model['file'];
	    	if(isset($_POST['Cms'])){
	    		$model->attributes = $_POST['Cms'];
                $menu = MyFunctionCustom::getParentMenuById($_POST['Cms']['menu_id']);
                if(isset($menu['parent_id']) && $menu['parent_id'] != null){
                    $model['page'] = $menu['parent']['url'];
                }else{
                    $model['page'] = $menu['url'];
                }
                $model['url'] = MyFunctionCustom::create_slug($model['title']);
                $model->index = isset($_POST['Cms']['index']) ? 1 : 0;
                
                $file_document = CUploadedFile::getInstance($model,'file');
                if($file_document !== NULL){
                    $fileNameDocument = md5(time()) . '.' . $file_document->extensionName;
                    $model->file = $fileNameDocument;
                    $save_document = $file_document->saveAs(Yii::app()->basePath . "/../data/$fileNameDocument");
                    if($save_document && $older_file !== NULL && file_exists(Yii::app()->basePath . "/../data/$fileNameDocument")){
                        unlink(Yii::app()->basePath . "/../data/$older_file");
                    }
                }

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
	    				$this->redirect(Yii::app()->createAbsoluteUrl('admin/cms'));
	    			}	
	    		}
	    	}
	    	$this->render('update', array(
	    		'model' => $model,
                'data' => $item,
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
        $older_file = $model['file'];
		if($model){
			if($model->delete()){				
				if(file_exists(Yii::app()->basePath . "/../images/$older_photo")){
					unlink(Yii::app()->basePath . "/../images/$older_photo");
				}
                if(file_exists(Yii::app()->basePath . "/../data/$older_file")){
                    unlink(Yii::app()->basePath . "/../data/$older_file");
                }
				$this->redirect(Yii::app()->createAbsoluteUrl('admin/cms'));
			}
		}
    }

    public function loadModel($id){
    	try{
    		$model = Cms::model()->findByPk($id);
    		if($model)
    			return $model;
    	}catch(Exception $e){
    		Yii::log("Invalid request(Language). Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    	}
    }
}