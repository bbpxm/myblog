<?php
namespace app\home\model;
class UserModel extends BaseModel{
	public function __construct(){
		parent::__construct();
	}
	/*
	 * @param array $user
	*/
	public function checkUser($user_arr){
		$username=$user_arr['username'];
		$password=md5($user_arr['password']);
		$sql="select * from user where username='{$username}' and password='{$password}'";	
		$result=$this->db->fetch($sql);
		return $result;
	}
	
	/*
	 *检查用户名是否重复
	 */ 
	public function checkUserName($username){
		$sql="select username from user where username='{$username}'";
		$result=$this->db->fetch($sql);
		if($result){
			return $result->username;
		}else{
			return false;
		}
	}
	/*
	 * @param userid
	 */
	public function getUserInfo($userid){
		$sql="select * from user where id=".$userid;
		$result=$this->db->fetch($sql);
		return $result;
	}
	
	public function modiUserFace($faceurl,$userid){
		$sql="update user set face='{$faceurl}' where id={$userid}";
		$result= $this->db->execute($sql);		
		return $result;
	}
	public function modiUserInfo(){
		
	}
	/*
	 * 用户注册
	 */
	public function register($user){
		$username=$user['username'];
		$password=md5($user['password']);
		$email=$user['email'];
		$sql="insert into user(username,password,email) values('{$username}','{$password}','{$email}')";
		return $this->db->execute($sql);
	}
	
	/*
	 * 添加评论
	 */
	public function comments($comments){
		$sql="insert into comments(aid,uid,comment_content)values({$comments['aid']},{$comments['uid']},'{$comments['content']}')";
		return $this->db->execute($sql);
	}
	
	/*
	 * 评论列表
	 * 
	 * @param $aid文章ID 
	 */
	public function getCommList($aid){
		$sql="select comments.*,user.username from comments  left join user on comments.uid=user.id where comments.aid={$aid} order by comm_time desc";
		$result=$this->db->fetchAll($sql);
		return $result;
	}
}
