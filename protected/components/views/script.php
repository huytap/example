<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/frontend/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/frontend/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/frontend/js/jquery.carouFredSel-6.2.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/frontend/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/frontend/js/main.js"></script>
<script type="text/javascript">
    
    if($('.right').length){
        if($('.content').find('.left').height() < $('.content').find('.right').height()){
            $('.content').find('.left').css('height', $('.content').find('.right').height());
        }
        $('.content').find('.right').css('height', ($('.content').height()-40) + 'px');
    }
    $('.main-menu li a').each(function() {
        var url = String(window.location)
        if ($(this).parent().hasClass('submenu')) {
            $($(this)).next().find('li a').each(function() {
                if ($($(this))[0].href == url) {
                    
                    $(this).parent().parent().prev().addClass('active');
                }
            })
            if ($($(this))[0].href == url) {
                $(this).addClass('active');
            }
        } else {
            if ($($(this))[0].href == url) {
                $(this).addClass('active');
            }
        }
    });
</script>