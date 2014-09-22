<?php
$this->breadcrumbs=array(
    'Change Password'
);
 ?><div class="page-header position-relative">
    <h1>
      	Change Password       
    </h1>
</div><!--/.page-header-->
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-content">
        	<?php if(isset($success)) : ?>
        		<div class="control-group">
                    <label for="focusedInput" class="control-label" style="color:red;"><?php echo $success; ?></label>
                </div>
        	<?php elseif(isset($message)) : ?>
                <div class="control-group">
                    <label for="focusedInput" class="control-label" style="color:red;"><?php echo $message; ?></label>
                </div>
                <?php $form=$this->beginWidget('CActiveForm', array(
				               'id'=>'users-form',
				               'enableAjaxValidation'=>false,
				               'enableClientValidation'=>true,
				                'htmlOptions'=>array(
				                    'class'=>'form-horizontal',
				                ),              
				       )); ?>
				<div class="control-group">
                    <label for="focusedInput" class="control-label">Current Password</label>
                    <div class="controls">
                        <?php echo $form->passwordField($model,'old_password',array('size'=>60,'maxlength'=>100,'class'=>'span5')); ?>
                    </div>
                        <?php echo $form->error($model,'old_password'); ?>
                </div>
                <div class="control-group">
                    <label for="focusedInput" class="control-label">New Password</label>
                    <div class="controls">
                        <?php echo $form->passwordField($model,'temp_password',array('size'=>60,'maxlength'=>100,'class'=>'span5')); ?>
                    </div>
                        <?php echo $form->error($model,'temp_password'); ?>
                </div>
                <div class="control-group">
                    <label for="focusedInput" class="control-label">Confirm Password</label>
                    <div class="controls">
                        <?php echo $form->passwordField($model,'confirm_password',array('size'=>30,'maxlength'=>255,'class'=>'span5')); ?>
                    </div>
                        <?php echo $form->error($model,'confirm_password'); ?>
                </div>
                <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?php $this->endWidget(); ?>
            <?php else : ?>

				<?php $form=$this->beginWidget('CActiveForm', array(
				               'id'=>'users-form',
				               'enableAjaxValidation'=>false,
				               'enableClientValidation'=>true,
				                'htmlOptions'=>array(
				                    'class'=>'form-horizontal',
				                ),              
				       )); ?>
				<div class="control-group">
                    <label for="focusedInput" class="control-label">Current Password</label>
                    <div class="controls">
                        <?php echo $form->passwordField($model,'old_password',array('size'=>60,'maxlength'=>100,'class'=>'span5')); ?>
                    </div>
                        <?php echo $form->error($model,'old_password'); ?>
                </div>
                <div class="control-group">
                    <label for="focusedInput" class="control-label">New Password</label>
                    <div class="controls">
                        <?php echo $form->passwordField($model,'temp_password',array('size'=>60,'maxlength'=>100,'class'=>'span5')); ?>
                    </div>
                        <?php echo $form->error($model,'temp_password'); ?>
                </div>
                <div class="control-group">
                    <label for="focusedInput" class="control-label">Confirm Password</label>
                    <div class="controls">
                        <?php echo $form->passwordField($model,'confirm_password',array('size'=>30,'maxlength'=>255,'class'=>'span5')); ?>
                    </div>
                        <?php echo $form->error($model,'confirm_password'); ?>
                </div>
                <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?php $this->endWidget(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>