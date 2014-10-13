<section class="home-content clearfix">
	<div class="container">
		<div class="content">	
		<?php
			if(count($page_content) >0):
				Yii::app()->clientScript->registerMetaTag($page_content['meta_keyword'], 'keywords');
				Yii::app()->clientScript->registerMetaTag($page_content['meta_description'], 'description');
				echo '<article class="content-left">';
				$this->pageTitle = $page_content['title'];
				echo '<h2>'. $page_content['title'].'</h2>';
				echo $page_content['description'];
				echo '</article>';	
				$this->Widget('SidebarWidget')?>
			<?php else:?>
				<article class="content-left"><p>Không tìm thấy yêu cầu hợp lệ</p></article>
			<?php endif;?>
		</div>
	</div>
</section>
