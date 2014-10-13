<section class="home-content clearfix">
	<div class="container">
		<div class="content">	
		<?php
			if(count($page_content) >0):
				echo '<article class="content-left">';
				echo '<h2>'. $page_content[0]['menu']['name'].'</h2>';
				$this->pageTitle = $page_content[0]['menu']['meta_title'];
				Yii::app()->clientScript->registerMetaTag($page_content[0]['menu']['meta_keywords'], 'keywords');
				Yii::app()->clientScript->registerMetaTag($page_content[0]['menu']['meta_description'], 'description');					
				foreach ($page_content as $key => $value):						
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
			$this->Widget('SidebarWidget');
			else:?>
				<article class="content-left"><p>Không tìm thấy yêu cầu hợp lệ</p></article>
			<?php endif;?>
		</div>
	</div>
</section>
