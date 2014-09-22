<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Perfectum Dashboard - Perfect Bootstrap Admin Template</title>
	<meta name="description" content="Perfectum Dashboard Bootstrap Admin Template.">
	<meta name="author" content="Å�ukasz Holeczek">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo Yii::app()->theme->baseUrl; ?>/admins/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/admins/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo Yii::app()->theme->baseUrl; ?>/admins/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo Yii::app()->theme->baseUrl; ?>/admins/css/style-responsive.css" rel="stylesheet">
	
	<!--[if lt IE 7 ]>
	<link id="ie-style" href="css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8 ]>
	<link id="ie-style" href="css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 9 ]>
	<![endif]-->
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->

	  <!-- start: Favicon -->
	  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/admins/img/favicon.ico">
	  <!-- end: Favicon -->

	  <style type="text/css">
	  body { background: url('<?php echo Yii::app()->theme->baseUrl; ?>/admins/img/bg-login.jpg') !important; }
	  </style>

	</head>

	<body>
		<div class="container-fluid">
			<div class="row-fluid">

				<div class="row-fluid">
					<div class="login-box">
						<div class="icons">
                                                    <a href="<?php echo Yii::app()->homeUrl; ?>"><i class="icon-home"></i></a>
						</div>
						<h2>Hải Vân Travel</h2>
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<?php if(isset($msg)) :?>
								<div class="input-prepend">
									<span class="add-on" style="color:red;padding:0;border:0 !important; font-weight:bold;font-family:tahoma"><?php echo $msg; ?></span>
								</div>
								<?php endif; ?>
								<div class="input-prepend" title="Username">
									<span class="add-on"><i class="icon-user"></i></span>
									<input class="input-large span10" name="AdminLoginForm[email]" id="username" type="text" placeholder="Email"/>
								</div>
								<div class="clearfix"></div>

								<div class="input-prepend" title="Password">
									<span class="add-on"><i class="icon-lock"></i></span>
									<input class="input-large span10" name="AdminLoginForm[password]" id="password" type="password" placeholder="Mật khẩu"/>
								</div>
								<div class="clearfix"></div>

								<label class="remember" for="remember"><input type="checkbox" id="remember" />Nhớ mật khẩu</label>

								<div class="button-login">	
									<button type="submit" class="btn btn-primary"><i class="icon-off icon-white"></i> Đăng nhập</button>
								</div>
								<div class="clearfix"></div>
							</fieldset>
						</form>
						<hr>
					</div><!--/span-->
				</div><!--/row-->

			</div><!--/fluid-row-->

		</div><!--/.fluid-container-->

		<!-- start: JavaScript-->

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery-migrate-1.0.0.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.ui.touch-punch.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/bootstrap.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.cookie.js"></script>

		<script src='<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/fullcalendar.min.js'></script>

		<script src='<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/excanvas.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.flot.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.flot.stack.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.flot.resize.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.chosen.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.cleditor.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.noty.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.elfinder.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.raty.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.iphone.toggle.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.uploadify-3.1.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.gritter.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.imagesloaded.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.masonry.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.knob.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/jquery.sparkline.min.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admins/js/custom.js"></script>
		<!-- end: JavaScript-->

	</body>
	</html>