<?php
//include 'vendor/smarty/smarty/libs/Smarty.class.php';
include 'vendor/autoload.php';
session_name('user');
session_start();

function myautoload($classname){
	$path=$classname . '.php';
	$path=str_replace('\\', '/', $path);
	include $path;
}

spl_autoload_register('myautoload');
$c=$_GET['c'] ?? 'Index';
$a=$_GET['a'] ?? 'index';
$controller="app\\home\\controller\\{$c}Controller";


$blog=new $controller();
$blog->$a();