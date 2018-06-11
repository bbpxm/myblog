<?php
namespace libs;

class Validate {
	//邮箱验证
	public static function isEmail($email) {
		//1.写正则表达式
		$pattern = '/^[\w\-\.]{3,}@[a-zA-Z\d\-]+(\.[a-zA-Z\d\-]+)?\.[a-zA-Z\d\-]{2,6}$/';
		return preg_match($pattern, $email);
	}

	//手机号验证
	public static function isPhone($value) {
		//1.写正则表达式

		$pattern = '/^1(3\d|4[75]|5[0-37-9]|8[0235-9])\d{8}$/';
		return preg_match($pattern, $value);
	}

	//用户名的长度是2-100位，字母、数字、中文、下划线
	public static function isUserName($value) {
		$pattern='/^[A-Za-z0-9_\x{4e00}-\x{9fa5}]+$/u';
		if(!preg_match($pattern, $value)){
			return false;
		}
		$len = mb_strlen($value);
		return $len >= 2 && $len <= 100;

		// if ($len >= 2 && $len <= 100) {
		// 	return true;
		// } else {
		// 	return false;
		// }
	}

	//密码: 密码长度大于6位,必须包含数字和字母
	public static function isPassword($value) {
		if (mb_strlen($value) <= 6) {
			return false;
		}

		$pattern = '/\d/';
		//是否有数字: 返回值是 0 或 1
		$haveNum = preg_match($pattern, $value);

		$pattern = '/[a-zA-Z]/';
		//是否有字母: 返回值是 0 或 1
		$haveEng = preg_match($pattern, $value);

		return $haveNum + $haveEng == 2;
	}

}