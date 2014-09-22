

<?php
$this->breadcrumbs=array(
	'Admin Management',
);
?>  

<div>
    <div class="pull-right">
        <div class="widget-toolbar">
            <a href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/create'); ?>" role="button" class="white" data-toggle="modal"  title="Add new category">
                <i class="icon-plus"></i>
            </a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="row-fluid">
        <div class="table-header">
            Admin Management
        </div>
        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Created Date</th>
                    <th>Status</th>
                    <!--Danh cho icon-->
                    <th></th>
                    <!--Danh cho icon-->
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($data) > 0):
                    foreach ($data as $item) :
                        ?>
                        <tr>
                            <td><?php echo $item->email ?> </td>
                            <td><?php echo $item->first_name .' '. $item->last_name  ?> </td>
                            <td><?php echo $item->created_date?></td>
                            <td>
                                <?php if($item->status == 0) : ?>
                                    <span class="label label-default arrowed">Inactive</span>
                                <?php else : ?>
                                    <span class="label label-success arrowed">Active</span>
                                <?php endif; ?>
                            </td>
                            <!--Danh cho icon-->
                            <td class="td-actions">
                                <div class="hidden-phone visible-desktop action-buttons">

                                    <a class="green" href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/view', array('id' => $item->id)); ?>">
                                        <i class="icon-zoom-in bigger-130"></i>
                                    </a>

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
                                                <a href="<?php echo Yii::app()->createAbsoluteUrl($parentUrl . '/delete', array('id' => $item->id)); ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                    <span class="red">
                                                        <i class="icon-trash bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <!--Danh cho icon-->
                        </tr>
                    <?php endforeach;
                endif; ?>
            </tbody>
        </table>
    </div>
</div><!--/.row-fluid-->