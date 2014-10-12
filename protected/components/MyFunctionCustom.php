<?php
class MyFunctionCustom extends CActiveRecord{

	public static $page = array(
		'about_us' => 'About Us',
		'blog' => 'Blog'
	);
	public static function Menu($parentid, $id = null, $res = '', $sep = ''){
		$criteria = new CDbCriteria;
		$criteria->condition = 'disabled=:status';
		$criteria->params = array(':status' => 1);
		$model = Menu::model()->findAll($criteria);
		foreach($model as $v){
			if($v['parent_id'] == $parentid){
				if($id == $v['id']){
					$re = $sep . "<option selected='selected' value='". $v['id'] ."'>-" . (isset($v['parent']['name']) ? '-'.$v['parent']['name']. '/' : ''). $v['name'] ."</option>";
				}
				else{
					$re = $sep . "<option value='". $v['id'] ."'>-" . (isset($v['parent']['name']) ? '-'.$v['parent']['name']. '/' : ''). $v['name'] ."</option>";
				}
				$res .= MyFunctionCustom::Menu($v['id'], null, $re, $sep);
			}
		}
		return $res;
	}
	public static function page_menu(){
		

		$criteria = new CDbCriteria;
		$criteria->condition = 'disabled=:status';
		$criteria->params = array(':status' => 1);
		$model = Menu::model()->findAll($criteria);
		$menu = array();
		foreach ($model as $key => $value) {
			$menu[$key]['id'] = $value['id'];
			if($value['parent_id']!==null){				
				$menu[$key]['name'] = $value['parent']['name'].'/ '.$value['name'];
			}else{
				$menu[$key]['name'] = $value['name'];

			}
		}
		return CHtml::listData($menu, 'id', 'name');
	}

	public static $gallery_page = array(
		'slide' => 'Slideshow',
		'library' => 'Thư viện hình ảnh'
	);
	
	public static  function getMenuBySlug($slug)
	{
		$model = Menu::model()->findByAttributes(array('url' => $slug));
		return $model;
	}

	public static function cms(){
		$criteria = new CDbCriteria;
		$criteria->condition = 'static_page=:page AND disabled=:status';
		$criteria->params = array(':page' => 1, ':status' => 1);
		$model = Menu::model()->findAll($criteria);
		$menu = array();
		foreach ($model as $key => $value) {
			$menu[$key]['id'] = $value['id'];
			if($value['parent_id'] !== Null){				
				$menu[$key]['name'] = $value['parent']['name'].'/ '.$value['name'];
			}else{
				$menu[$key]['name'] = $value['name'];

			}
		}
		return CHtml::listData($menu, 'id', 'name');
	}

	public static function getSubMenuByParent($id){
		$criteria = new CDbCriteria;
		$criteria->condition = 'disabled=:status AND parent_id=:parent';
		$criteria->params = array(':status' => 1, ':parent' => $id);
		$criteria->order = 'priority ASC';

		$model = Menu::model()->findAll($criteria);
		return $model;
	}
	public static function getParentMenuById($id){
		$model = Menu::model()->findByPk($id);
		return $model;
	}
	public static $services = array(
		'college_admissions' => 'College Admissions',
		'transfer_admissions' => 'Transfer Admissions',
		'boarding_school' => 'Boarding School',
		'summer_program' => 'Summer Program',
		'faq' => 'FAQ'
	); 

	public static $status = array(
		'1' => 'Hiện',
		'0' => 'Ẩn'
	);

	public static function parent_menu(){
		$criteria = new CDbCriteria;
		$criteria->condition = 'parent_id is Null';
		$model = Menu::model()->findAll($criteria);
		return CHtml::listData($model, 'id', 'name');
	}

	public static function remove_accents($title) {
        $replacement = '-';
        $map = array();
        $quotedReplacement = preg_quote($replacement, '/');

        $default = array(
            '/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/' => 'a',
            '/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/' => 'e',
            '/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/' => 'i',
            '/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/' => 'o',
            '/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/' => 'u',
            '/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/' => 'y',
            '/đ|Đ/' => 'd',
            '/ç/' => 'c',
            '/ñ/' => 'n',
            '/ä|æ/' => 'ae',
            '/ö/' => 'oe',
            '/ü/' => 'ue',
            '/Ä/' => 'Ae',
            '/Ü/' => 'Ue',
            '/Ö/' => 'Oe',
            '/ß/' => 'ss',
            '/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            //'/\\s+/' => $replacement,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
        );
        $title = urldecode($title);

        $map = array_merge($map, $default);
        return strtolower(preg_replace(array_keys($map), array_values($map), $title));
    }

    public static function create_slug($str) {
        $str = self::remove_accents($str);
        $str = preg_replace('/&.+?;/', '', $str); // kill entities
        $str = str_replace('.', '-', $str);
        $str = preg_replace('/[^%a-z0-9 _-]/', '', $str);
        $str = preg_replace('/\s+/', '-', $str);
        $str = preg_replace('|-+|', '-', $str);        
        return trim(preg_replace("/[^a-zA-Z0-9\.]/", "-", $str),'-');
    }
}