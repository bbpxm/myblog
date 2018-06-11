<?php
namespace app\admin\model;
use \libs\Db;
class ArticleModel{
	public $db;
	public function __construct(){
		$this->db=Db::getInstance();
	}
	
	//所有文章
	public function getAllArt($page_open=false,$page_size=10){
		$this->db=Db::getInstance();
		$limit='';
		if($page_open){
			$current=$_GET['p'] ?? 1;
			$current=(int)($current-1)*$page_size;
			$limit =" limit {$current},{$page_size}";
		}
		$sql="select article.*,user.id as author_id ,user.username as author from article left join user on article.uid=user.id order by article.pub_time desc {$limit}";
		return $this->db->fetchAll($sql);
	}
	
	//所有评论
	public function getAllComments($page_open=false,$page_size=10){
		$limit='';
		if($page_open){
			$current=$_GET['p'] ?? 1;
			$current=(int)($current-1)*$page_size;
			$limit =" limit {$current},{$page_size}";
		}
	   $sql="select comments.*,article.id as art_id,article.title,user.username from comments inner JOIN article ON comments.aid=article.id left join `user`  on comments.uid=`user`.id order by comments.comm_time desc {$limit}";
	   return $this->db->fetchAll($sql);
	}
}
