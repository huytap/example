<?php
class PageController extends Controller{
	public function actionView($slug){
		try{
			$page = Menu::model()->findByAttributes(array('url' => $slug));
			if($page['parent']['url'] == 'su-kien' || 
				$page['parent']['url'] == 'tin-tuc-su-kien'){
				$criteria = new CDbCriteria;
				$criteria->select = 't.*';
				$criteria->join = 'JOIN menu m ON m.id=t.menu_id';
				$criteria->condition = 'm.url=:url AND m.disabled=:status';
				$criteria->params = array(':url' => $slug, ':status' => 1);
				$criteria->order = 'created_date DESC';

				$news = new CActiveDataProvider('Cms',array(
                    'pagination' => array(
                        'pageSize' => 3
                    ),
                    'criteria' => $criteria
                ));
				$this->render('news', compact('news'));
			}else{
				if($page['static_page']){
					$page_content = Cms::model()->findByAttributes(array('menu_id' => $page['id']));
					return $this->render('view', compact('page_content'));
				}
				else{
					$page_content = Cms::model()->findAllByAttributes(array('menu_id' => $page['id']));
					return $this->render('view2', compact('page_content'));
				}
			}
		}catch(Exception $e){
			echo "Không tìm thấy yêu cầu hợp lệ";
		}
	}

	public function actionViewdetail($id){
		try{
			$detail = Cms::model()->findByPk($id);
			return $this->render('detail', compact('detail'));
		}catch(Exception $e){
			echo "Không tìm thấy yêu cầu hợp lệ";
		}
	}
}