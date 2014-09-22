
<?php
$this->breadcrumbs=array(
	'Quản lý hình ảnh'=>array('index'),
    'Tạo album'
);
?> 

<div class="page-header position-relative">
        <h1>
                Tạo album        </h1>
</div><!--/.page-header-->

<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="row-fluid">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'category-form',
//            'enableAjaxValidation' => false,
                'enableClientValidation' => true,
                'htmlOptions' => array(
                    'class' => 'form-horizontal',
                    'enctype' => 'multipart/form-data',
                    ),
                ));
                ?>
                <div class="control-group">
                    <label class="control-label" for="form-field-2">Tên Album</label>

                    <div class="controls">
                        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255,'class'=>'span5')); ?>
                        <span class="help-inline"><?php echo $form->error($model, 'name'); ?></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="form-field-2">Mô tả</label>

                    <div class="controls">
                        <?php echo $form->textField($model, 'description', array('size' => 60, 'maxlength' => 255,'class'=>'span5')); ?>
                        <span class="help-inline"><?php echo $form->error($model, 'age'); ?></span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="form-field-2">Chọn loại hình ảnh (nếu có)</label>
                    <div class="controls">
                        <?php echo $form->dropDownlist($model, 'slide', MyFunctionCustom::$gallery_page, array('empty' => 'Chọn loại album'));?>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">                    
                        <div class="span5">
                            <input multiple="" type="file" id="id-input-file-3" name="items[]" />
                            <label>
                                <input type="checkbox" name="file-format" id="id-file-format" />
                                <span class="lbl"> Allow only images</span>
                            </label>
                        </div>
                    </div>   
                </div>
                <div class="form-actions">
                    <button class="btn btn-info" type="submit">
                        <i class="icon-ok bigger-110"></i>
                        Submit
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="icon-undo bigger-110"></i>
                        Reset
                    </button>
                </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>