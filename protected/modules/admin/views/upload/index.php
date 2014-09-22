<?php
$this->breadcrumbs = array(
    'Quản lý File',
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
        Quản lý File
    </div>
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="200"> Tiêu đề </th>
                <th width="100"> Link url </th>
                <th width="130" class="hidden-phone"> Loại file</th>
                <th width="30" class="hidden-480"> Ngày upload</th>
                <th width="42"></th>
            </tr>
        </thead>

        <tbody>
            
        <?php
        if(isset($data)):
            foreach ($data as $key => $value):
        ?>
        <tr>
            <td><?php echo $value->title ?></td>
            <td><?php echo $value['url'];?></td>            
            <td class="hidden-phone"><?php echo $value['file_ext'];?></td>            
            <td class="hidden-480"><?php echo date("d-m-Y", $value['created_date'])?></td>
            <td class="td-actions">
                <div class="hidden-phone visible-desktop action-buttons">
                    <a class="red" href="<?php echo Yii::app()->createAbsoluteUrl('admin/upload/delete', array('id' => $value->id)); ?>">
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
                                <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/upload/delete', array('id' => $value->id)); ?>" class="tooltip-info" data-rel="tooltip" title="Delete">
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