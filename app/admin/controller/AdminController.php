<?php
namespace app\admin\controller;
use \libs\Validate;
class AdminController extends  BaseController{
	public function index(){
		
	}
	public function loader(){
		if(isset($_SESSION['admin_id'])){
			header('location:admin.php');
			exit;
		}
		if(isset($_POST['btnComeIn'])){
			$uname=trim($_POST['aname']);
			$upass=trim($_POST['apass']);
			if(Validate::isUserName($uname)==false){
				$this->redirect('小样儿,你是来搞爆破的么?',$_SERVER['REQUEST_URI']);
				exit;
			}
		    if(strtoupper(trim($_POST['vcode']))!=$_SESSION['vcode']){
		    	$this->redirect('验证码不正确',$_SERVER['REQUEST_URI']);
				exit;
		    }
			if($admin=$this->userModel->adminLogin([$uname,$upass])){
				$_SESSION["admin_id"]=$admin->id;
			    $_SESSION["admin_name"]=$admin->username;
				$this->redirect('欢迎回来,'.$admin->username,'admin.php');
		    }else{
		    	$this->redirect('用户名或密码不正确',$_SERVER['REQUEST_URI']);		   
		    }
		}
		$this->display('Admin/login.html');
	}
	
	public function admin_out(){
		session_unset();
		session_destroy();
		header("location:admin.php");
	}
}
