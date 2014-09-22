<?php
$this->breadcrumbs = array(
    'Quản lý quảng cáo' => array('index'),
    'Tạo quảng cáo',
);
?><div class="page-header position-relative">
    <h1>Tạo quảng cáo</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>