<?php
$this->breadcrumbs=array(
    'Cms Control' =>array('index'),
    'View Page',
);
 ?>
 <h3 class="header smaller lighter blue">View Page</h3>
<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        array(
            'type'=>'raw',
            'name' => 'cover_photo',
            'value' => CHtml::image(Yii::app()->baseUrl.'/timthumb.php?src=' . Yii::app()->baseUrl .'/images/'. $model['cover_photo'].'&h=100&w=100"')
            ),
        'title',
        'short_description:html',
        'description:html',
        array(
            'name' => 'created_date',
            'type' => 'raw',
            'value' => date('d-m-Y',$model['created_date'])
        )
    ),
)); ?>
