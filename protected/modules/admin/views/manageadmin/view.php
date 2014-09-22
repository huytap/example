<?php

$this->breadcrumbs=array(
	'Admin Management'=>array('index'),
	'View',
);
 ?><div class="page-header position-relative">
        <h1>View Users</h1>
</div><!--/.page-header-->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
 		'first_name',
		'last_name',
		'email',
                array(
                    'name'=>'created_date',
                    'value'=> date('d-m-Y',  strtotime($model->created_date))
                ),
                array(
                    'name'=>'status',
                    'value'=>$model->status==1 ? 'Active' : 'Inactive'
                ),
		'phone',
		'address',
	),
)); ?>