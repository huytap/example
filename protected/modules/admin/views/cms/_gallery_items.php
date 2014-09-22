<ul class="ace-thumbnails">
    <?php if(isset($data)) { ?>
        <?php if ($data['thumb_nails'] == 1) : ?>
            <li>
                <a href="#" data-rel="colorbox" class="ace-thumbnails" title="<?php echo $data['gallery']['name']; ?>">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/timthumb.php?src=<?php echo Yii::app()->baseUrl; ?>/images/<?php echo $data['name']; ?>&h=150&w=150" />
                    <div class="text">
                        <div class="inner"><?php echo $data['gallery']['name']; ?></div>
                    </div>
                </a>

                <div class="tools tools-bottom" id-gallery="<?php echo $data['gallery']['id']; ?>">
                    <a href="#" title="View Album">
                        <i class="icon-check-empty"></i>
                        <i style="display:none;" class="icon-check"></i>
                    </a>
                </div>
            </li>
        <?php endif; ?>
    <?php } ?>
</ul>
