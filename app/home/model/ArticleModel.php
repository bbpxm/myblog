<?php
namespace app\home\model;
class ArticleModel extends BaseModel{
	public function __construct(){
		parent::__construct();
	}
	
	/*
	 * 获得所有文章
	 * @Param $p=1 默认开启分页
	 */ 
	public function getArtList($where='',$order='',$page_open=false,$page_size=10){
		$where=empty($where) ? '' : "where $where";
		$order=empty($order) ? 'order by pub_time desc' : "order by $order";
		$limit='';
		if($page_open){
			$current=$_GET['p'] ?? 1;
			$current=(int)($current-1)*$page_size;
			$limit =" limit {$current},{$page_size}";
		}	
		$sql="select article.*,user.username as author from article left join user on article.uid=user.id $where $order $limit";		
		$art=$this->db->fetchAll($sql);
		return $art;
	}
	/*
	 * 获取一篇文章
	 */
	public function getArt($artid,$uid=''){
		if(!empty($uid)){
			$uid='and article.uid='.$uid;
		}
		$sql="select article.*,user.username as author from article left join user on article.uid=user.id where article.id={$artid} {$uid}";
		return $this->db->fetch($sql);
	}
	/*
	 * 添加文章
	 */
	public function addArticle($article){
	   $sql="insert into article (title,content,uid,pub_ip,top_img) values('{$article['title']}','{$article['content']}',{$article['uid']},'{$article['pub_ip']}','{$article['img']}')";
	   return $this->db->execute($sql);
	}
	/*
	 * 增加文章点击数
	 */
	public function addHit($aid){
		$sql="update article set hit=hit+1 where id={$aid}";
		return $this->db->execute($sql);
	}
	
	/*
	 * 修改文章
	 */
	public function artUpdate($art){
		$sql="update article set title='{$art['title']}',content='{$art['content']}',update_time='{$art['time']}' where id={$art['aid']}";
		return $this->db->execute($sql);
	}
}
