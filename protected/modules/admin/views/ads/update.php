<?php
$this->breadcrumbs = array(
    'Quản lý quảng cáo' => array('index'),
    'Cập nhật quảng cáo',
);
?><div class="page-header position-relative">
    <h1>Cập nhật quảng cáo</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>