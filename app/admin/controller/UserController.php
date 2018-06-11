<?php
namespace app\admin\controller;
use app\admin\model\UserModel;
use \libs\Page;
use \libs\Gd;
class UserController extends BaseController{
	public function index(){
		if(!isset($_SESSION['admin_id'])){
			header('location:admin.php?c=admin&a=loader');
			exit;
		}
		$userList=$this->userModel->getAllUser();
		if(count($userList) < $this->pager_size){
			$this->pager_open=false;
			$this->assign('pager_open', $this->pager_open);	
		}
		if($this->pager_open){	
			$pager=new Page(count($userList),$this->pager_size,'User','index');
			$userList=$this->userModel->getAllUser($this->pager_open,$this->pager_size);
			$this->assign('pager', $pager->show());
		}
	
		$this->assign('userlist', $userList);
		$this->display('User/list.html');
	}
	public function getVcode(){
		$code=new Gd();
	    return  $code->showVcode();
	}
	
}
