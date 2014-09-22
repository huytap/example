<?php

class GalleryController extends AdminController {

    // public $layouts = '//layouts/column1';
    public $parentUrl;

    public function init(){
        parent::init();
        $this->parentUrl = $this->module->id .'/'.Yii::app()->getController()->getId();
    }
    public function actionIndex() {
        $model = new Item('search');
        $model->unsetAttributes();
        if (isset($_GET['Item'])) {
            $model->attributes = $_GET['Item'];
        }
        $this->render('index', array('data' => $model));
    }

    public function actionCreate() {
        //Each a album have many items image.
        $model = new Gallery();

        if (isset($_POST['Gallery'])) {
            //Create new album, gallery
            $model->attributes = $_POST['Gallery'];
            $model->created_date = date('Y-m-d H:i:s');
            $model->slide = isset($_POST['Gallery']['slide']) ? 1 : 0;
            // var_dump($model->created_date);die();
            $model->save();
            //return id of lastest records.
            $gallery_id = $model->id;
            // Get image item from client uploaded
            $image = CUploadedFile::getInstancesByName('items');
            if (isset($image) && count($image) >= 1) {
                //Set default thumnails for first image
                $i = 0;
                foreach ($image as $key => $value) {
                    $i++;
                    $gallery_item = new Item();
                    $gallery_item['gallery_id'] = $gallery_id;
                    $gallery_item['file_ext'] = $value->type;
                    $gallery_item['old_name'] = $value->name;
                    $gallery_item['active_status'] = 1;
                    $ran = rand(0, 999999999);
                    $fileName = trim(date('Y-m-d H-i-s') . $ran) . '.' . $value->extensionName;
                    $gallery_item['name'] = $fileName;
                    $gallery_item['url'] = Yii::app()->basePath . "/../images/";
                    if ($i == 1) {
                        $gallery_item['thumb_nails'] = 1;
                        $gallery_item['cover_image'] = 1;
                    } else {
                        $gallery_item['thumb_nails'] = 0;
                        $gallery_item['cover_image'] = 0;
                    }

                    $gallery_item->save();
                    $value->saveAs(Yii::app()->basePath . "/../images/$fileName");
                }
            }
            $this->redirect(Yii::app()->createAbsoluteUrl('admin/gallery/index'));
        }
        $this->render('create', array('model' => $model));
    }

    public function actionView_details($id) {
        $gallery = Gallery::model()->findByPk($id);
        if(isset($_POST['Gallery'])){
            $gallery->slide = isset($_POST['Gallery']) ? 1 : 0;
            $gallery->save();
        }
        $gallery_item = Item::model()->with('gallery')->findAllByAttributes(array('gallery_id' => $id));
        $this->render('view_details', array(
            'items' => $gallery_item, 
            'gallery' => $id,
            'galleries' => $gallery
            ));
    }

    public function actionUpdate_description($id) {
        $gallery = Gallery::model()->findByPk($id);
        if (isset($_POST['_btn'])) {
            foreach ($_POST['Items'] as $key => $value) {
                $item = Item::model()->findByPk($key);
                $item->description = $value['description'];
                $item->priority = $value['priority'];
                $item->save();
            }
            $this->redirect(Yii::app()->createAbsoluteUrl($this->parentUrl.'/view_details/',array('id' => $id)));
        }
        $gallery_item = Item::model()->with('gallery')->findAllByAttributes(array('gallery_id' => $id));
        $this->render('update_description', array(
            'items' => $gallery_item, 
            'gallery' => $id,
            'galleries' => $gallery,
            ));
    }

    public function actionDelete_item() {
        $gallery_item = Item::model()->findByPk($_POST['id']);
        if (isset($gallery_item)) {
            $file_image = Yii::app()->basePath . "/../images/" . $gallery_item->name;
            // var_dump($file_image);die();
            if (file_exists($file_image)) {
                unlink($file_image);
            }
            if ($gallery_item->delete())
                echo CJSON::encode(1);
        }
    }

