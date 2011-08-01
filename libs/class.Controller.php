<?php
class Controller {
	public function __construct() 
	{
		$this->view = new View();
	}
	
	public function loadModel($name) 
	{
		$modelName = 'Model_' . $name;
		$this->model = new $modelName();
	}
}