<?php
namespace app\home\controller;
use app\home\model as model;
use \libs\Validate;
use \libs\Gd;
class UserController extends BaseController{
	public $userModel;
	public function __construct(){
		parent::__construct();
		$this->userModel=new \app\home\model\UserModel();
	}
	public function index(){
		if(! isset($_SESSION['userid'])){
			header("Location:index.php?c=user&a=login");
			exit;		
		}else{
			
			$user=$this->userModel->getUserInfo($_SESSION['userid']);
//			var_dump($user);exit;
			$artModel=new model\ArticleModel();
			$artlist=$artModel->getArtList('article.uid='.$user->id);
			$this->assign('user',$user);
			$this->assign('articlelist',$artlist);
			$this->display('User/index.html');
		}
		
	}
	public function getVcode(){
		$code=new Gd();
	return  $code->showVcode();
	}
	/*
	 * 用户登录 
	 */
	public function login(){		
		if(isset($_SESSION['userid'])){
			header('Location:index.php?c=user');
			exit;	
		}
		if(isset($_POST['btnLog'])){
			$data['username']=trim($_POST['username']);
		    $data['password']=trim($_POST['password']);
			if(Validate::isUserName($data['username'])==false){
				$this->redirect('小样儿,你是来搞爆破的么?',$_SERVER['REQUEST_URI']);
				exit;
			}
		    if(strtoupper(trim($_POST['vcode']))!=$_SESSION['vcode']){
		    	$this->redirect('验证码不正确',$_SERVER['REQUEST_URI']);
				exit;
		    }else{
		    	if($user=$this->userModel->checkUser($data)){
		    	$_SESSION["userid"]=$user->id;
			    $_SESSION["username"]=$user->username;
				
				$this->redirect('恭喜您，登录成功','index.php');
		    }else{
		    	$this->redirect('用户名或密码不正确',$_SERVER['REQUEST_URI']);		   
		    }
		    }
		    
		}
        
		$this->display('User/login.html');
	}
	/*
	 * 用户注册
	 */
	public function reg(){		
		if(isset($_SESSION['userid'])){
			header('Location:index.php?c=user');
			exit;	
		}
        if(isset($_POST['btnReg'])){
        	$temp_user['username']=htmlspecialchars(trim($_POST['username']),ENT_QUOTES);
			$temp_user['password']=$_POST['password'];
			$repassword=$_POST['repassword'];
			$temp_user['email']=$_POST['email'];
			$temp_user['reg_time']=date("Y-m-d H:i:s");
			$temp_user['status']=1;
			
			if(Validate::isUserName($temp_user['username'])==false){
				$this->redirect('用户名长度为2-100位字母和数字中文下划线的组合',$_SERVER['REQUEST_URI']);
				exit;
			}			
			if($this->userModel->checkUserName($temp_user['username'])){
				$this->redirect('用户名重复',$_SERVER['REQUEST_URI']);
				exit;
			}
			if(Validate::isEmail($temp_user['email'])==false){
				$this->redirect('请输入正确的邮箱地址',$_SERVER['REQUEST_URI']);
				exit;
			}
			if(Validate::isPassword($temp_user['password'])==false){
				$this->redirect('密码至少6位字符,且是字母和数字的组合',$_SERVER['REQUEST_URI']);
				exit;
			}
			if($temp_user['password'] != $repassword){
				$this->redirect('两次密码输入不一致',$_SERVER['REQUEST_URI']);
				exit;
			}
			if(strtoupper(trim($_POST['vcode']))!=$_SESSION['vcode']){
		    	$this->redirect('验证码不正确',$_SERVER['REQUEST_URI']);
				exit;
		    }
			
			if($result=$this->userModel->register($temp_user)){
				$this->redirect('注册成功','index.php');
			}else{
				$this->redirect('注册失败',$_SERVER['REQUEST_URI']);
			}
			
        }

		$this->display('User/reg.html');
	}
	/*
	 * 用户信息修改
	 */ 
	public function useredit(){
		if(!isset($_SESSION['userid'])){
			header('Location:index.php?c=user');
			exit;
		}
		$uid=(int)($_GET['uid'] ?? 0);
		if($uid==$_SESSION['userid']){
			$user=$this->userModel->getUserInfo($uid);			
			$this->assign('user',$user);
		}else{
			$this->redirect('非法访问','index.php?c=user');
			exit;
		}
		if(isset($_POST['btnFaceUp'])){
			$old_face=$user->face;
			if(reset($_FILES)['tmp_name']){			           
				if($face_img=Gd::thumb(200,200,'Uploads/userface/')){
					if($this->userModel->modiUserFace($face_img,$uid)){
						@unlink($old_face);
						$this->redirect('头像修改成功','index.php?c=user');
						exit;
					}else{
						$this->redirect('头像修改失败','index.php?c=user');
						exit;
					}
					
				}
			}
			
		}
		if(isset($_POST['btnUserEdit'])){
			echo '<br>';
			var_dump($_POST);var_dump('这是信息');
		}
		$this->display('User/edit.html');
	}
	
	/*
	 * 用户退出 
	*/
	public function loginout(){
		setcookie(session_name(),'',time()-3600,'/');		
        session_unset();
        session_destroy();
		header("Location:".$_SERVER['PHP_SELF']);
//      var_dump($_SESSION);
	}
}
