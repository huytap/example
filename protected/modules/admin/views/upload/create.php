<?php
$this->breadcrumbs = array(
    'Quản lý file' => array('index'),
    'Upload file',
);
?><div class="page-header position-relative">
    <h1>Upload file</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>