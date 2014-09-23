<?php
	$this->pageTitle =  Yii::app()->params['title'];
?>

<section class="container clearfix">
	<?php
	if($component):
		$i = 0;
		foreach ($component as $c):
			$i++;
		$last = '';
		if($i%3 == 0)
			$last = ' last';?>
			<article class="col_1_3<?php echo $last?>">
				<div class="thumbnail">
					<figure>
						<a href="#">
							<img src="<?php echo Yii::app()->baseUrl?>/images/<?php echo $c['cover_photo']?>" alt="<?php echo $c['title']?>">
		                    <div style="display: block;">
		                      	<strong><?php echo $c['title']?></strong>
		                    </div>
		                </a>
		            </figure>
				</div>
			</article>
	<?php endforeach;
		endif;?>
</section>
<!--end component-->
<div class="container padding10"></div>
<section class="home-content clearfix">
	<div class="container">
		<div class="content home">
			<article class="content-left border-right">
				<h2>TIN TỨC - SỰ KIỆN MỚI NHẤT</h2>		
				<?php
					foreach ($news as $key => $value){
						$url = '';
						if($value['menu']['parent_id'] !== null){
							$parent = MyFunctionCustom::getParentMenuById($value['menu']['parent_id']);
							$url = $parent['url'] .'/';
						}
						echo '<h3>' . $value['title'] . '</h3>';
						echo '<p>' . strip_tags($value['short_description']) .'</p>';
						echo '<p class="link">';
						echo '<a href="'. Yii::app()->baseUrl.'/'. $url. $value['menu']['url'] .'/'. $value['url'].'-' . $value['id'].'.html">';
						echo 'Đọc thêm</a></p>';
					}?>
					<h2>Pháp luật môi trường</h2>
					<h3>Hội thi Tuyên truyền - “Bác Hồ trong trái tim tôi”</h3>
					<p>Ngày 14/05/2014 tại hội trường công ty đã diễn ra Hội thi Tuyên truyền “Bác Hồ trong trái tim tôi”...
					</p>
					<p class="link"><a href="#">Đọc thêm</a></p>
			</article>
			<article class="content-right">
				<a href="javascript:void(0);" id="galleryView">
					<img src="<?php echo Yii::app()->theme->baseUrl?>/frontend/images/gallery.png">
					<h3>THƯ VIỆN ẢNH</h3>
				</a>
			</article>
		</div>
	</div>
</section>
<!--end content-->
		
<div id="box" style="display:none">
	    	<div class="gallery col-sm-9">
	    		<div class="modal-header">
	    			<button data-dismiss="modal" class="close" type="button" id="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	    			<h3 id="myModalLabel" class="modal-title">Thư viện hình ảnh</h3>
	    		</div>
	    		<div>
			        <div class="carousel-inner" id="gallery">
			        	<?php
			        	foreach ($library as $lb) {
			        		echo '<img src="'. Yii::app()->baseUrl .'/images/'. $lb['name'] .'" />';
			        	}
			        	?>
		            </div>
		            <div class="dev7-clearfix"></div>
		            <a class="left carousel-control carousel-control-carousel-2" href="javascript:void(0)" data-slide="prev"></a>
		            <a class="right carousel-control carousel-control-carousel-2" href="javascript:void(0)" data-slide="next"></a>	
		        </div>
			</div>
</div>