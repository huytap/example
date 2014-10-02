<?php
if($menu){
	$this->pageTitle =  $menu['meta_title'];
	Yii::app()->clientScript->registerMetaTag($menu['meta_keywords'], 'keywords');
	Yii::app()->clientScript->registerMetaTag($menu['meta_keywords'], 'description');
}else{
	$this->pageTitle =  Yii::app()->params['title'];
	Yii::app()->clientScript->registerMetaTag(Yii::app()->params['meta_keywords'], 'keywords');
	Yii::app()->clientScript->registerMetaTag(Yii::app()->params['meta_keywords'], 'description');
}?>
<section class="home-content clearfix">
	<div class="container">
		<div class="content">
			<article class="content-left">
				<h2>Liên hệ</h2>				
				<div>
					<p>Cty TNHH MTV Môi Trường Đô Thị TP HCM xin chân thành cám ơn sự quan tâm, ủng hộ của quý khách đến các hoạt động của chúng tôi.</p>
					<?php
					foreach ($model as $key => $value):?>						
						<p>
							<strong><?php echo $value['title']?></strong><br>
							<?php echo $value['address']?><br>
							Điện thoại: <?php echo $value['tel']?><br>
							Fax: <?php echo $value['fax']?>
						</p>
					<?php endforeach;?>
				</div>
			</article>
			<article class="content-right">
			<?php
			foreach($ads as $ad):?>
				<div class="thumbnail">
					<figure>
						<a href="<?php echo $ad['link_url']?>">
							<img src="<?php echo Yii::app()->baseUrl?>/images/<?php echo $ad['photo']?>">
						</a>
			        </figure>
				</div>
			<?php
				endforeach;?>
			</article>
		</div>
	</div>
</section>
<!--end content-->