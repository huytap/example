<?php
$this->breadcrumbs=array(
	'Admin Management'=>array('index'),
	'Create',
);
 ?><div class="page-header position-relative">
        <h1>
                Create Admin        </h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>