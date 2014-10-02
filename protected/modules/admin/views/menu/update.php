<?php
$this->breadcrumbs = array(
    'Quản lý trang' => array('index'),
    'Cập nhật trang',
);
?><div class="page-header position-relative">
    <h1>Cập nhật trang</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
