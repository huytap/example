<section class="home-content clearfix">
	<div class="container">
		<div class="content" id="content">
			<article class="content-left <?php if($_GET['cms'] !== 'su-kien') echo 'left';?>">
				<?php
				$gallery = '';
				if($cms && $cms['meta_title']):
					$this->pageTitle = $cms['meta_title'];
					Yii::app()->clientScript->registerMetaTag($cms['meta_keyword'], 'keywords');
					Yii::app()->clientScript->registerMetaTag($cms['meta_description'], 'description');?>
				<h2><?php echo $cms['title']?></h2>			
				<div>
					<?php 
					echo $cms['description'];	
					$item = Item::model()->with('gallery')->findAllByAttributes(array('gallery_id' => $cms['gallery_id']));
					if($item):
						foreach ($item as $key => $value):
							$gallery .= '<img src="'.Yii::app()->baseUrl.'/images/'. $value['name'].'" />';
							if($value['cover_image'] == 1):?>
								<p><strong>Hình ảnh thiết bị - công nghệ</strong></p>
								<p class="company-image">
									<a href="javascript:void(0)" id="album">
										<img src="<?php echo Yii::app()->baseUrl?>/timthumb.php?src=<?php echo Yii::app()->baseUrl?>/images/<?php echo $value['name']?>&w=619" />
									</a>
								</p>
							<?php
							endif;
						endforeach;
					endif;?>	
				</div>
				<?php endif;?>
			</article>
			<?php 
				$this->Widget('SidebarWidget');?>
		</div>
	</div>
</section>
<div id="box" style="display:none">
	<div class="gallery col-sm-9">
		<div class="modal-header">
	    	<button data-dismiss="modal" class="close" type="button" id="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	    	<h3 id="myModalLabel" class="modal-title">Hình ảnh thiết bị công nghệ</h3>
	    </div>
	    <div>
		    <div class="carousel-inner" id="gallery">
		   	<?php
		   		echo $gallery;
		    ?>
		    </div>
		    <div class="dev7-clearfix"></div>
		        <a class="left carousel-control carousel-control-carousel-2" href="javascript:void(0)" data-slide="prev"></a>
		        <a class="right carousel-control carousel-control-carousel-2" href="javascript:void(0)" data-slide="next"></a>	
		    </div>
	</div>
</div>