<?php
namespace app\home\model;
class BaseModel{
	protected $db;
	public function __construct(){
		$this->db=\libs\Db::getInstance();
	}
}
