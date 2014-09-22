<?php
$this->breadcrumbs = array(
    'Quản lý hình ảnh' => 'index',
);
?>

<div class="row-fluid">


    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="row-fluid">
            <div class="span12">
                <div class="span6">
                    <a href="<?php echo Yii::app()->createUrl('admin/gallery/create'); ?>" class="btn btn-primary"
                       title="Create New Album">
                        <i class='icon-plus'></i>
                        Tạo album
                    </a>
                </div>
                <div class="span6">
                    <?php $this->renderPartial('_search', array( 'model' => $data ));?>
                </div>

            </div>

        </div>
        <hr>
        <?php if (Yii::app()->user->hasFlash('messageError')): ?>
            <div class="clearfix">
                <div class="pull-left alert alert-success inline no-margin"
                     style="text-align: center;margin-bottom:20px;width:96%;">
                    <button data-dismiss="alert" class="close" type="button">
                        <i class="icon-remove"></i>
                    </button>

                    <i class="icon-umbrella bigger-120 blue"></i>
                    <?php echo Yii::app()->user->getFlash('messageError'); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="row-fluid">
            <?php
            $this->widget('bootstrap.widgets.TbListView', array(
                'dataProvider' => $data->search(),
                'itemView' => '_views',
//                        'viewData' => array('page' => $data),
                'itemsTagName' => 'ul',
                'template' => '{items}<div class="clearfix"></div><div class="span4 col-centered">{pager}</div>',
                'itemsCssClass' => 'ace-thumbnails',
            ));
            ?>
        </div>
        <!--PAGE CONTENT ENDS-->
    </div>
    <!--/.span-->
</div><!--/.row-fluid-->