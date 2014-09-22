<?php

class ManageadminController extends AdminController
{
    public $parentUrl;
    public function init() {
        parent::init();
        $this->parentUrl = $this->module->id . '/' . Yii::app()->getController()->getId();
    }

	public function actionView($id)
	{
             try{
 		$this->render('view',array(
			'model'=>$this->loadModel($id),'parentUrl'=>$this->parentUrl
		));           
            }catch (Exception $e){
                     Yii::log("Invalid request. Please do not repeat this request again.");
                    throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');              
            }       
	}

	public function actionCreate()
	{
            try{
                    $model=new Users('create');

                    if(isset($_POST['Users'])){
                            $model->attributes=$_POST['Users'];
                            $model->validate();
                            if(!$model->hasErrors()){
                                $model->application_id = 1;
                                if($model->save())
                                       $this->redirect(array('view','id'=>$model->id));                           
                            }
                    }

                    $this->render('create',array(
                            'model'=>$model,
                    ));            
            }catch (Exception $e){
                    Yii::log("Invalid request. Please do not repeat this request again.");
                    throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
            }
	}

	public function actionUpdate($id)
	{
             try{
                    $model=$this->loadModel($id);
                    $model->scenario = 'no_password_update';
                    if(isset($_POST['Users'])){
                            if(isset($_POST['Users']['temp_password']) && $_POST['Users']['temp_password'] !='' )
                                 $model->scenario = 'update';
                            
                            $model->attributes=$_POST['Users'];
                            $model->validate();
                            if(!$model->hasErrors()){
                                if($model->save())
                                      $this->redirect(array('view','id'=>$model->id));                           
                            }
                    }
                    if(!isset($_POST['Users']['temp_password']) )
                        $model->temp_password='';

                    $this->render('update',array(
                            'model'=>$model,'parentUrl'=>$this->parentUrl
                    ));           
            }catch (Exception $e){
                     Yii::log("Invalid request. Please do not repeat this request again.");
                    throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
            }
	}

	public function actionDelete($id)
	{
             try{
                    $model = $this->loadModel($id);
                    if($model){
                        if($model->delete()){
                             $this->redirect(Yii::app()->createAbsoluteUrl($this->parentUrl .'/index'));   
                        }
                    } else throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');            
            }catch (Exception $e){
                    Yii::log("Invalid request. Please do not repeat this request again.");
                    throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');               
            }        
	}

	public function actionIndex()
	{
        try{
            $criteria = new CDbCriteria;
            $criteria->select = ('t.*');
            $criteria->order = 't.created_date DESC';
            $data=Users::model()->getAll($criteria);
            $this->render('index',array(
                    'data'=>$data,'parentUrl'=>$this->parentUrl
            ));           
        }catch (Exception $e){
            Yii::log("Invalid request. Please do not repeat this request again.");
            throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
        }

	}

	public function loadModel($id)
	{
             try{
 		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;           
            }catch (Exception $e){
                    Yii::log("Invalid request. Please do not repeat this request again.");
                    throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');             
            }       
	}

}
