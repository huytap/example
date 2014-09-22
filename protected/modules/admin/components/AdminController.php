<?php
date_default_timezone_set('UTC');
class AdminController extends Controller
{

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layoutPath;
//    public $layout = null;
    public $layout='/layouts/main';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function init() {
          parent::init();
    	$this->layoutPath = Yii::getPathOfAlias('application.modules.admin.views.layouts.main');
    	$this->layout = 'application.modules.admin.views.layouts.main';
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    
    public function beforeRender($view) {
        parent::beforeRender($view);
        if(!isset(Yii::app()->user->id) && Yii::app()->controller->action->id !='login'){
             $this->redirect (Yii::app ()->createAbsoluteUrl ('admin/site/login'));
        }else{
           if(isset(Yii::app()->user->id) && Yii::app()->controller->action->id =='login'){
                $this->redirect (Yii::app ()->createAbsoluteUrl ('admin/default/index'));
           }           
           if(isset(Yii::app()->user->role_id) && Yii::app()->user->role_id >2 ){
                MyFunctionCustom::checkAccess(Yii::app()->user->role_id);
           } 
        }
        return true;
    }
    
}
?>