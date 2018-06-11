<?php
namespace libs;
class Db{
	private  $db;
	private function __construct(){
		$this->db=new \PDO('mysql:host=localhost;dbname=myblog','root','root');			
	}
	private function __clone(){}
	static function getInstance(){
		static $obj=null;
		if(is_null($obj)){
			$obj=new Db();
		}
		return $obj;
	}
	
	public function fetchAll($sql){
		$stmt=$this->db->query($sql);
		return $stmt->fetchAll();
	}
	public function fetch($sql){
		$stmt=$this->db->query($sql);
		return $stmt->fetchObject();
	}
	public function execute($sql){
		$stmt=$this->db->query($sql);
		return $stmt;
	}
}
