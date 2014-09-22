<?php if (Yii::app()->user->hasFlash('messageError')): ?>
<div class="clearfix">
      <div class="pull-left alert alert-success inline no-margin" style="text-align: center;margin-bottom:20px;width:96%;">
              <button data-dismiss="alert" class="close" type="button">
                      <i class="icon-remove"></i>
              </button>

              <i class="icon-umbrella bigger-120 blue"></i>
              <?php echo Yii::app()->user->getFlash('messageError'); ?>
      </div>
</div>
<?php endif; ?>    