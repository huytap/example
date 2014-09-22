<?php

class SidebarWidget extends CWidget{
	
	public function run(){
		$this->getsidebar();
	}

	public function getsidebar(){
		if(isset($_GET['sub_cms'])){
			$menu = Menu::model()->findByAttributes(array('url' => $_GET['sub_cms']));
			if($menu){
				//ads
				$criteria = new CDbCriteria;
				$criteria->condition = 'disabled=:status';
				$criteria->params = array(':status' => 1);
				$ads = Ads::model()->findAll($criteria);
				
				//map
				$map = new CDbCriteria;
				$map->condition = 'menu_id=:menu';
				$map->params = array(':menu' => $menu['id']);
				$branch = BranchCompany::model()->find($map);
				$this->render('sidebar', compact(array('ads', 'menu', 'branch')));
			}
		}
	}
}