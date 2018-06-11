<?php
namespace app\home\controller;
use app\home\model as model;
use \libs\Page;
class IndexController extends  BaseController{
	public function __construct(){
		parent::__construct();
	}
	public function index(){		
		$artModel=new model\ArticleModel();		
		$artlist=$artModel->getArtList('article.is_recommend=1','article.is_top desc,article.pub_time desc',false);
		
		if($this->pager_open){
			$pager=new Page(count($artlist),$this->pager_size,'Index','index');
			$artlist=$artModel->getArtList('article.is_recommend=1','article.is_top desc,article.pub_time desc',$this->pager_open,$this->pager_size);
			$this->assign('pager', $pager->show());
		}		
		$this->assign('articlelist',$artlist);		
		$this->display('Index/index.html');
	}
}
