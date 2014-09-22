<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php $this->Widget('CssWidget');?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<?php $this->Widget('HeaderWidget');?>
	<!-- header -->
	<?php $this->Widget('SlideWidget');?>
	<!--end slideshow-->
	<?php echo $content; ?>

	<div class="container padding50"></div>
	
	<?php $this->Widget('FooterWidget');?>
	
	<?php $this->Widget('ScriptWidget');?>
</body>
</html>
