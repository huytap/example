<?php
$this->breadcrumbs = array(
    'System',
);
?>
<?php if (Yii::app()->user->hasFlash('setting')): ?>
    <div class="clearfix">
        <div class="pull-left alert alert-success inline no-margin"
             style="text-align: center;margin-bottom:20px;width:96%;">
            <button data-dismiss="alert" class="close" type="button">
                <i class="icon-remove"></i>
            </button>

            <i class="icon-umbrella bigger-120 blue"></i>
            <?php echo Yii::app()->user->getFlash('setting'); ?>
        </div>
    </div>
<?php endif; ?>
<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'setting-form-admin-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
    <div style='float:left;width:45%;'>

        <div class="widget-box">
            <div class="widget-header">
                <h4>Thiết lập thông tin website</h4>

                      <span class="widget-toolbar">
                          <a data-action="collapse" href="#">
                              <i class="icon-chevron-up"></i>
                          </a>
                      </span>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div class="row-fluid">
                        <label class="control-label" for="form-field-2">Title </label>
                        <?php echo $form->textField($model, 'title', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>
                <div class="widget-main">
                    <div class="row-fluid">
                        <label class="control-label" for="form-field-2">Meta Keyword </label>
                        <?php echo $form->textArea($model, 'meta_keywords', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>
                <div class="widget-main">
                    <div class="row-fluid">
                        <label class="control-label" for="form-field-2">Meta Description </label>
                        <?php echo $form->textArea($model, 'meta_description', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div style='float:right;width:45%;'>

        <div class="widget-box">
            <div class="widget-header">
                <h4>Thiết lập thông tin công ty</h4>

                      <span class="widget-toolbar">
                          <a data-action="collapse" href="#">
                              <i class="icon-chevron-up"></i>
                          </a>
                      </span>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="row-fluid">
                        <label>Tên công ty</label>
                        <?php echo $form->textField($model, 'company', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>

                <div class="widget-main">
                    <div class="row-fluid">
                        <label>Điện thoại</label>
                        <?php echo $form->textField($model, 'phone_company', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>

                <div class="widget-main">
                    <div class="row-fluid">
                        <label>Fax</label>
                        <?php echo $form->textField($model, 'fax_company', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>

                <div class="widget-main">
                    <div class="row-fluid">
                        <label>Địa chỉ</label>
                        <?php echo $form->textField($model, 'address_company', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="clear clearfix"></div>

    <div style='float:left;width:45%;'>
        <div class="widget-box">
            <div class="widget-header">
                <h4>Thiết lập thông tin mạng xã hội</h4>
                      <span class="widget-toolbar">
                          <a data-action="collapse" href="#">
                              <i class="icon-chevron-up"></i>
                          </a>
                      </span>
            </div>

            <div class="widget-body">

                <div class="widget-main">
                    <div class="row-fluid">
                        <?php echo $form->labelEx($model, 'facebook'); ?>
                        <?php echo $form->textField($model, 'facebook', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>
                
                <div class="widget-main">
                    <div class="row-fluid">
                        <?php echo $form->labelEx($model, 'youtube'); ?>
                        <?php echo $form->textField($model, 'youtube', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style='float:right;width:45%;'>
        <div class="widget-box">
            <div class="widget-header">
                <h4>Thiết lập thông tin phòng kinh doanh</h4>
                      <span class="widget-toolbar">
                          <a data-action="collapse" href="#">
                              <i class="icon-chevron-up"></i>
                          </a>
                      </span>
            </div>

            <div class="widget-body">
                 <div class="widget-main">
                    <div class="row-fluid">
                        <label>Điện thoại</label>
                        <?php echo $form->textField($model, 'phone', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>

                <div class="widget-main">
                    <div class="row-fluid">
                        <label>Fax</label>
                        <?php echo $form->textField($model, 'fax', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>

                <div class="widget-main">
                    <div class="row-fluid">
                        <?php echo $form->labelEx($model, 'email'); ?>
                        <?php echo $form->textField($model, 'email', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>

                <div class="widget-main">
                    <div class="row-fluid">
                        <label>Địa chỉ</label>
                        <?php echo $form->textField($model, 'address', array('class' => 'input-medium search-query span12')); ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="clear" style="clear: both;padding-top:50px;"></div>
    <div class="form-actions" style="clear: both;margin-top:50px;">
        <button type="submit" onclick="$(this).submit();" class="btn btn-info">
            <i class="icon-ok bigger-110"></i>
            Submit
        </button>
    </div>
<?php $this->endWidget(); ?>