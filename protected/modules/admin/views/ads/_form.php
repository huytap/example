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
        <label class="control-label">Hình đại diện</label>
        <div class="controls span3" style="margin:10px">
            <?php echo $form->fileField($model, 'photo', array('class' => 'id-input-file-1')); ?>
            <span class="help-inline"><?php echo $form->error($model, 'photo'); ?></span>
        </div>
    </div>
    
    <div class="control-group">
        <div class="controls">
            <?php if($model['photo']):?>
                <img src="<?php echo Yii::app()->baseUrl.'/timthumb.php?src=' . Yii::app()->baseUrl .'/images/'. $model['photo']?>&h=100&w=100">
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
        <label class="control-label">Chọn page hiển thị quảng cáo này</label>        
        <div class="controls">
            <select name="tags[]" multiple="" class="chzn-select" id="form-field-select-4" data-placeholder="Chọn page hiển thị...">
            <option value=""></option>
        <?php
            $tags = explode(',', $model['page']);
            foreach(MyFunctionCustom::page_menu() as $key => $cate):
                $checked = '';
                for($i=0;$i<count($tags);$i++){
                    if($tags[$i] == $key) {
                        $checked = 'selected="selected"';
                    }
                }?>
                <option value="<?php echo $key?>" <?php echo $checked?>><?php echo $cate;?></option>
                
                <?php
                endforeach;?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Trạng thái</label>
        <div class="controls">
            <?php 
            echo $form->dropDownlist($model, 'disabled', MyFunctionCustom::$status);?>
        </div>
    </div>

    <div class="control-group" >
        <label class="control-group">Mô tả</label>
    </div>       
        <?php
            $this->widget('ext.editMe.ExtEditMe', array(
            //'name' => 'short_description',
            'id' => 'description_',
            'height' => '250px',
            'model' => $model,
            'width' => '100%',
            'attribute' => 'description',
            'toolbar' => Yii::app()->params['ckeditor'],
            'filebrowserBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html',
            'filebrowserImageBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html?type=Images',
            'filebrowserFlashBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html?type=Flash',
            'filebrowserUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            'filebrowserImageUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            'filebrowserFlashUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        ));
    ?>

    <div class="form-actions">
        <button class="btn btn-info" type="submit">
            <i class="icon-ok bigger-110"></i>Submit
        </button>
    </div>
</div>
<?php $this->endWidget(); ?>