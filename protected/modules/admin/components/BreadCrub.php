<?php
class BreadCrubWidget extends CWidget
{
	public $crumbs = array();
	public $delimiter = ' / ';

	public function run() {
		$this->render('breadCrumb');
	}
}

?>