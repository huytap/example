<?php
$this->breadcrumbs=array(
    'Change Profile'
);
 ?><div class="page-header position-relative">
        <h1>
                Update Profile        </h1>
</div><!--/.page-header-->
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-content">
            <?php if(isset($message)) : ?>
                <div class="control-group">
                    <label for="focusedInput" class="control-label" style="color:red;"><?php echo $message; ?></label>
                </div>
            <?php else : ?>

        <?php $form=$this->beginWidget('CActiveForm', array(
               'id'=>'users-form',
               'enableAjaxValidation'=>false,
               'enableClientValidation'=>true,
                'htmlOptions'=>array(
                    'class'=>'form-horizontal',
                ),              
       )); ?>
           
                <fieldset>
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">First name</label>
                        <div class="controls">
                            <?php echo $form->textField($model,'first_name',array('size'=>50,'maxlength'=>255,'class'=>'span5')); ?>
                        </div>
                            <?php echo $form->error($model,'first_name'); ?>
                    </div>
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Last name</label>
                        <div class="controls">
                            <?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>255,'class'=>'span5')); ?>
                        </div>
                            <?php echo $form->error($model,'last_name'); ?>
                    </div>

                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Email</label>
                        <div class="controls">
                            <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>255,'class'=>'span5','disabled'=>true)); ?>
                        </div>
                            <?php echo $form->error($model,'email'); ?>
                    </div>
                    

                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Phone</label>
                        <div class="controls">
                            <?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>255,'class'=>'span5')); ?>
                        </div>
                            <?php echo $form->error($model,'phone'); ?>
                    </div>

                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Address</label>
                        <div class="controls">
                            <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255,'class'=>'span5')); ?>
                        </div>
                            <?php echo $form->error($model,'address'); ?>
                    </div>
                   
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </fieldset>
         <?php $this->endWidget(); ?>
         <?php endif;?>
        </div>
    </div><!--/span-->
</div><!--/row-->
<style>
    .errorMessage{color:red;margin-left:180px;}
</style>