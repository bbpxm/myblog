<?php
/* Smarty version 3.1.32, created on 2018-05-25 12:13:11
  from 'D:\WWW\PSD1803\CodingBlog\app\home\view\Public\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b078d5765ce99_48071817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '601521e80bb9ae4f13f15b2da490a017012cb330' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\home\\view\\Public\\header.html',
      1 => 1527164456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b078d5765ce99_48071817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174205b078d57655192_90409555', 'title');
?>
</title>
		<link rel="stylesheet" href="statics/css/home.css" />
		<style>
			.head{ background:#98AAB9 url(statics/images/banner-bg<?php echo $_smarty_tpl->tpl_vars['bgnum']->value;?>
.jpg) no-repeat ;background-size:cover;}
		</style>
	</head>
	<body>
		<header>
			<div class="head">
				<div class="container">
					<h1 class="sitelogo">Coding Blog</h1>
					<div class="user_zone">
						<?php if (isset($_SESSION['userid'])) {?>
						 <a href="index.php?c=user"><?php echo (($tmp = @$_SESSION['username'])===null||$tmp==='' ? '' : $tmp);?>
</a>，欢迎回来！
						 <a href="index.php?c=user&a=loginout">退出</a>
						<?php } else { ?>
						<a class="user_login_btn" href="index.php?c=user&a=login">登录</a>
						<a class="user_login_btn" href="index.php?c=user&a=reg">注册</a>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="navbar">
				<div class="container">
					<ul class="nav">
						<li class="active"><a href="index.php" class="nav-link">首页</a></li>
						<li><a href="index.php?c=article" class="nav-link">所有博客</a></li>						
						<li><a href="index.php?c=user" class="nav-link">用户中心</a></li>
					</ul>
				</div>
			</div>
		</header><?php }
/* {block 'title'} */
class Block_174205b078d57655192_90409555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_174205b078d57655192_90409555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Blog<?php
}
}
/* {/block 'title'} */
}
