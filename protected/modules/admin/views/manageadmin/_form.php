<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-content">
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
                            <?php if(!$model->isNewrecord): ?>
                            <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>255,'class'=>'span5','disabled'=>true)); ?>
                            <?php else: ?>
                            <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>255,'class'=>'span5')); ?>
                            <?php endif; ?>
                        </div>
                            <?php echo $form->error($model,'email'); ?>
                    </div>
                    
                    <?php if(!$model->isNewrecord): ?>
                    <p style="color:red;margin-left:180px;" >Leave this blank if you don`t want to change</p>
                    <?php endif; ?>
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Password</label>
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


                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Status</label>
                        <div class="controls">
                             <?php echo $form->dropDownlist($model, 'status', MyFunctionCustom::$status); ?>
                        </div>
                            <?php echo $form->error($model,'status'); ?>
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

        </div>
    </div><!--/span-->
</div><!--/row-->
<style>
    .errorMessage{color:red;margin-left:180px;}
</style>