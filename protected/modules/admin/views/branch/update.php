<?php
$this->breadcrumbs = array(
    'Quản lý chi nhánh' => array('index'),
    'Cập nhật chi nhánh',
);
?><div class="page-header position-relative">
    <h1>Cập nhật chi nhánh</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>