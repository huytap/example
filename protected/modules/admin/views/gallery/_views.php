
<?php if(isset($data)) : ?>
    <?php if ($data['thumb_nails'] == 1) : ?>
        <li>
            <a href="<?php echo Yii::app()->createUrl('admin/gallery/view_details', array('id' => $data['gallery']['id'])); ?>"
               data-rel="colorbox" class="ace-thumbnails" title="<?php echo $data['gallery']['name']; ?>">
                <img
                    src="<?php echo Yii::app()->baseUrl; ?>/timthumb.php?src=<?php echo Yii::app()->baseUrl; ?>/images/<?php echo $data['name']; ?>&h=150&w=150"/>

                <div class="text">
                    <div class="inner"><?php echo $data['gallery']['name']; ?></div>
                </div>
            </a>

            <div class="tools tools-bottom">
                <a href="<?php echo Yii::app()->createUrl('admin/gallery/view_details', array('id' => $data['gallery']['id'])); ?>"
                   title="View Album">
                    <i class="icon-eye-open"></i>
                </a>

                <a href="<?php echo Yii::app()->createUrl('admin/gallery/edit', array('id' => $data['gallery']['id'])); ?>"
                   title="Modify Album">
                    <i class="icon-pencil"></i>
                </a>

                <a href="<?php echo Yii::app()->createUrl('admin/gallery/delete', array('id' => $data['gallery']['id'])); ?>"
                   title="Delete Album">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
    <?php endif; ?>
<?php endif; ?>