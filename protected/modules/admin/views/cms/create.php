<?php
$this->breadcrumbs = array(
    'Quản lý nội dung' => array('index'),
    'Tạo trang mới/ nội dung mới',
);
?><div class="page-header position-relative">
    <h1>Tạo trang mới/ nội dung mới</h1>
</div><!--/.page-header-->
<?php echo $this->renderPartial('_form', array('model' => $model, 'data' => $data)); ?>