    public function actionUpload($id) {
        $gallery = Gallery::model()->with('items')->findByPk($id);

        if (isset($_POST['Gallery'])) {
            // var_dump($_POST['items']);die();
            $image = CUploadedFile::getInstancesByName('items');
            if (isset($image)) {
                //Set default thumnails for first image
                $i = 0;
                foreach ($image as $key => $value) {
                    $i++;
                    $gallery_item = new Item();
                    $gallery_item['gallery_id'] = $id;
                    $gallery_item['cover_image'] = 0;
                    $gallery_item['thumb_nails'] = 0;
                    $gallery_item['file_ext'] = $value->type;
                    $gallery_item['old_name'] = $value->name;
                    $gallery_item['active_status'] = 1;
                    $ran = rand(0, 999999999);
                    $fileName = trim(date('Y-m-d H-i-s') . $ran) . '.' . $value->extensionName;
                    $gallery_item['name'] = $fileName;
                    $gallery_item['url'] = Yii::app()->basePath . "/../images/";

                    $gallery_item->save();
                    $value->saveAs(Yii::app()->basePath . "/../images/$fileName");
                }
            }
            $this->redirect(Yii::app()->createAbsoluteUrl('admin/gallery/view_details', array('id' => $id)));
        }
        $this->render('upload', array('gallery' => $gallery));
    }

    public function actionEdit($id) {
        $gallery = Gallery::model()->findByPk($id);
        if (isset($_POST['Gallery'])) {
            $gallery->attributes = $_POST['Gallery'];
            $gallery->save();
            $this->redirect(Yii::app()->createAbsoluteUrl('admin/gallery/index'));
        }
        $this->render('edit', array('model' => $gallery));
    }

    public function actionDelete($id) {

        //check delete gakkery
        if (MyFunctionCustom::checkDeleteGallery($id)) {
            Yii::app()->user->setFlash('messageError', 'Please delete product before delete gallery');
            $this->redirect(Yii::app()->createAbsoluteUrl('admin/gallery'));
        }

        $gallery = Gallery::model()->findByPk($id);
        product::model()->updateAll(array('gallery_id' => null), 'gallery_id=:gallery_id', array(':gallery_id' => $gallery->id));
        $this->actionDeleteAllItem($gallery->id);
        if ($gallery->delete())
            $this->redirect(Yii::app()->createAbsoluteUrl(Yii::app()->baseUrl . 'admin/product'));
    }

    public function actionDeleteAllItem($gallery_id) {
        $gallery_item = Item::model()->findAllByAttributes(array('gallery_id' => $gallery_id));
        if (isset($gallery_item)) {
            //delete Image
            foreach ($gallery_item as $key => $value) {
                $file_image = Yii::app()->basePath . "/../images/" . $value->name;
                // var_dump($file_image);die();
                if (file_exists($file_image)) {
                    unlink($file_image);
                }
            }
            Item::model()->deleteAll('`gallery_id` = :gallery_id', array(
                ':gallery_id' => $gallery_id,
            ));
        }
    }

    public function actionSetcover() {
        if (isset($_POST['id'])) {
            $gallery_item = Item::model()->findByPk($_POST['id']);
            Item::model()->updateAll(array('cover_image' => 0), 'gallery_id = :gallery_id', array(':gallery_id' => $gallery_item->gallery_id));
            $gallery_item->cover_image = 1;
            if ($gallery_item->save()) {
                echo CJSON::encode(1);
                die();
            }
        }
    }

    public function actionActive() {
        if (isset($_POST['id'])) {
            $gallery_item = Item::model()->findByPk($_POST['id']);
            $gallery_item->active_status = 1;
            if ($gallery_item->save()) {
                echo CJSON::encode(1);
                die();
            }
        }
    }

    public function actionDeactive() {
        if (isset($_POST['id'])) {
            $gallery_item = Item::model()->findByPk($_POST['id']);
            $gallery_item->active_status = 0;
            if ($gallery_item->save()) {
                echo CJSON::encode(1);
                die();
            }
        }
    }

}

?>