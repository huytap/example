<?php
$this->breadcrumbs = array(
    'Quản lý chi nhánh' => array('index'),
    'Tạo chi nhánh mới',
);
?><div class="page-header position-relative">
    <h1>Tạo chi nhánh mới</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>