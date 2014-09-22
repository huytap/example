
<?php
if(isset($data)):
?>
<tr>
	<td><img src="<?php if(!$data['cover_photo']) echo Yii::app()->theme->baseUrl .'/backend/img/no-image.png'; else echo Yii::app()->baseUrl.'/timthumb.php?src=' . Yii::app()->baseUrl .'/images/'. $data['cover_photo'] .'&h=100&w=100';?>"></td>
	<td><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/cms/view', array('id' => $data->id)); ?>"><?php echo $data->title ?></a></td>
	<td class="hidden-phone"><?php echo strip_tags($data['short_description'])?></td>
	<td>
		<?php 
			if($data['menu']['parent_id'] !== null){
				$parent = MyFunctionCustom::getParentMenuById($data['menu']['parent_id']);
				echo $parent['name'] .'/ ';
			}
			echo $data['menu']['name']?>
	</td>
	<td class="hidden-phone">
		<?php 
			if($data->index):
				echo '<span class="label label-success arrowed">Yes</span>';
			else:
				echo '<span class="label label-default arrowed">No</span>';
			endif;
		?>
    </td>
    <td class="hidden-phone"><?php echo $data['file']?></td>
	<td><?php echo date("d-m-Y", $data['created_date'])?></td>
	<td class="td-actions">
		<div class="hidden-phone visible-desktop action-buttons">
			<a class="green" href="<?php echo Yii::app()->createAbsoluteUrl('admin/cms/update', array('id' => $data->id)); ?>">	
				<i class="icon-pencil bigger-130"></i>
			</a>
			<a class="red" href="<?php echo Yii::app()->createAbsoluteUrl('admin/cms/delete', array('id' => $data->id)); ?>">
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
						<a href="<?php echo Yii::app()->createAbsoluteUrl('admin/cms/update', array('id' => $data->id)); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
							<span class="green"><i class="icon-edit bigger-120"></i></span>
						</a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->createAbsoluteUrl('admin/cms/delete', array('id' => $data->id)); ?>" class="tooltip-info" data-rel="tooltip" title="Delete">
                            <span class="blue"><i class="icon-trash bigger-120"></i></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</td> 
</tr>
<?php endif;?>