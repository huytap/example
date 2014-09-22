<?php
$this->breadcrumbs = array(
    'Quản lý menu' => array('index'),
    'Tạo menu',
);
?><div class="page-header position-relative">
    <h1>Tạo menu</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>