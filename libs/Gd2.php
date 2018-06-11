<?php
namespace libs;

/*
 * 
 */
class Image{
	//当前图片
	protected $img;
	//图像types对应表
	protected $types=array(
	    1=>'gif',
	    2=>'jpg',
	    3=>'png',
	    6=>'bmp'
	);
	
	public function __construct($img=''){
		!$img && $this->param($img);
	}
	
	public function param($img){
		$this->img=$img;
		return $this;
	}
	public function getImageInfo($img){
		$info=@getimagesize($img);
		if(isset($this->types[$info[2]])){
			$info['ext']=$info['type']=$this->types[$info[2]];
		}else{
			$info['ext']=$info['type']='jpg';
		}
		$info['type']=='jpg' && $info['type']='jpeg';
		return $info;
	}
	
	
	//thumb(新图片地址，宽，高，裁剪，允许放大)
	public function thumb($filename,$new_w=160,$new_h=160,$cut=0,$big=0){
		//获取原图信息
		$info=$this->getImageInfo($this->img);
		if(!empty($info[0])){
			$old_w=$info[0];
			$old_h=$info[1];
			$type=$info['type'];
			$ext=$info['ext'];
			unset($info);
			
			//如果原图比缩略图小，并且不允许放大
			if($old_w < $new_h && $old_h < $new_w && !big){
				return false;
			}
			//裁剪图片
			if($cut==0){ //等比例
				$scale=min($new/$old_w,$new_h/$new_h);//计算缩放比例
				
				//缩略图尺寸
				$width=(int)($old_w*$scale);
				$height=(int)($old_h * $scale);
				
				
				$start_w=$start_h=0;
				$end_w=$old_w;
				$end_h=$old_h;
			}elseif ($cut==1){//center center裁剪
				$scale1= round($new_w/$new_h,2);
				$scale2= round($old_w/$old_h,2);
				
				if($scale1 > $scale2){
					$end_h=round($old_w/$scale1,2);
					$start_h=($old_h-$end_h)/2;
					
					$start_w=0;
					$end_w=$old_w;										
				}else{
					$end_w =round($old_h*);
					
				}
			}
		}
	}
	
} 
