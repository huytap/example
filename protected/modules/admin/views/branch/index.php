<?php
$this->breadcrumbs = array(
    'Quản lý Quảng cáo',
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
        Quản lý Quảng cáo
    </div>
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="100"> Tên chi nhánh</th>
                <th width="200"> Địa chỉ</th>
                <th class="hidden-phone" width="200"> Số điện thoại</th>
                <th width="100" class="hidden-phone"> Fax </th>
                <th width="130"> Bản đồ</th>
                <th width="30" class="hidden-480"> Liên kết Menu</th>
                <th width="42"></th>
            </tr>
        </thead>

        <tbody>
            
        <?php
        if(isset($data)):
            foreach ($data as $key => $value):
        ?>
        <tr>
            <td><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/branch/update', array('id' => $value->id)); ?>"><?php echo $value->title ?></a></td>
            <td><?php echo $value['address']?></td>
            <td class="hidden-phone"><?php echo $value['tel'];?></td>
            <td class="hidden-phone"><?php echo $value['fax'];?></td>
            <td><?php echo $value['map']?></td>
            <td class="hidden-480"><?php echo $value['menu']['name']?></td>
           
            <td class="td-actions">
                <div class="hidden-phone visible-desktop action-buttons">
                    <a class="green" href="<?php echo Yii::app()->createAbsoluteUrl('admin/branch/update', array('id' => $value->id)); ?>"> 
                        <i class="icon-pencil bigger-130"></i>
                    </a>
                    <a class="red" href="<?php echo Yii::app()->createAbsoluteUrl('admin/branch/delete', array('id' => $value->id)); ?>">
                        <i class="icon-trash bigger-130"></i>
                    </a>
                </div>
                <div class="hidden-desktop visible-phone">
                    <div class="inline position-relative">
                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-caret-down icon-only bigger-120"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                            <li>
                                <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/branch/update', array('id' => $value->id)); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                    <span class="green"><i class="icon-edit bigger-120"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/branch/delete', array('id' => $value->id)); ?>" class="tooltip-info" data-rel="tooltip" title="Delete">
                                    <span class="blue"><i class="icon-trash bigger-120"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </td> 
        </tr>
        <?php 
        endforeach;
        endif;?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    if($('#branch_menu_id').length){
        $('#branch_menu_id').change(function(){
            $("#search-form").submit();
        })
    }
</script>