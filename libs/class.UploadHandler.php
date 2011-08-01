<?php
class UploadHandler {
	private $data = array();
	private $outputFile;
	
	static function getInstance($data)
	{
		return new UploadHandler($data);
	}
	public function __construct($data) 
	{
		$this->data = $data;
	}
	public function saveImage($file)
	{
		$extension = array_pop(explode('.',$this->data['name']));
		if (strtolower($extension == 'jpg') && filesize($_FILES['pic']['tmp_name']) < 1024*1024*10)
		{
			$this->outputFile = $file;
			@move_uploaded_file($_FILES["pic"]["tmp_name"], $this->outputFile.'.jpg');
		}
		return $this;
	}
	public function resize($width,$height)
	{
		if (!empty($this->outputFile) && file_exists($this->outputFile.'.jpg'))
		{
			SimpleResize::getInstance($this->outputFile.'.jpg')->resize($width,$height)->save($this->outputFile.'_small.jpg');
		}
		return $this;
	}
	
}