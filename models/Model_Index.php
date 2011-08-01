<?php

class Model_Index extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getStatus()
	{
		return $this->status;
	}
	public function getData()
	{
		return $this->db->query('SELECT * FROM `info` where `status` = 0 LIMIT 20')->fetchAll();
	}
}