<?php

class DefaultController extends AdminController {

    public function actionIndex() {
        $model = new Users();
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $model->save();
        }
        $this->render('index', array('model' => $model));
    }

    public function actionChangeinformation($id) {
        try {
            $model = $this->loadModel($id);

            if (isset($_POST['Users'])) {
                $model->setScenario('change_info');
                // $model->scenario = 'change_info';
                $message = "Change Information Success";
                $model->attributes = $_POST['Users'];
                // Validate with only one scenario
                $model->validate('change_info');
                // var_dump($model->errors);
                if (!$model->hasErrors()) {
                    if ($model->save())
                        $this->render('changeinformation', array('message' => $message));
                    Yii::app()->end();
                }
            }
            $this->render('changeinformation', array(
                'model' => $model
            ));
        } catch (Exception $e) {
            Yii::log("Invalid request. Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    public function actionChangepassword($id) {
        try {
            $model = $this->loadModel($id);
            if (isset($_POST['Users'])) {
                if ($model->password_hash != md5($_POST['Users']['old_password'])) {
                    $message = 'Your current password is not correct!';
                    $this->render('changepassword', array('message' => $message, 'model' => $model));
                    Yii::app()->end();
                }
                $model->setScenario('change_password');
                $model->attributes = $_POST['Users'];


                $message = "Change Information Success";
                $model->validate('change_password');
                if (!$model->hasErrors()) {
                    if ($model->save())
                        $this->render('changepassword', array('success' => $message));
                    Yii::app()->end();
                }
            }
            $this->render('changepassword', array('model' => $model));
        } catch (Exception $e) {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    public function loadModel($id) {
        try {
            $model = Users::model()->findByPk($id);
            if ($model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
            return $model;
        } catch (Exception $e) {
            Yii::log("Invalid request. Please do not repeat this request again.");
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

}