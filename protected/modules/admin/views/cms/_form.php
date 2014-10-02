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
        <label class="control-label">Chọn trang</label>
        <div class="controls">
            <?php echo $form->dropDownlist($model, 'menu_id', MyFunctionCustom::cms(),array('empty' => '-- Chọn trang --'));?>
            <span class="help-inline"><?php echo $form->error($model, 'menu_id'); ?></span>
            
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
        <label class="control-label">Album thiết bị công nghệ (nếu có)</label>
        <div class="controls">
            <div  id="gallary-tmp" style="margin-bottom:10px;">
            <?php 
                if($model->gallery_id !=''): 
                    $gallery = Item::model()->with('gallery')->findByAttributes(array('gallery_id'=>$model->gallery_id));
                    if($gallery):?>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/timthumb.php?src=<?php echo Yii::app()->baseUrl; ?>/images/<?php echo $gallery->name; ?>&h=150&w=150" />
                    <?php 
                    endif;
                endif; ?>
            </div>
            <?php echo $form->hiddenField($model,'gallery_id');?>
            <a href="#modal-form" role="button" class="blue" data-toggle="modal">
                <button class="btn btn-small btn-primary">Chọn album thiết bị công nghệ</button></a>
                        <span class="help-inline"><?php echo $form->error($model, 'gallery_id'); ?></span>
        </div>
    </div>

     <div class="controls">
        <label>
            <input name="Cms[index]" type="checkbox" <?php if($model['index']) echo "checked='checked'";?>>
            <span class="lbl"> Hiển thị trên trang chủ</span>
        </label>
    </div>

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
        <label class="control-label">Meta keyword</label>
        <div class="controls">
            <?php
                echo $form->textField($model,'meta_keyword', array("placeholder"=>"Meta keyword","maxlength"=>"255", "size"=>"60"))
            ?>
            <span class="help-inline"><?php echo $form->error($model, 'meta_keyword'); ?></span>
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


    <div class="control-group" >
        <label class="control-group">Mô tả ngắn</label>
    </div>       
        <?php
            $this->widget('ext.editMe.ExtEditMe', array(
            //'name' => 'short_description',
            'id' => 'short_description_',
            'height' => '250px',
            'model' => $model,
            'width' => '100%',
            'attribute' => 'short_description',
            'toolbar' => Yii::app()->params['ckeditor'],
            'filebrowserBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html',
            'filebrowserImageBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html?type=Images',
            'filebrowserFlashBrowseUrl' => Yii::app()->baseUrl . '/ckfinder/ckfinder.html?type=Flash',
            'filebrowserUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            'filebrowserImageUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            'filebrowserFlashUploadUrl' => Yii::app()->baseUrl . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        ));
    ?>


    <div class="control-group" >
        <label class="control-group">Mô tả đầy đủ</label>
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
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/tag/bootstrap-tagsinput.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/tag/bootstrap-tagsinput.css">
<style>
    .control-group span.required,.errorMessage {color:red;}
    .bootstrap-tagsinput {width:365px;margin-top:5px;}
    .ace-file-input {width: 380px;height: auto;}

    .div1, .div2, .div3{
        float: left;
    }
    .div1 select, .div2 select{
    margin-left: 20px;
    width: 50px;
    }
    
    .div2 label{
        width: 100px !important;
    }
    
    .div3 input{
        width: 200px !important;
    }
    
    .jason{
        display: none;
    }
    
    .add{
        clear: both;
        padding-top: 10px;
    }
    
    .div4 .controls a{
        height: 18px;
        vertical-align: middle;        
    }
    
    .div4 .btn{
        line-height: 0px;
    }
</style>

<?php echo $this->renderPartial('_popup', array('model'=>$model,'data' =>$data)); ?>