<section class="slide clearfix">
	<div class="container">
		<div class="flexslider">
			<ul class="slides">
				<?php
				foreach ($slide as $key => $value):?>
		        <li>
		            <img src="<?php echo Yii::app()->baseUrl?>/images/<?php echo $value['name']?>" alt="<?php echo $value['description']?>">
		        </li>
		        <?php
		        endforeach;
		        ?>
	        </ul>
	 	</div>
	</div>
</section>