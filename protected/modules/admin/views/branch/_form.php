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
        <label class="control-label">Tên chi nhánh</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'title', array("placeholder"=>"Tên chi nhánh","maxlength"=>"255", "size"=>"100"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'title'); ?></span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Địa chỉ</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'address', array("placeholder"=>"Địa chỉ","maxlength"=>"255", "size"=>"100"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'address'); ?></span>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label">Số điện thoại</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'tel', array("placeholder"=>"Số điện thoại","maxlength"=>"255", "size"=>"100"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'tel'); ?></span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Fax</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'fax', array("placeholder"=>"Fax","maxlength"=>"255", "size"=>"60"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'fax'); ?></span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Menu hiển thị bản đồ chi nhánh này</label>
        <div class="controls">
            <?php echo $form->dropDownlist($model, 'menu_id', MyFunctionCustom::cms(), array("empty"=>"Chọn menu"))?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Link bản đồ</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'map', array("placeholder"=>"Link bản đồ","maxlength"=>"1000", "size"=>"60"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'map'); ?></span>
        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-info" type="submit">
            <i class="icon-ok bigger-110"></i>Submit
        </button>
    </div>
</div>
<?php $this->endWidget(); ?>