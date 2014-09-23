<section class="home-content clearfix">
			<div class="container">
				<div class="content">
					<article class="content-left">
						<h2>Liên hệ</h2>				
						<div>							
							<p>Cty TNHH MTV Môi Trường Đô Thị TP HCM xin chân thành cám ơn sự quan tâm, ủng hộ của quý khách đến các hoạt động của chúng tôi.</p>
							<p>
								<strong>Văn phòng Xí nghiệp Vận chuyển số 1</strong><br>
								12 Quang Trung - Phường 11 - Quận Gò Vấp<br>
								Điện thoại: (08) 39966834 – 39968927 – 38958675<br>
								Fax: (08) 39968926
							</p>
							<p>
								<strong>Văn phòng Xí nghiệp Vận chuyển số 2</strong><br>
								Số 01 Tống Văn Trân - Phường 5 - Quận 11<br>
								Điện thoại: (08) 38653614 - 38619857 - 38618818<br>
								Fax: (08) 38618818
							</p>
							<p>
								<strong>Văn phòng Xí nghiệp Vận chuyển số 3</strong><br>
								150 Lê Đại Hành - Phường 7 - Quận 11<br>
								 Điện thoại: (08) 38557783 - 38555664 <br>
								 Fax : (08) 38557783
							</p>
							<p>
								<strong>Văn phòng Xí nghiệp Dịch vụ Môi trường</strong><br>
								Địa chỉ: 18 Kinh Dương Vương, Phường 13, Quận 06<br>
								Điện thoại: (08) 38756115<br>
								Fax : (08) 38754892
							</p>
							<p>
								<strong>Xí nghiệp Xử lý chất thải</strong><br>
									Địa chỉ: 377 Lê Văn Khương, Phường Hiệp Thành, Quận 12<br>
									Điện thoại: (08) 37176016<br>
									Fax : (08) 37175812
							</p>
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