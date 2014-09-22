<?php
$this->breadcrumbs = array(
    'Quản lý nội dung' => array('index'),
    'Cập nhật',
);
?><div class="page-header position-relative">
    <h1>Cập nhật trang/ nội dung</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model, 'data' => $data)); ?>
