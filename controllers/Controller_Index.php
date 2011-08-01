<?php

class Controller_Index extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->loadModel('Index');
		
		$this->view->assign('title','')
				   ->assign('keywords','')
				   ->assign('description','')
				   ->assign('other_title','')
				   ->display('index/index');
	}
	
}