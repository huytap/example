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
        <label class="control-label">Tên Menu</label>
        <div class="controls">
            <?php echo $form->textField($model, 'name', array('placeholder' => 'Menu name', "maxlength"=>"100", "size"=>"60"));?>
            <span class="help-inline"><?php echo $form->error($model, 'name'); ?></span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Menu Cha</label>
        <div class="controls">
            <?php echo $form->dropDownlist($model, 'parent_id', MyFunctionCustom::page_menu(),array('empty' => '-- Parent Menu --'));?>
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
            <input id="static" name="Menu[static_page]" type="checkbox" <?php if($model['static_page']) echo "checked='checked'";?>>
            <span class="lbl"> Là trang tĩnh?</span>
        </label>
    </div>
    <div <?php if($model['static_page']) echo 'style="display:none"';?> id="meta">
        <div class="control-group">
            <label class="control-label">Meta title</label>
            <div class="controls">
                <?php
                    echo $form->textField($model,'meta_title', array("placeholder"=>"Meta title","maxlength"=>"255", "size"=>"60"))
                ?>
                <span class="help-inline"><?php echo $form->error($model, 'meta_title'); ?></span>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Meta keywords</label>
            <div class="controls">
                <?php
                    echo $form->textField($model,'meta_keywords', array("placeholder"=>"Meta keywords","maxlength"=>"255", "size"=>"60"))
                ?>
                <span class="help-inline"><?php echo $form->error($model, 'meta_keywords'); ?></span>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Meta description</label>
            <div class="controls">
                <?php
                    echo $form->textField($model,'meta_description', array("placeholder"=>"Meta description","maxlength"=>"255", "size"=>"60"))
                ?>
                <span class="help-inline"><?php echo $form->error($model, 'meta_description'); ?></span>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label">Trạng thái</label>
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
<script type="text/javascript">
    $('#static').click(function(){
        if($(this).attr('checked')){
            $('#meta').hide();
        }else{
            $('#meta').show();
        }
    })
</script>