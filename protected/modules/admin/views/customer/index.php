<?php
$this->breadcrumbs = array(
    'Quản lý khách hàng',
);
?>

<div>
    <div class="pull-right">
        <div class="btn-group span2">
        </div>

        <div class="widget-toolbar">
            <a href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/create'); ?>" role="button" class="white" data-toggle="modal"  title="Add new page">
                <i class="icon-plus"></i>
            </a>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="table-header">
        Quản lý khách hàng
    </div>
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="100"> Tên</th>
                <th width="200"> Email </th>
                <th> Nội dung </th>
                <th width="100" class="hidden-phone"> Ngày tạo</th>
                <th width="42"></th>
            </tr>
        </thead>

        <tbody>
            <?php
            $this->widget('bootstrap.widgets.TbListView', array(
                'dataProvider' => $data->search(),
                'itemView' => '_views',
                'itemsTagName' => 'ul',
                'template' => '{items}<div class="clearfix"></div><div class="span4 col-centered">{pager}</div>',
                'itemsCssClass' => 'ace-thumbnails',
            ));
            ?>
        </tbody>
    </table>
</div>