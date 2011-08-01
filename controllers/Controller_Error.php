<?php

class Controller_Error extends Controller {

	function __construct() 
	{
		parent::__construct();
	}
	function index($message) 
	{
		if (!DEBUG_ENVIRONMENT)
		{
			$message = '';
		}
		$this->view->assign('title','')
				   ->assign('keywords','')
				   ->assign('description','')
				   ->assign('message','')
				   ->assign('other_title','')
				   ->display('error/index');
	}
}