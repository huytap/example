<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'menu-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data',
    ),
        ));
?>
<div class="row-fluid">

    <div class="control-group">
        <label class="control-label">Tiêu đề</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'title', array("placeholder"=>"Tiêu đề","maxlength"=>"100", "size"=>"60"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'title'); ?></span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">File upload</label>
        <div class="controls span3" style="margin:10px">
            <?php echo $form->fileField($model, 'url', array('class' => 'id-input-file-1')); ?>
            <span class="help-inline"><?php echo $form->error($model, 'url'); ?></span>
        </div>
    </div>
    
    <div class="control-group">
        <div class="controls">
            <?php if($model['url']){
                echo $model['url'];
            }?>
        </div>
    </div>
    <div class="form-actions">
        <button class="btn btn-info" type="submit">
            <i class="icon-ok bigger-110"></i>Submit
        </button>
    </div>
</div>
<?php $this->endWidget(); ?>