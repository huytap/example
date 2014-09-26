<?php
$this->breadcrumbs=array(
    'Quản lý khách hàng' =>array('index'),
    'Chi tiết',
);
 ?>
 <h3 class="header smaller lighter blue">Chi tiết</h3>
<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'name',
        'email',
        'content:html',
        array(
            'name' => 'created_date',
            'type' => 'raw',
            'value' => date('d-m-Y',$model['created_date'])
        )
    ),
)); ?>
