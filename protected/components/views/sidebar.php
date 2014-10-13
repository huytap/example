<?php

	if(isset($_GET['parent_url'], $_GET['sub_url'], $_GET['slug']) && 
		$_GET['parent_url'] == 'san-pham-dich-vu'):?>
		<article class="content-right right">						
			<div class="contact">
				<div class="sub">
					<h3>Liên hệ</h3>
						<p class="first">Phòng kinh doanh</p>
						<p>Điện thoại: <?php echo Yii::app()->params['phone']?></p>
						<p>Fax: <?php echo Yii::app()->params['fax']?></p>
						<p>Email: <?php echo Yii::app()->params['email']?></p>
					</div>
				</div>
			<div class="services">
				<h3>Qui trình dịch vụ</h3>
					<p>
						Xem quy trình dịch vụ của chúng tôi 
						<a href="<?php echo Yii::app()->baseUrl.'/data/'.Yii::app()->params['service_file']?>">tại đây</a>
					</p>
				</div>
			</article>
	<?php
	elseif(isset($branch) && count($branch) >0):?>
		<article class="content-right right">
			<div class="google-map">
	        	<?php echo $branch['map'];?>
	    	</div>
	        <div class="contact">
        		<h3><?php echo $branch['title']?></h3>
        		<?php echo $branch['address']?><br>
        		Điện thoại: <?php echo $branch['tel']?><br>
        		Fax: <?php echo $branch['fax']?>
    		</div>
		</article>
	<?php
	else:?>
		<article class="content-right">
		<?php
		foreach($ads as $ad):
			$page = explode(',', $ad['page']);
			foreach ($page as $key => $value):
				if($value == $menu['id']):?>
					<div class="thumbnail">
						<figure>
							<a href="<?php echo $ad['link_url']?>">
								<img src="<?php echo Yii::app()->baseUrl?>/images/<?php echo $ad['photo']?>">
							</a>
		                   </figure>
					</div>
				<?php
				endif;
			endforeach;
		endforeach;?>
		</article>
	<?php
	endif;
?>