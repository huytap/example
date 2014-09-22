
<?php
$this->breadcrumbs=array(
    'Gallery Management'=>array('index'),
    'View details'
);
?>


<div class="page-header position-relative">
    <h1>
        Gallery details
    </h1>

</div><!--/.page-header-->
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'items-form',
    //'enableAjaxValidation' => false,
    'enableClientValidation' => true,
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        //'enctype' => 'multipart/form-data',
    ),
        ));
?>
<div class="row-fluid">
    <div class="span12">
        <div class="span2">
            <input type="submit" value="Save" class="btn btn-large btn-primary" name="_btn">    
        </div>
    </div>
</div>
<hr>
<div class="row-fluid">
    <div class="table-header">
        All Images In Album     

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
            <th>Priority</th>
            <th>Image</th>
            <th>Album</th>
            <th class="hidden-480">Description</th>

            <th class="hidden-phone">
                <i class="icon-time bigger-110 hidden-phone"></i>
                Created date
            </th>
            <th class="hidden-480">Cover Image</th>
            <th class="hidden-480">Status</th>
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
                    <input type="text" name="Items[<?php echo $value['id']?>][priority]" class="span5" value="<?php echo $value['priority']?>"></td>
                <td>
                    <a href="" data-rel="colorbox" class="ace-thumbnails" title="">
                        <img src="<?php echo Yii::app()->baseUrl; ?>/timthumb.php?src=<?php echo Yii::app()->baseUrl; ?>/images/<?php echo $value['name'] ?>&h=100&w=100" />
                    </a>
                </td>
                <td><?php echo $value['gallery']['name']; ?></td>

                <td class="hidden-480">
                    <input type="text" name="Items[<?php echo $value['id']?>][description]" class="span12" value="<?php echo $value['description']?>">
                </td>
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
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $this->endWidget()?>
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