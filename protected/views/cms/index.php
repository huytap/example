<section class="home-content clearfix">
	<div class="container">
		<div class="content">	
		<?php
			if(count($cms) >0):?>		
				<?php
				if(count($cms) == 1):
					Yii::app()->clientScript->registerMetaTag($cms[0]['meta_keyword'], 'keywords');
					Yii::app()->clientScript->registerMetaTag($cms[0]['meta_description'], 'description');
					echo '<article class="content-left">';
					$this->pageTitle = $cms[0]['title'];
					echo '<h2>'. $cms[0]['title'].'</h2>';
					echo $cms[0]['description'];
					echo '</article>';
				else:
					echo '<article class="content-left">';
					echo '<h2>'. $cms[0]['menu']['name'].'</h2>';
					$this->pageTitle = $cms[0]['menu']['meta_title'];
					Yii::app()->clientScript->registerMetaTag($cms[0]['menu']['meta_keywords'], 'keywords');
					Yii::app()->clientScript->registerMetaTag($cms[0]['menu']['meta_description'], 'description');					

					foreach ($cms as $key => $value):						
						$url = '';
						if($value['menu']['parent_id'] !== null){
							$parent = MyFunctionCustom::getParentMenuById($value['menu']['parent_id']);
							$url = $parent['url'] .'/';
						}?>						
						<div class="row service">
							<div class="news_images">
								<a href="<?php echo Yii::app()->baseUrl.'/'. $url. $value['menu']['url'] .'/'. $value['url'].'-' . $value['id']?>.html">
									<img src="<?php echo Yii::app()->baseUrl?>/images/<?php echo $value['cover_photo']?>">
								</a>
							</div>
							<div class="news">
								<h3><?php echo $value['title'] ?></h3>
								<?php echo $value['short_description']?>
								<p class="link"><a href="<?php echo Yii::app()->baseUrl.'/'. $url. $value['menu']['url'] .'/'. $value['url'].'-' . $value['id']?>.html">Đọc thêm</a></p>
							</div>
						</div>
				<?php					
					endforeach;
					echo '</article>';
				endif;?>
			</article>
			<?php
			$this->Widget('SidebarWidget')?>
			<?php else:?>
				<article class="content-left"><p>Không tìm thấy yêu cầu hợp lệ</p></article>
			<?php endif;?>
		</div>
	</div>
</section>
