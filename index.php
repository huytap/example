<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
//error_reporting(0);
// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
include 'website_define.php';
require_once($yii);
Yii::createWebApplication($config);
SettingForm::applySettings();

Yii::app()->run();

