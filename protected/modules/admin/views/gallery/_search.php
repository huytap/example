<div class="search-form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    )); ?>

    <div class="row">
        <div class="dataTables_filter" id="sample-table-2_filter">
            <label>

                <?php echo $form->textField($model, 'gallery_id', array('size' => 47, 'maxlength' => 250)); ?>
                <input style="margin-top:-8px;" type="submit" class="btn bigl btn-primary" value="Tìm"/>
            </label>
        </div>

        <?php $this->endWidget(); ?>
    </div>
    <!-- search-form -->
</div>