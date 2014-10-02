<?php
$this->breadcrumbs = array(
    'Quản lý trang' => array('index'),
    'Tạo trang',
);
?><div class="page-header position-relative">
    <h1>Tạo trang</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>