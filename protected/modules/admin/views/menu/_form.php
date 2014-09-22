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
        <label class="control-label">Priority</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'priority', array("placeholder"=>"Display order","maxlength"=>"100", "size"=>"60"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'priority'); ?></span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Menu Name</label>
        <div class="controls">
            <?php echo $form->textField($model, 'name', array('placeholder' => 'Menu name', "maxlength"=>"100", "size"=>"60"));?>
            <span class="help-inline"><?php echo $form->error($model, 'name'); ?></span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Parent Menu</label>
        <div class="controls">
            <?php echo $form->dropDownlist($model, 'parent_id', MyFunctionCustom::parent_menu(),array('empty' => '-- Parent Menu --'));?>
            <span class="help-inline"><?php echo $form->error($model, 'name'); ?></span>
        </div>
    </div>

    <div class="controls" style="display:<?php if($model['parent_id'] == '') echo 'block'; else echo 'none';?>" id="showLink">
        <label>
            <input name="Menu[show_link_parent]" type="checkbox" <?php if($model['show_link_parent']) echo "checked='checked'";?>>
            <span class="lbl"> Hiển thị link (mặc định nếu có menu con sẽ hiển thị link dấu '#')</span>
        </label>
    </div>

    <div class="control-group">
        <label class="control-label">Hình đại diện</label>
        <div class="controls span3" style="margin:10px">
            <?php echo $form->fileField($model, 'cover_photo', array('class' => 'id-input-file-1')); ?>
            <span class="help-inline"><?php echo $form->error($model, 'cover_photo'); ?></span>
        </div>
    </div>
    
    <div class="control-group">
        <div class="controls">
            <?php if($model['cover_photo']):?>
                <img src="<?php echo Yii::app()->baseUrl.'/timthumb.php?src=' . Yii::app()->baseUrl .'/images/'. $model['cover_photo']?>&h=100&w=100">
            <?php endif;?>
        </div>
    </div>

    <div class="controls">
        <label>
            <input name="Menu[static_page]" type="checkbox" <?php if($model['static_page']) echo "checked='checked'";?>>
            <span class="lbl"> Là trang tĩnh?</span>
        </label>
    </div>
    
    <div class="control-group">
        <label class="control-label">Status</label>
        <div class="controls">
            <?php 
            echo $form->dropDownlist($model, 'disabled', MyFunctionCustom::$status);?>
        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-info" type="submit">
            <i class="icon-ok bigger-110"></i>Submit
        </button>
    </div>
</div>
<?php $this->endWidget(); ?>