<?php
    $this->pageTitle = $data['menu']['meta_title'];
    Yii::app()->clientScript->registerMetaTag($data['menu']['meta_keywords'], 'keywords');
    Yii::app()->clientScript->registerMetaTag($data['menu']['meta_description'], 'description');                 
?>
<div class="news_images">
	<a href="<?php echo Yii::app()->baseUrl .'/su-kien/'. $data['menu']['url'] .'/'. $data['url']?>-<?php echo $data['id']?>.html">
		<img src="<?php echo Yii::app()->baseUrl .'/images/'. $data['cover_photo']?>">
	</a>
</div>
<div class="news">
	<h3><?php echo $data['title']?></h3>
	<?php echo $data['short_description'];?>
	<p class="link"><a href="<?php echo Yii::app()->baseUrl .'/su-kien/'. $data['menu']['url'] .'/'. $data['url']?>-<?php echo $data['id']?>.html">Đọc thêm</a></p>
</div>