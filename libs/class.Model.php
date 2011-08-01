<?php
class Model {
	protected function secure($value)
	{
		return trim(strip_tags($value));
	}
	public function __construct() {
		$this->db = new Database();
	}

}