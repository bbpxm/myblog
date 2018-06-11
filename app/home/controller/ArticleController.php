<?php
namespace app\home\controller;
use app\home\model as model;
use \libs\Page;
class ArticleController extends BaseController{
	public function __construct(){
		parent::__construct();
	}	
	/*
	 * 博客列表
	 */
	public function index(){
		$this->userArtList();		
	}
	/*
	 *用户的文章 
	 */
	public function userArtList(){
		$userid= isset($_GET['uid']) ? 'article.uid='.$_GET['uid']:'';	
		$artModel=new model\ArticleModel();
		$artlist=$artModel->getArtList($userid);
		if(count($artlist) < $this->pager_size){
			$this->pager_open=false;
			$this->assign('pager_open', $this->pager_open);	
		}
		if($this->pager_open){			
				$pager=new Page(count($artlist),$this->pager_size,'Article','index');				
				$artlist=$artModel->getArtList($userid,null,$this->pager_open,$this->pager_size);
				$this->assign('pager', $pager->show());				
		}
		$this->assign('articlelist',$artlist);	
		$this->display('Article/list.html');
	}
	 
	/*
	 * 文章内容
	 */
	public function show(){
		$artid=$_GET['id'];
		$artModel=new model\ArticleModel();
		$article=$artModel->getArt($artid);	
		$userModel=new model\UserModel();
		$comments=$userModel->getCommList($article->id);
//		var_dump($userModel);exit;
		$this->assign('comments', $comments);
		$this->assign('article',$article);
		$artModel->addHit($article->id);
//		$this->hotArt();
		$this->display('Article/show.html');
	}
	
	/*
	 * 发表文章
	 */
	public function artPub(){
		if(isset($_SESSION['userid'])){
			header('Location:index.php?c=user');
			exit;	
		}
		if(isset($_POST['btnPub'])){
			$article['title']=$_POST['title'];
			$article['content']=$_POST['content'];
			$article['uid']=$_SESSION['userid'];
			$article['pub_ip']=$_SERVER['SERVER_ADDR'];
//			$articel['time']=date("Y-m-d H:i:s");
            $upload=new \libs\Upload();
			$upload->savePath='Uploads';
            $img=$upload->save();//       
			if($img==false){
				$img='';
			}
			$article['img']=$img;
			$artModel=new model\ArticleModel();	
			if($result=$artModel->addArticle($article)){
				$this->redirect('恭喜您，文章发布成功','index.php');
				exit;
			}else{
				$this->redirect('文章发布失败',$_SERVER['REQUEST_URI']);
				exit;
			}			
		}
		$this->display('Article/articlePub.html');
	}
	/*
	 * 文章修改
	 * 
	 */
	public function artEdit(){
		if(!isset($_SESSION['userid'])){
			header('Location:index.php?c=user');
			exit;	
		}
		$artId=(int)$_GET['id'];
		
		$artModel=new model\ArticleModel();
		$article=$artModel->getArt($artId,$_SESSION['userid']);
		if($article==false){
			$this->redirect('您只能修改您自己的文章','index.php?c=article&a=show&id='.$artId);
			exit;
		}
		if(isset($_POST['btnEdit'])){
		   $data['aid']=$_POST['aid'];
		   $data['title']=trim($_POST['title']);
		   $data['content']=trim($_POST['content']);
		   $data['time']=date("Y-m-d H:i:s");
		   $data['uid']=$_SESSION['userid'];
		  
//		   $artModel->artUpdate($article);
		   if($result=$artModel->artUpdate($data)){
		   	  $this->redirect('文章修改成功','index.php?c=article&a=show&id='.$artId);
		   }else{
		   	$this->redirect('文章修改失败','index.php?c=article&a=show&id='.$artId);
		   }
		   
		   
		}
		
		$this->assign('article',$article);
		$this->display('Article/articleEdit.html');
	} 
	/*
	 * 文章评论
	 */
	public function pub_comm(){
		if(! isset($_SESSION['userid'])){
			header("Location:index.php?c=user&a=login");
			exit;		
		}	
		if(isset($_POST['btnCom'])){
			$comment['content']=$_POST['content'];
			$comment['aid']=$_POST['artId'];
			$comment['uid']=$_POST['userId'];
			$usermodel=new model\UserModel();
			if($result=$usermodel->comments($comment)){
				$this->redirect('评论成功','index.php?c=article&a=show&id='.$comment['aid'].'#comments');				
			}else{
				$this->redirect('评论失败','index.php?c=article&a=show&id='.$comment['aid'].'#comments');				
			}
					
		}
	}
	
}
