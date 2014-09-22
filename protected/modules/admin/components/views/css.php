<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Citenco Admin</title>
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/js/jquery-2.0.3.min.js"></script>
		<!--basic styles-->
        <link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/images/favicon.ico" type="image/x-icon">
		
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/daterangepicker.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/colorpicker.css" />
		<style type="text/css">
			label.text-left{
				text-align: left !important;
				width: 162px !important;
			}
			ul.items-table
			{
				padding: 0;
				margin: 0;
				list-style: none;
			}
			ul.items-table li
			{
				height: 30px;
			}
			.table tbody td{
				text-align: center;
			}
			.table thead th{
				text-align: center;
			}
            #modal-form{
                width: 73%;
                margin-left: auto;
                margin-right: auto;
                left: 10%;
                display: none;
            }
		</style>
		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->


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
	<body>