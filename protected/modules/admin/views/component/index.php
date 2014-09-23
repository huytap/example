<?php
$this->breadcrumbs = array(
    'Quản lý trang con',
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
        Quản lý trang con
    </div>
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="30"> Thứ tự</th>
                <th width="100"> Hình</th>
                <th width="200"> Tiêu đề </th>
                <th width="100" class="hidden-480"> Link url </th>
                <th width="20"> Trạng thái </th>
                <th width="42"></th>
            </tr>
        </thead>

        <tbody>
            
        <?php
        if(isset($data)):
            foreach ($data as $key => $value):
        ?>
        <tr>
            <td><?php echo $value['priority'];?></td>
            <td><img src="<?php if(!$value['cover_photo']) echo Yii::app()->theme->baseUrl .'/backend/img/no-image.png'; else echo Yii::app()->baseUrl.'/timthumb.php?src=' . Yii::app()->baseUrl .'/images/'. $value['cover_photo'] .'&h=100&w=100';?>"></td>
            <td><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/component/update', array('id' => $value->id)); ?>"><?php echo $value->title ?></a></td>
            <td class="hidden-480">
                <?php echo $value['link_url'];?>
            </td>
            <td>
                <?php 
                if($value->disabled):
                    echo '<span class="label label-success arrowed">'.MyFunctionCustom::$status[$value->disabled].'</span>';
                else:
                    echo '<span class="label label-default arrowed">'.MyFunctionCustom::$status[$value->disabled].'</span>';
                endif;?>
            </td>
           
            <td class="td-actions">
                <div class="hidden-phone visible-desktop action-buttons">
                    <a class="green" href="<?php echo Yii::app()->createAbsoluteUrl('admin/component/update', array('id' => $value->id)); ?>"> 
                        <i class="icon-pencil bigger-130"></i>
                    </a>
                    <a class="red" href="<?php echo Yii::app()->createAbsoluteUrl('admin/component/delete', array('id' => $value->id)); ?>">
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
                                <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/component/update', array('id' => $value->id)); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                    <span class="green"><i class="icon-edit bigger-120"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/component/delete', array('id' => $value->id)); ?>" class="tooltip-info" data-rel="tooltip" title="Delete">
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