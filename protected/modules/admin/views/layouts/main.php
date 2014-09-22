<?php

//Process locking
        
    // $user_id = Yii::app()->user->id;
    // $criteria = new CDbCriteria();
    // $criteria->compare('t.user_lock', $user_id);
    // $event = Event::model()->find($criteria);
    
    // $curr_link = Yii::app()->request->requestUri;
    // if(isset($event) &&  $this->current_url != $curr_link){
    //     $event->lock_session = 0;
    //     $event->user_lock = 0;
    //     $event->update(array('lock_session', 'user_lock'));          
    // }
?>

<?php $this->widget('CssWidget'); ?>
<?php $this->widget('HeaderWidget'); ?>
<div class="main-container container-fluid">
	<?php $this->widget('MenuWidget'); ?>
	<div class="main-content">
		<div class="breadcrumbs" id="breadcrumbs">
			<ul class="breadcrumb">
			<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('ext.CBreadcrumbs.Cbreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
			<?php endif?>
			</ul><!--.breadcrumb-->
			<?php // $this->widget('SearchWidget'); ?>
		</div>
		<div class="page-content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->widget('JsWidget'); ?>


