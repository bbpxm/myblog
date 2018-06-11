<?php
namespace app\admin\controller;
use app\admin\model\ArticleModel;
use \libs\Page;
class ArticleController extends BaseController{
	
	//文章列表管理
	public function index(){
		if(!isset($_SESSION['admin_id'])){
			header('location:admin.php?c=admin&a=loader');
			exit;
		}
		$artList=$this->artModel->getAllArt();
		if(count($artList) < $this->pager_size){
			$this->pager_open=false;
			$this->assign('pager_open', $this->pager_open);	
		}
		if($this->pager_open){
			$pager=new Page(count($artList),$this->pager_size,'Article','index');
			$artList=$this->artModel->getAllArt($this->pager_open,$this->pager_size);
			$this->assign('pager', $pager->show());
		}
		$this->assign('artlist',$artList);
		$this->display('Article/list.html');
	}
	
	/*
	 * 评论列表
	 */
	public function showcomments(){
		if(!isset($_SESSION['admin_id'])){
			header('location:admin.php?c=admin&a=loader');
			exit;
		}
		$commentList=$this->artModel->getAllComments();
		if(count($commentList) < $this->pager_size){
			$this->pager_open=false;
			$this->assign('pager_open', $this->pager_open);	
		}
		if($this->pager_open){
			$pager=new Page(count($commentList),$this->pager_size,'Article','showcomments');
			$commentList=$this->artModel->getAllComments($this->pager_open,$this->pager_size);
			$this->assign('pager', $pager->show());
		}
		$this->assign('commentlist', $commentList);
		$this->display('Article/comments.html');
	}
}
