<?php
$this->breadcrumbs = array(
    'Quản lý nội dung',
);
?>
<div class="page-header position-relative">
<?php $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
        'id' => 'search-form',
    ));
    ?>
    
Chọn trang: <?php 
if(isset($_GET['Cms']['menu_id'])) {
    echo CHtml::dropDownlist("Cms[menu_id]",'', MyFunctionCustom::cms(),array('empty'=>'Tất cả','options' => array($_GET['Cms']['menu_id'] => array('selected' => true))));    
}else{
    echo CHtml::dropDownlist("Cms[menu_id]",'', MyFunctionCustom::cms(),array('empty'=>'Tất cả')); 
}?>
    
<?php $this->endWidget(); ?>
</div>

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
        Quản lý nội dung
    </div>
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="100"> Hình đại diện</th>
                <th width="200"> Tiêu đề </th>
                <th class="hidden-phone"> Mô tả ngắn </th>
                <th width="100"> Trang</th>
                <th width="30" class="hidden-phone"> Hiển thị trên trang chủ</th>
                <th width="30" class="hidden-phone"> File</th>
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
<script type="text/javascript">
    if($('#Cms_menu_id').length){
        $('#Cms_menu_id').change(function(){
            $("#search-form").submit();
        })
    }
</script>