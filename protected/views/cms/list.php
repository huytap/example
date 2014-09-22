<section class="container clearfix">
	<?php
	if(count($menu) >0):
		$this->pageTitle = $menu[0]['parent']['name'];
		foreach ($menu as $key => $value):?>
		<article class="col_1_2<?php if($key%2!==0) echo ' last';?>">
			<div class="thumbnail">
				<figure>
					<a href="<?php echo Yii::app()->baseUrl .'/'. $value['parent']['url'] .'/' . $value['url']?>.html">
						<img src="<?php echo Yii::app()->baseUrl?>/images/<?php echo $value['cover_photo']?>" alt="">
					    <div style="display: block;">
					        <strong><?php echo $value['name']?></strong>
					    </div>
				    </a>
				</figure>
			</div>
		</article>
		<?php
		endforeach;
	endif;?>
</section>