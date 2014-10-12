<section class="home-content clearfix">
	<div class="container">
        <div class="content">
        <?php
        if(count($news) > 1):?>		
			<article class="content-left">
				<h2>TIN TỨC MỚI NHẤT</h2>	
				<?php                
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider' => $news,
                        'itemView' => '_view',
                        'template' => "{items}\n{pager}",
                        'pagerCssClass' => 'paging',
                        'pager' => array(
                            'header' => '',
                            'prevPageLabel' => '&lt&lt',
                            'nextPageLabel' => '&gt&gt',
                        ), 
                    ));
                ?>
			</article>
			<?php $this->Widget('SidebarWidget');?>
        <?php
        else:
            echo "<article class='content-left'>Không tìm thấy yêu cầu hợp lệ</article>";
        endif;?>
        </div>
	</div>
</section>
<!--end content-->