<?php
class LibException extends Exception
{
	const THROW_SIMPLE = 0;
	const THROW_MEDIUM = 1;
	const THROW_HARD = 2;
	
    public function __construct($msg = '', $code = 0)
    {
		parent::__construct($msg, (int) $code);
		switch($code)
		{
			case self::THROW_MEDIUM:
				//log error
			break;
			case self::THROW_HARD:
				$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'direct';
				$request_uri = $_SERVER['REQUEST_URI'];
				$message = $_SERVER['REMOTE_ADDR'] . "referrer=".$referrer . "\n request_uri=" . $request_uri."\n" . $msg;
				$subject = 'Fatal error on: ' . APPLICATION_WEB_PATH;
				Bootstrap::getMail()->setMessage($message)->setSubject($subject)->send();
			break;			
		}
    }
}
?>