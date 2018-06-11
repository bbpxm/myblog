<?php
namespace libs;
/*
 * Gd图像处理类，验证码生成
 */
class Gd{
	public $vcode_w;//验证码宽度
	public $vcode_h;//验证码高度
	public $vcode_len;//验证码长度
	public function __construct($v_w=80,$v_h=32,$v_len=4){
		$this->vcode_w=$v_w;
		$this->vcode_h=$v_h;
		$this->vcode_len=$v_len;
	}
	/*
	 * 生成验证码
	 */
	public function showVcode(){
		$this->genrateCodeTxt();		
	}
	private function genrateCodeTxt(){
		header("content-type:image/png");
		$codepanel=imagecreatetruecolor($this->vcode_w,$this->vcode_h);
		$panelcolor=imagecolorallocate($codepanel,230,230,230);
		imagefill($codepanel,0,0,$panelcolor);
		$textcolor=imagecolorallocate($codepanel,255,0,0);
		$text=$this->randText();
		
//      $font=__DIR__.'/arial.ttf';
        $font='../statics/font/arial.ttf';
//	    imagestring($codepanel,5,5,5,$text,$textcolor);
		imagettftext($codepanel,16,0,10,24,$textcolor,'arial.ttf',$text);		
		imagepng($codepanel);
		imagedestroy($codepanel);
	}
	public function randText(){
		$tag='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$text='';
		for($i=0;$i<$this->vcode_len;$i++){
			$text.=$tag[mt_rand(0,strlen($tag)-1)];
		}
		$_SESSION['vcode']=$text;
		return $text;
	} 
	/*
	 * 剪裁缩放图像
	 */
	public static function thumb($_w,$_h,$path){
		$file=reset($_FILES);
		list($src_img_w,$src_img_h)=getimagesize($file['tmp_name']);		
		$thumb_img=imagecreatetruecolor($_w,$_h);
		$source_img=imagecreatefromjpeg($file['tmp_name']);
		$thumb_name=$path.md5(time().$_SESSION['userid']).'.png';
		
		imagecopyresized($thumb_img, $source_img, 0, 0, 0, 0, $_w, $_h, $src_img_w, $src_img_h);
//		header("content-type:image/png");
        $result=imagepng($thumb_img,$thumb_name);
		imagedestroy($thumb_img);
		imagedestroy($source_img);
		if($result){
			return $thumb_name;
		}else{
			return false;
		}
		
		
	}
	
	
	public function __destruct(){
//		imagedestroy($);
	}
	
}
