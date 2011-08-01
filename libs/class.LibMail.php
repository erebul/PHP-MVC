<?php
class LibMail {
	private $headers = '';
	private $message = '';
	private $subject = '';
	private $address = ADMIN_EMAIL;
	
	public function setHeaders($from)
	{
		$email_headers  = 'MIME-Version: 1.0' . "\r\n";
		$email_headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$email_headers .= 'From: '. $from . "\r\n";
		$email_headers .= 'Reply-To:'. $from ." \r\n";
		$email_headers .= 'X-Mailer: PHP/'.phpversion();	
		$this->headers = $email_headers;
		return $this;
	}
	public function setMessage($message)
	{
		$this->message = $message;
		return $this;
	}
	public function setSubject($subject)
	{
		$this->subject = $subject;
		return $this;
	}
	public function setAddress($address)
	{
		$this->address = $address;
		return $this;
	}
	public function send()
	{
		@mail($this->address,$this->subject,$this->message,$this->headers);	
	}
}