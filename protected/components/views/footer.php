<footer class="container footer clearfix">
    <div class="col_2_3">
        <h3>Liên Hệ</h3>
        <div class="col">
            <h4><?php echo Yii::app()->params['company']?></h4>
            <p>Địa chỉ: <?php echo Yii::app()->params['address_company']?></p>
            <p>ĐT: <?php echo Yii::app()->params['phone_company']?></p>
            <p>FAX: <?php echo Yii::app()->params['fax_company']?></p>
        </div>
        <div class="col">
             <h4>Phòng kinh doanh</h4>
            <p>Để yêu cầu dịch vụ, vui lòng liên hệ<br> bộ phần kinh doanh.</p>
            <p>ĐT: <?php echo Yii::app()->params['phone']?></p>
            <p>FAX: <?php echo Yii::app()->params['fax']?></p>
        </div>
    </div>
            
    <div class="col_1_3 last">
        <h3>Phản hồi</h3>
        <?php $form= $this->beginWidget('CActiveForm', array(
                    'id' => 'menu-form',
                    'enableAjaxValidation' => false,
                    'enableClientValidation' => true,
                    'htmlOptions' => array(
                        'class' => 'form-horizontal')
                ));?>

            <?php echo $form->textField($model, 'name', array( "class" => "text", "placeholder"=>"Tên..."));?>
            
            <?php echo $form->emailField($model, 'email', array("class" => "email", "placeholder"=>"Email..."));?>
            
            <?php echo $form->textArea($model, 'content', array("rows" => "3", "class" => "text_area", "placeholder"=>"Nội dung..."));?>
            <input type="submit" value="Gửi" class="btnSubmit" />
            <?php echo $form->error($model, 'name')?>
            <?php echo $form->error($model, 'email')?>
            <?php echo $form->error($model, 'content')?>
            
        <?php $this->endWidget();?>
    </div>
</footer>
<section class="footer_bg clearfix">
    <div class="container">
        <div class="col_1_2 copyright">Bản quyền 2014 thuộc về Citenco</div>
        <div class="col_1_2 last designby">Thiết kế và phát triển bởi Golden Time Advertising</div>
    </div>
</section>
<!--end footer-->
<script type="text/javascript">
    <?php if(isset($flag) && $flag == true):?>
            alert("Thông tin của bạn đã được gửi tới chúng tôi. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất. Xin cảm ơn!")
        <?php endif;?>
</script>