<header class="header_bg clearfix">
    <div class="container clearfix">
        <ul class="social-links">
            <li><a href="<?php echo Yii::app()->params['facebook']?>"><img src="<?php echo Yii::app()->theme->baseUrl?>/frontend/images/facebook.png" alt="Facebook"></a></li>
            <li><a href="<?php echo Yii::app()->params['youtube']?>"><img src="<?php echo Yii::app()->theme->baseUrl?>/frontend/images/youtube.png" alt="Twitter"></a></li>
        </ul>
    </div>
</header>
<div class="clear"></div>
<section class="header_top clearfix">	
	<div class="container">
		<div class="logo">
			<a href="/"><img src="<?php echo Yii::app()->theme->baseUrl?>/frontend/images/logo.png" alt="Citenco" /></a>
		</div>
		<!--end logo-->
		<nav class="main-menu">
			<ul>
				<li><a href="/">Trang Chủ</a></li>
				<?php
                    if($menu){
                        foreach ($menu as $value) {
                            $subs = MyFunctionCustom::getSubMenuByParent($value['id']);
                            if(count($subs)> 0){
                            	echo '<li class="submenu">';
                                if($value['show_link_parent'])
                                    echo '<a href="' . Yii::app()->baseUrl.'/'.$value['url'] . '.html">' . $value['name'] . '</a>';    
                                else
                                    echo '<a href="#">' . $value['name'] .'</a>';
                                echo '<ul>';
                                foreach ($subs as $sub) {
                                    $sub_sub = MyFunctionCustom::getSubMenuByParent($sub['id']);
                                    if(count($sub_sub) > 0){
                                        echo '<li class="submenu">';
                                        if($sub['show_link_parent'])
                                            echo '<a href="'. Yii::app()->baseUrl.'/'.$sub['parent']['url'] .'/'. $sub['url'].'.html">'.$sub['name'].'</a>';
                                        else
                                            echo '<a href="#">'.$sub['name'].'</a>';
                                        echo '<ul class="subsub">';
                                        foreach ($sub_sub as $ss) {
                                            echo '<li><a href="'. Yii::app()->baseUrl.'/'.$sub['parent']['url'] .'/'. $sub['url']. '/'. $ss['url'] .'.html">' . $ss['name'] .'</a></li>';
                                        }
                                        echo '</ul></li>';
                                    }else{
                                        echo '<li><a href="'. Yii::app()->baseUrl.'/'.$sub['parent']['url'] .'/'. $sub['url'].'.html">'.$sub['name'].'</a></li>';
                                    }
                                }
                                echo '</ul>';
                                echo '</li>';
                            }else{
	                           echo '<li><a href="' . Yii::app()->baseUrl.'/'.$value['url'] . '.html">' . $value['name'] . '</a></li>';        
                            }
                        }
                                
                   }
                   ?>				
			</ul>
		</nav>
	</div>
</section>
