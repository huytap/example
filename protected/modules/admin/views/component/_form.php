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
        <label class="control-label">Thứ tự hiển thị</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'priority', array("placeholder"=>"Thứ tự hiển thị","maxlength"=>"100", "size"=>"60"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'priority'); ?></span>
        </div>
    </div>

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

    <div class="control-group">
        <label class="control-label">Link tới trang mô tả chi tiết</label>
        <div class="controls">
            <?php echo $form->textField($model, 'link_url', array("placeholder"=>"Link url","maxlength"=>"100", "size"=>"60"))?>
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