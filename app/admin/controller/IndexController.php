<?php
namespace app\admin\controller;
class IndexController extends BaseController{
//	public function __construct(){parent::__construct();}
	
	public function index(){
		if(!isset($_SESSION['admin_id'])){
			header('location:admin.php?c=admin&a=loader');
			exit;
		}
		$this->display('Index/index.html');
	}
}
