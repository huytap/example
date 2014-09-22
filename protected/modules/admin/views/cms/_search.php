<div class="search-form gallery-search-form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    )); ?>

    <div class="row">
        <div class="dataTables_filter" id="sample-table-2_filter">
            <label>

                <?php echo $form->textField($data, 'gallery_id', array('size' => 47, 'maxlength' => 250)); ?>
                <input style="margin-top:-8px;" type="submit" class="btn btn-small btn-primary" value="Search"/>
            </label>
        </div>

        <?php $this->endWidget(); ?>
    </div>
    <!-- search-form -->
</div>
<style>
    .gallery-search-form{
        position: absolute;
        top: 5px;
        right: 40px;
    }
</style>