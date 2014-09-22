<?php

class SettingController extends AdminController
{    
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Setting'])) {
            $model->attributes = $_POST['Setting'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionIndex()
    {
        $model = new SettingForm();
        $model->scenario = "updateSettings";
        $setting = Yii::app()->setting;
        if (isset($_POST['SettingForm'])) {
            $model->attributes = $_POST['SettingForm'];
            if ($model->validate()) {
                foreach(SettingForm::$arrGeneral as $key => $value)
                {
                    if($value != 'image_watermark')
                    $setting->setDbItem($value, $model->$value);
                }

                $setting->setDbItem('youtube', $model->youtube);

                $filelogo = CUploadedFile::getInstance($model,'logo');
                if($filelogo !== null){
                    $baseImagePath = YII_UPLOAD_DIR . '/logo/';
                    $newName = 'logo' . '_' . time() . rand(1,10000). '.' . $filelogo->extensionName;
                    Yii::log($newName, 'error');
                    if($filelogo->saveAs($baseImagePath.$newName))
                    {
                        $model->logo = $newName;
                        $setting->setDbItem('logo', $newName);
                        
  //                           //resize image logo
                               $ImageProcessing = new ImageProcessing();       
                               $ImageProcessing->folder = '/data/logo/';
                               $ImageProcessing->file = $newName;
                               $ImageProcessing->thumbs =array(
                                                                'small'=>array('width'=>190,'height'=>55),
//                                                                'logo_footer'=>array('width'=>183,'height'=>34),
                                                              );  
                               $ImageProcessing->create_thumbs();
                    }
                } else{
                    $model->logo = $setting->getItem('logo');
                    $setting->setDbItem('logo',Yii::app()->params['logo']);
                } 
                Yii::app()->user->setFlash('setting', 'Setting has been updated.');
                $this->refresh();

            }
        }else{
             foreach(SettingForm::$arrGeneral as $key => $value)
            {                
                $temp = $setting->getItem($value);
                if (!empty($temp)) {
                    $model->$value = $setting->getItem($value);
                } else if(!empty(Yii::app()->mail->transportOptions[$key])) {
                    $model->$value = Yii::app()->mail->transportOptions[$key];
                }
            }
        } 

        $this->render('index', array('model' => $model, ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Setting::model()->findByPk($id);
        if ($model === null)
        {
            Yii::log('The requested page does not exist.');
            throw new CHttpException(404,'The requested page does not exist.');
        }
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'setting-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
