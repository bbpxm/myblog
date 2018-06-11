<?php
namespace app\admin\model;
use \libs\Db;
class UserModel{
	public $db;
	public function __construct(){
		$this->db=Db::getInstance();
	}
	public function adminLogin($admin){
		$username=$admin[0];
		$pass=md5($admin[1]);
		
		$sql="select id,username from admin where username='{$username}' and password='{$pass}'";
//		var_dump($sql);exit;
		return $this->db->fetch($sql);
	}
	/*
	 * 所有用户
	 */
	public function getAllUser($page_open=false,$page_size=10){
		$limit='';
		if($page_open){
			$current=$_GET['p'] ?? 1;
			$current=(int)($current-1)*$page_size;
			$limit =" limit {$current},{$page_size}";
		}
		$sql="select * from user order by reg_time desc {$limit}";
		return $this->db->fetchAll($sql);
	}
}
