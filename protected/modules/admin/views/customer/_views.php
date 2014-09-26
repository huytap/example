
<?php
if(isset($data)):
?>
<tr>
	<td><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/customer/view', array('id' => $data->id)); ?>"><?php echo $data->name ?></a></td>
	<td><?php echo $data['email']?></td>
	<td>
		<?php echo $data['content']?>
	</td>
	<td><?php echo date("d-m-Y", $data['created_date'])?></td>
	<td class="td-actions">
		<div class="hidden-phone visible-desktop action-buttons">
			<a class="green" href="<?php echo Yii::app()->createAbsoluteUrl('admin/customer/view', array('id' => $data->id)); ?>">	
				<i class="icon-zoom-in bigger-130"></i>
			</a>
			<a class="red" href="<?php echo Yii::app()->createAbsoluteUrl('admin/customer/delete', array('id' => $data->id)); ?>">
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
						<a href="<?php echo Yii::app()->createAbsoluteUrl('admin/customer/view', array('id' => $data->id)); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
							<span class="green"><i class="icon-zoom-in bigger-120"></i></span>
						</a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->createAbsoluteUrl('admin/customer/delete', array('id' => $data->id)); ?>" class="tooltip-info" data-rel="tooltip" title="Delete">
                            <span class="blue"><i class="icon-trash bigger-120"></i></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</td> 
</tr>
<?php endif;?>