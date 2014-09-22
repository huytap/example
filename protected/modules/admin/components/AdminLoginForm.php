<?php
/*
 * DTOAN
 * author : Pham Duy Toan
 * Email  : ghostkissboy12@gmail.com
 */
class AdminLoginForm extends CFormModel
{
	public  $email;
	public  $password;
	public  $rememberMe;
	private $_identity;

	public function rules()
	{
		return array(
                                array('email, password', 'required'),
                                array('rememberMe', 'boolean'),
                                array('password', 'authenticate'),
                                array('password,email', 'safe'),
			);
	}

	public function attributeLabels()
	{
		return array(
                            'email'=> Yii::t('user','Email'),
                            'password'=> Yii::t('user','Password'),
                            'rememberMe'=> Yii::t('user','rememberMe'),
			);
	}

    public function authenticate($attribute,$params)
    {
        if(!$this->hasErrors())
        {
            $this->_identity=new AdminUserIdentity($this->email,$this->password);
         
            if(!$this->_identity->authenticate()){
                switch($this->_identity->errorCode)
                {
                    case AdminUserIdentity::ERROR_USERNAME_INVALID:
                        $this->addError("email","Email is not valid.");
                        break;
                    case AdminUserIdentity::ERROR_USERNAME_BLOCKED:
                        $this->addError("email","Account has been blocked.");
                        break;
                    case AdminUserIdentity::ERROR_PASSWORD_INVALID:
                        $this->addError("password","Wrong password");
                        break;
                }
            }else{
                $duration=$this->rememberMe ? 3600*24*30 : 1300; // 30 days
                Yii::app()->user->login($this->_identity,$duration);
            }

        }
    }

	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new AdminUserIdentity($this->email,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 1300; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}

?>