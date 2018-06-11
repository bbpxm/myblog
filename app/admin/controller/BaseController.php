<?php
namespace app\admin\controller;
use app\admin\model as model;
class BaseController{
	protected $smarty;
	protected $pager_open=true;//是否开启分页
	protected $pager_size=10;//每页显示记录数
	
	
	
	public $userModel;
	public $artModel;
//	public $adminModel;
	 
	public function __construct(){
		$this->smarty=new \Smarty();
		$this->smarty->setTemplateDir('app/admin/view');
		$this->smarty->setCompileDir('templates_c/admin');
		$this->userModel=new model\UserModel();
		$this->artModel=new model\ArticleModel();
		
		$this->assign('pager_open',$this->pager_open);	
	}
    public function display($tpl){
    	$this->smarty->display($tpl);
    }
	public function assign($key,$value){
		$this->smarty->assign($key,$value);
	}
	public function redirect($info='success',$url='index.php',$time=3){
		header("refresh:{$time};url={$url}");
		exit("{$info}<br />页面将于{$time}秒后自动返回上一面");
	}
	/**
	 * 排行榜
	 */
	public function hotArt(){
		$artModel=new ArticleModel();
		$hotlist=$artModel->getArtList('','article.hit desc','0,6');
		$newlist=$artModel->getArtList('','article.pub_time desc','0,6');
		$this->assign('hotlist',$hotlist);
		$this->assign('newlist',$newlist);
	}
	
	
		
	
}
