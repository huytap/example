<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login Page - Administrator</title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <!--fonts-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!--ace styles-->

        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/ace-skins.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
        <style type="text/css">
            .footer{
                position: absolute;
                bottom: 0;
                width: 80%;
                padding: 20px 10%;
                background: #202020;
                color: #fff;
            }
            .footer .left{
                width: 50%;
                float: left;
                text-align: left;
            }
            .footer .right{
                width: 50%;
                float: left;
                text-align: right;
            }
        </style>
    <body class="login-layout">
        <div class="main-container container-fluid">
            <div class="main-content">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="login-container">
                            <div class="row-fluid">
                                <div class="center">
                                    <h1>
                                        <span class="red">Citenco.com.vn</span>
                                    </h1>
                                </div>
                            </div>

                            <div class="space-6"></div>

                            <div class="row-fluid">
                                <div class="position-relative">
                                    <div id="login-box" class="login-box visible widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header blue lighter bigger">
                                                    <i class="icon-coffee green"></i>
                                                    Vui lòng nhập thông tin
                                                </h4>

                                                <div class="space-6"></div>

                                               <?php
                                                $form = $this->beginWidget('CActiveForm', array(
                                                    'id' => 'advertises-form',
                                                //    'enableAjaxValidation' => false,
                                                    'enableClientValidation' => true,
                                                    'htmlOptions' => array(
                                                        'class' => 'form-horizontal',
                                                        'enctype' => 'multipart/form-data'
                                                    ),
                                                        ));
                                                ?>
                                                    <fieldset>
                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <?php echo $form->textField($model, 'email', array('placeholder' =>'Email', 'class' => 'span12')); ?>
                                                                <i class="icon-user"></i>
                                                                <?php echo $form->error($model, 'email'); ?>
                                                            </span>
                                                        </label>

                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <?php echo $form->passwordField($model, 'password', array('placeholder' =>'Mật khẩu', 'class' => 'span12')); ?>
                                                                <i class="icon-lock"></i>
                                                                 <?php echo $form->error($model, 'password'); ?>
                                                            </span>
                                                        </label>

                                                        <div class="space"></div>

                                                        <div class="clearfix">
                                                            <label class="inline">
                                                                <!--<input type="checkbox" />-->
                                                                <!--<span class="lbl"> Remember Me</span>-->
                                                            </label>

                                                            <button onclick="return true;" class="width-35 pull-right btn btn-small btn-primary">
                                                                <i class="icon-key"></i>
                                                                Login
                                                            </button>
                                                        </div>

                                                        <div class="space-4"></div>
                                                    </fieldset>
                                                </form>

                                            </div><!--/widget-main-->

                                            <div class="toolbar clearfix">
                                                <div style="text-indent: -99999 !important;" >
                                                    <a style="text-indent: -99999 !important;" href="<?php echo Yii::app()->getHomeUrl(); ?>"  class="forgot-password-link">
                                                      Home
                                                    </a>
                                                </div>

                                            </div>
                                        </div><!--/widget-body-->
                                    </div><!--/login-box-->


                                    <?php $this->endWidget(); ?>
                                </div><!--/position-relative-->
                            </div>
                        </div>
                    </div><!--/.span-->
                </div><!--/.row-fluid-->
            </div>
        </div><!--/.main-container-->
        <div class="footer">
            <div class="left">© 2013 Golden Time Advertising</div>
            <div class="right">All rights reserved.</div>
        </div>
        <!--basic scripts-->

        <!--[if !IE]>-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <!--<![endif]-->

        <!--[if IE]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <![endif]-->

        <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo Yii::app()->theme->baseUrl; ?>/admin/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>

		
        <!--<![endif]-->

        <!--[if IE]>
        <script type="text/javascript">
        window.jQuery || document.write("<script src='<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->

        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/bootstrap.min.js"></script>

        <!--page specific plugin scripts-->

        <!--ace scripts-->

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/ace-elements.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/ace.min.js"></script>

        <!--inline scripts related to this page-->

        <script type="text/javascript">
            function show_box(id) {
                $('.widget-box.visible').removeClass('visible');
                $('#'+id).addClass('visible');
            }
            
        </script>
    </body>
</html>
