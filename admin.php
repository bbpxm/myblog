<?php
//include 'vendor/smarty/smarty/libs/Smarty.class.php';
include 'vendor/autoload.php';
session_name('admin');
session_start();

function myautoload2($classname){
	$path=$classname . '.php';
	$path=str_replace('\\', '/', $path);
	include $path;
}

spl_autoload_register('myautoload2');
$c=$_GET['c'] ?? 'Index';
$a=$_GET['a'] ?? 'index';


//先暂时加在这里吧,
//if(!isset($_SESSION['admin_id'])){
//	$c='admin';
//	$a='loader';
//}


$controller="app\\admin\\controller\\{$c}Controller";
$blog=new $controller();
$blog->$a();