<?php

/*
 * DTOAN
 * author : Pham Duy Toan
 * Email  : ghostkissboy12@gmail.com
 */

class UserIdentityFE extends CUserIdentity {

    private $_id;
    public $applicationId = 2;
    private $status = 1;
    public $role_id;

    const ERROR_USERNAME_BLOCKED = 35;
    const ERROR_FAILURE_MAX_TIMES = 4;

    public function authenticate() {
        $record = Users::model()->findByAttributes(array(
            'username' => $this->username,
            'application_id' => $this->applicationId,
                ));

        if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if (trim($record->password_hash) != md5(trim($this->password))) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else if ($record->status == 0) {
            $this->errorCode = self::ERROR_USERNAME_BLOCKED;
        } else {
            $this->_id = $record->id;
            $this->role_id = $record->role_id;
            $this->errorCode = self::ERROR_NONE;
            Yii::app()->session['LOGGED_USER'] = $record;
        }
        return !$this->errorCode;
    }

    public function getId() {
        if (isset(Yii::app()->session['LOGGED_USER'])) {
            $ab = Yii::app()->session['LOGGED_USER'];
            $this->_id = $ab->id;
        }
        return $this->_id;
    }

    public function getRoleId() {
        return $this->role_id;
    }

}