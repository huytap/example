
<?php
$this->breadcrumbs=array(
    'Quản lý hình ảnh'=>array('index'),
    'Chi tiết'
);
?>


<div class="page-header position-relative">
    <h1>
        Chi tiết album
    </h1>

</div><!--/.page-header-->
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <a href="<?php echo Yii::app()->createUrl('admin/gallery/edit',array('id' => $gallery)); ?>" class="btn btn-warning" title="Edit Album Infomation">
                <i class='icon-pencil'></i>
                Cập nhật thông tin album
            </a>
            <a href="<?php echo Yii::app()->createUrl('admin/gallery/upload',array('id' => $gallery)); ?>" class="btn btn-success" title="Upload More Image">
                <i class='icon-cloud-upload'></i>
                Upload thêm hình
            </a>
        </div>
        <hr>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <a title="Edit Album Infomation" class="btn btn-warning" href="/admin/gallery/update_description/id/<?php echo $_GET['id']?>">
                <i class="icon-pencil"></i>
                Cập nhật thông tin hình ảnh
            </a>
        </div>
        <hr>
    </div>
</div>
<div class="row-fluid">
    <div class="table-header">
        Hình ảnh trong album

    </div>
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th class="center">
                <label>
                    <input type="checkbox" />
                    <span class="lbl"></span>
                </label>
            </th>
            <th>Hình</th>
            <th>Album</th>
            <th class="hidden-480">Mô tả</th>

            <th class="hidden-phone">
                <i class="icon-time bigger-110 hidden-phone"></i>
                Ngày tạo
            </th>
            <th class="hidden-480">Hình đại diện</th>
            <th class="hidden-480">Mô tả</th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($items as $value) : ?>
            <tr>
                <td class="center">
                    <label>
                        <input type="checkbox" />
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <a href="" data-rel="colorbox" class="ace-thumbnails" title="">
                        <img src="<?php echo Yii::app()->baseUrl; ?>/timthumb.php?src=<?php echo Yii::app()->baseUrl; ?>/images/<?php echo $value['name'] ?>&h=100&w=100" />
                    </a>
                </td>
                <td><?php echo $value['gallery']['name']; ?></td>

                <td class="hidden-480"><?php echo $value['description']; ?></td>
                <td class="hidden-phone"><?php echo date_format(new DateTime($value['gallery']['created_date']),'F jS Y'); ?></td>

                <td class="hidden-480">
                    <?php if($value['cover_image'] == 1) : ?>
                        <span class="label label-success">Yes</span>
                    <?php else : ?>
                        <span class="label label-default">No</span>
                    <?php endif; ?>
                </td>
                <td class="hidden-480">
                    <?php if($value['active_status'] == 1) : ?>
                        <a class="label label-success" onclick="deactive_status(<?php echo $value['id']; ?>)" title="Deactive Status" >
                            Yes
                        </a>

                    <?php else : ?>
                        <a class="label label-default" onclick="active_status(<?php echo $value['id']; ?>)" title="Active Status" >
                            No
                        </a>
                    <?php endif; ?>
                </td>
                <td class="td-actions">
                    <div class="hidden-phone visible-desktop action-buttons">
                        <a class="green" onclick="set_cover(<?php echo $value['id'] ?>)" title="Set cover image">
                            <i class="icon-fa-star fa fa-star fa-lg"></i>
                        </a>
                        <a class="red" onclick="delete_image(<?php echo $value['id'] ?>)" title="Delete Image">
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
                                    <a class="green" onclick="set_cover(<?php echo $value['id'] ?>)" title="Set cover image">
                                        <span class="green">
                                            <i class="icon-fa-star fa fa-star fa-lg"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function delete_image(id){
        var checkstr =  confirm('are you sure you want to delete this?');
        if(checkstr == true){
            $.ajax({
                url: '<?php echo Yii::app()->createUrl("admin/gallery/delete_item/") ?>',
                type: 'POST',
                dataType: 'json',
                data: {id:id},
                success: function(){
                    alert('Success');
                    window.location.reload();
                },
                error: function(){
                    alert('System busy. Please try again later!!!');
                }
            });
        }else{
            return false;
        }

    }
    function set_cover(id){
        $.ajax({
            url: '<?php echo Yii::app()->createUrl("admin/gallery/setcover/") ?>',
            type: 'POST',
            dataType: 'json',
            data: {id:id},
            success: function(){
                alert('Success');
                window.location.reload();
            },
            error: function(){
                alert('System busy. Please try again later!!!');
            }
        });
    }
    function active_status(id){
        $.ajax({
            url: '<?php echo Yii::app()->createUrl("admin/gallery/active/") ?>',
            type: 'POST',
            dataType: 'json',
            data: {id:id},
            success: function(){
                alert('Success');
                window.location.reload();
            },
            error: function(){
                alert('System busy. Please try again later!!!');
            }
        });
    }
    function deactive_status(id){
        $.ajax({
            url: '<?php echo Yii::app()->createUrl("admin/gallery/deactive/") ?>',
            type: 'POST',
            dataType: 'json',
            data: {id:id},
            success: function(){
                alert('Success');
                window.location.reload();
            },
            error: function(){
                alert('System busy. Please try again later!!!');
            }
        });
    }
</script>