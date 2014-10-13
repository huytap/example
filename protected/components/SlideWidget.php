<?php
	class SlideWidget extends CWidget
	{
		public function run()
		{
			$this->getslide();
		}
		public function getslide()
		{
			/*slide show*/
			//if(!Yii::app()->cache->get('slide')){
				$slide_criteria = new CDbCriteria;
				$slide_criteria->select = 't.*';
				$slide_criteria->join = 'JOIN galleries g ON g.id = t.gallery_id';
				$slide_criteria->condition = 'g.slide=:slide AND t.active_status=:status';
				$slide_criteria->params = array(':slide' => 'slide', ':status' => 1);
				$slide_criteria->order = 't.priority ASC';
				$slide = Item::model()->findAll($slide_criteria);
				Yii::app()->cache->set('slide', $slide);
			//}else{
			//	$slide = Yii::app()->cache->get('slide');
			//}
			$this->render('slide', compact('slide'));
		}
	}
?>
