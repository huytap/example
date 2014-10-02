<?php

class CmsController extends Controller{

	public function actionIndex(){
		try{
			if(isset($_GET['cms']) && isset($_GET['sub_cms'])){
				$criteria = new CDbCriteria;
				$criteria->select = 't.*';
				$criteria->join = 'JOIN menu m ON m.id=t.menu_id';
				$criteria->condition = 'm.url=:url AND m.disabled=:status';
				$criteria->params = array(':url' => $_GET['sub_cms'], ':status' => 1);
				$criteria->order = 'created_date DESC';
				$cms = Cms::model()->findAll($criteria);
				$this->render('index', compact('cms'));
			}
		}catch(Exception $e){
			echo 'Không tìm thấy yêu cầu';
			die;
		}
	}

	public function actionList(){
		try{
			if(isset($_GET['sub_cms'])){
				$parent = MyFunctionCustom::getMenuBySlug($_GET['sub_cms']);
				if($parent){
					$criteria = new CDbCriteria;
					$criteria->select = 't.*';
					$criteria->condition = 'parent_id=:parent AND disabled=:status AND parent_id IS NOT NULL';
					$criteria->params = array(':parent' => $parent['id'], ':status' => 1);
					$criteria->order = 'priority ASC';
					$menu = Menu::model()->findAll($criteria);
					$this->render('list', compact('menu'));
				}
			}
		}catch(Exception $e){
			echo 'Invaild request!';
		}
	}

	public function actionNews(){
		try{
			if(isset($_GET['sub_cms'])){
				$criteria = new CDbCriteria;
				$criteria->select = 't.*';
				$criteria->join = 'JOIN menu m ON m.id=t.menu_id';
				$criteria->condition = 'm.url=:url AND m.disabled=:status';
				$criteria->params = array(':url' => $_GET['sub_cms'], ':status' => 1);
				$criteria->order = 'created_date DESC';

				$news = new CActiveDataProvider('Cms',array(
                    'pagination' => array(
                        'pageSize' => 3
                    ),
                    'criteria' => $criteria
                ));
				$this->render('news', compact('news'));
			}
		}catch(Exception $e){
			echo 'Invaild request!';
		}
	}

	public function actionView($id){
		try{
			$cms = Cms::model()->findByPk($id);

			$this->render('view', compact('cms'));
		}catch(Exception $e){

		}
	}
}