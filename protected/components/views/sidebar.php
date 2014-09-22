<?php
	if(count($branch) >0){
		echo '<article class="content-right right">';
		echo '<div class="google-map">';
        echo $branch['map'];
    	echo '</div>';
        echo '<div class="contact">';
        echo '<h3>'.$branch['title'].'</h3>';
        echo $branch['address'].'<br>';
        echo 'Điện thoại: '.$branch['tel']. '<br>';
        echo 'Fax: '. $branch['fax'];
    	echo '</div>';
		echo '</article>';
	}else{
		echo '<article class="content-right">';
		foreach($ads as $ad){
			$page = explode(',', $ad['page']);
			foreach ($page as $key => $value) {
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
			}
		}
		echo '</article>';
	}
?>