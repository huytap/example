<?php
$this->breadcrumbs = array(
    'Quản lý trang con' => array('index'),
    'Tạo mới',
);
?><div class="page-header position-relative">
    <h1>Tạo mới</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>