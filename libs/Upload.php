<?php
namespace libs;
//Upload.php
/*
期望: Upload::save('files');
自动保存上传的文件到files目录下
 */

class Upload {
	public $savePath;
	
	//主方法
	public  function save() {
		//1.判断是单文件还是多文件
		$var = reset($_FILES);
		$var = reset($var);
		if (is_array($var)) {
			//三维数组, 是多文件
			$arr = self::convertFiles();
		} else {
			//单文件
			$arr = $_FILES;
		}
		$suc=false;
		foreach ($arr as $value) {
			$suc = self::saveFile($value, $this->savePath);
			if ($suc == false) {
				return false;
			}
		}
		//如果上方循环结束后都没有返回false, 则返回true, 表示都成功了
		return $suc;
	}

	//生成一个不重复的文件名
	//$path 路径   $ext后缀名
	protected static function getUniqueName($path, $ext) {
		$uniqueName = md5(microtime(true) . mt_rand(0, 999999));
		$filename = $uniqueName . $ext;
		//拼接出生成的文件的实际路径
		
		$fn = $path . '/'. $filename;
		//判断生成的文件名 是否已存在
		if (file_exists($fn)) {
			//递归操作: 函数内部调用自身
			return self::getUniqueName($path, $ext);
		} else {
			return $fn;
		}
	}

	//多文件上传的数组转二维数组
	protected static function convertFiles() {
		$arr = reset($_FILES);

		// 多文件的数组不是想要的格式, 需要转换
		foreach ($arr as $key => $value) {
			foreach ($value as $kk => $vv) {
				$newArr[$kk][$key] = $vv;
			}
		}
		return $newArr;
	}

	//保存单文件到指定目录下
	protected static function saveFile($file, $path) {
		if (!file_exists($path)) {
			mkdir($path);
		}
		$path2=date("Y-m-d");
		$path.='/'.$path2;
		if (!file_exists($path)) {
			mkdir($path);
		}		
		$tmp_name = $file['tmp_name'];
		$ext = strrchr($file['name'], '.');
		//获取一个独一无二的路径
		$target = self::getUniqueName($path, $ext);
		//return move_uploaded_file($tmp_name, $target);
		$isUp=move_uploaded_file($tmp_name, $target);
		if($isUp == false){
			return false;
		}else{
			return $target;
		}
	}
}
