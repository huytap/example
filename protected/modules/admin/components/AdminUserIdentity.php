<?php

/*
 * DTOAN
 * author : Pham Duy Toan
 * Email  : ghostkissboy12@gmail.com
 */

class AdminUserIdentity extends UserIdentity {

    public $_id;
    public $applicationId = BE;
    private $status = 1;
    public $role_id;
    protected $_isAdmin = false;
    const ERROR_USERNAME_BLOCKED = 35;
    const ERROR_FAILURE_MAX_TIMES = 4;

    
    public function authenticate() {
        $record = Users::model()->findByAttributes(array('email' => $this->username,
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
            $this->_isAdmin = true;
            $this->errorCode = self::ERROR_NONE;
            Yii::app()->session['LOGGED_USER'] = $record;
        }
        return !$this->errorCode;
    }
    
    public function getId() {
        return $this->_id;
    }

    public function getRoleId() {
        return $this->role_id;
    }    
    

}