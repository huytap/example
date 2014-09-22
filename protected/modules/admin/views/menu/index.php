<?php
$this->breadcrumbs = array(
    'Quản lý menu',
);
?>
<div>
    <div class="pull-right">
        <div class="btn-group span2">
        </div>

        <div class="widget-toolbar">
            <a href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/create'); ?>" role="button" class="white" data-toggle="modal"  title="Add new language">
                <i class="icon-plus"></i>
            </a>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="table-header">
        Quản lý menu
    </div>
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="40">Thự tự</th>
                <th width="100">Hình đại diện</th>
                <th width="60"> Tên Menu </th>
                <th width="60" class="hidden-phone"> Menu Cha </th>
                <th width="40" class="hidden-phone">Trang tĩnh</th>
                <th width="40">Trạng thái</th>
                <th width="40"></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (count($data) > 0):
                foreach ($data as $k => $item) :
                    ?> 
                    <tr>
                        <td class="center">
                            <label>
                                <?php echo $item['priority']; ?>
                            </label>
                        </td>
                        <td><img src="<?php if(!$item['cover_photo']) echo Yii::app()->theme->baseUrl .'/backend/img/no-image.png'; else echo Yii::app()->baseUrl.'/timthumb.php?src=' . Yii::app()->baseUrl .'/images/'. $item['cover_photo'] .'&h=100&w=100';?>"></td>
                        <td>
                            <a href="#"><?php echo $item->name ?></a>
                        </td>
                        <td class="hidden-phone"><?php echo $item['parent']['name']?></td>

                        <td class="hidden-phone">
                            <?php 
                            if($item->static_page):
                                echo '<span class="label label-success arrowed">Yes</span>';
                            else:
                                echo '<span class="label label-default arrowed">No</span>';
                            endif;?>
                        </td>

                        <td>
                            <?php 
                            if($item->disabled):
                                echo '<span class="label label-success arrowed">'.MyFunctionCustom::$status[$item->disabled].'</span>';
                            else:
                                echo '<span class="label label-default arrowed">'.MyFunctionCustom::$status[$item->disabled].'</span>';
                            endif;?>
                        </td>
                        <td class="td-actions">
                            <div class="hidden-phone visible-desktop action-buttons">
                                <a class="green" href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/update', array('id' => $item->id)); ?>">
                                    <i class="icon-pencil bigger-130"></i>
                                </a>
                                <a class="red" href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/delete', array('id' => $item->id)); ?>">
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
                                            <a href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/update', array('id' => $item->id)); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="icon-edit bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/delete', array('id' => $item->id)); ?>" class="tooltip-info" data-rel="tooltip" title="Delete">
                                                <span class="blue">
                                                    <i class="icon-trash bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>                 


                    </tr>
                <?php endforeach;
            endif;
            ?> 
        </tbody>
    </table>
</div>
<script type="text/javascript">
    if($('#language').length){
        $('#language').change(function(){
            $("#menu-form").submit();
        })
    }
</script>