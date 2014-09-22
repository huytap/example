<?php
/*
 * DTOAN
 * author : Pham Duy Toan
 * Email  : ghostkissboy12@gmail.com
 */

class WebUser extends CWebUser {
    
    private $_model;

    public function init() {
            $object = Yii::app()->session['LOGGED_USER'];
             $object = Yii::app()->getSession()->get('LOGGED_USER');
//            if(isset($object)){
//                Yii::app()->user->id = $object->id;
//            }
    }

    public function getRoleId(){
        if(Yii::app()->getSession()->get('roleId'))
            return Yii::app()->getSession()->get('roleId');
        return null;
    }
//    public $loginUrl = array('account/signin');
    
    public function login($identity, $duration=0) {
        parent::login($identity, $duration);
        Yii::app()->getSession()->add('roleId', $identity->getRoleId());
    }

    public function logout($destroySession = true) {
        $user_id = Yii::app()->user->id;
        $event = Event::model()->findByAttributes(array('user_lock'=>$user_id));
        if(isset($event))
        {
            $event->lock_session = 0;
            $event->user_lock = 0;
            $event->update(array('lock_session', 'user_lock'));          
        }
    	parent::logout($destroySession);
    }
    
    function getEmail(){
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->email;
    }    
    
    function getUsername(){
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->username;
    }    
    
    function getFirst_Name(){
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->first_name;
    }    

    function getLast_Name(){
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->last_name;
    }    
    
    function getRole_Id(){        
        $user = $this->loadUser(Yii::app()->user->id);
        if(!is_null($user))
            return $user->role_id;
        return null;
    }    

    function getApplication_Id(){
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->application_id;
    }    
    
    function getStatus(){
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->status;
    }    

    function getGender(){
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->gender;
    }    
    
    function getPhone(){
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->phone;
    }    
  
    protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model=Users::model()->findByPk($id);
        }
        return $this->_model;
    }  
    
    public function loginRequired() {
        $app=Yii::app();
        $request=$app->getRequest();
        if(!$request->getIsAjaxRequest())
            $this->setReturnUrl($request->hostInfo.Yii::app()->baseUrl.'/'.$request->pathInfo); 
        
        $moduleInUrl  =  explode('/',$request->pathInfo);
        
        if(($url=$this->loginUrl)!==null) {
            if(is_array($moduleInUrl))
            if($moduleInUrl[0]=='member')
                $url=array('/site/login');
            
            
            if(is_array($url)) {
                $route=isset($url[0]) ? $url[0] : $app->defaultController;
                $url=$app->createUrl($route,array_splice($url,1));
            }
            $request->redirect($url);
        }
        else
        {
            Yii::log('Login Required');
            throw new CHttpException(403,Yii::t('yii','Login Required'));
        }            
    }
    
}
?>