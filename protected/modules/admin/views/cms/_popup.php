<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(e){
    e.preventDefault();
	$.fn.yiiListView.update('gallery-list', {
		data: $(this).serialize(),
		complete:function () {
		    bindEvent();
		}
	});
	return false;
});
");

Yii::app()->clientScript->registerScript('ajaxupdate', "
$('#gallery-list .yiiPager a').on('click', function(e) {
    e.preventDefault();
    $.fn.yiiListView.update('gallery-list', {
        type: 'POST',
        url: $(this).attr('href'),
        success: function() {
           // $.fn.yiiListView.update('gallery-list');
        }
    });
    return false;
});
");
?>
<div id="modal-form" class="modal hide" tabindex="-1">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="blue bigger">Gallery </h4>
        <?php echo $this->renderPartial('_search',array('data' => $data)); ?>
    </div>

    <div class="modal-body overflow-visible">
        <div class="row-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <!--PAGE CONTENT BEGINS-->
                    <?php
                        $this->widget('bootstrap.widgets.TbListView', array(
                            'dataProvider' => $data->search(),
                            'itemView' => '_gallery_items',
                            'id' => 'gallery-list',
                            'itemsTagName' => 'ul',
                            'template' => '{items}<div class="clearfix"></div><div class="span4 col-centered">{pager}</div>',
                            'itemsCssClass' => 'ace-thumbnails gallery-list',
                        ));
                    ?>

                </div><!--/.span-->
            </div><!--/.row-fluid-->                    

        </div>
    </div>

    <div class="modal-footer">
        <button class="btn btn-small" data-dismiss="modal">
            <i class="icon-remove"></i>
            Cancel
        </button>

        <button class="btn btn-small btn-primary save-gallery">
            <i class="icon-ok"></i>
            Save
        </button>
    </div>
</div> 
<style>
    .check-thumb {
        margin-bottom: 30px;
    }
    #modal-form{
        width: 73%;
        margin-left: auto;
        margin-right: auto;
        left: 10%;
        display: none;
    }
</style>
