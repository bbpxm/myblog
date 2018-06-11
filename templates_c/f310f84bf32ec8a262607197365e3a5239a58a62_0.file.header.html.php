<?php
/* Smarty version 3.1.32, created on 2018-05-25 14:19:27
  from 'F:\phpStudy\WWW\blog\app\home\view\Public\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b081b6f890d37_01671276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f310f84bf32ec8a262607197365e3a5239a58a62' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\blog\\app\\home\\view\\Public\\header.html',
      1 => 1527164456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b081b6f890d37_01671276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236205b081b6f87d4f8_07002110', 'title');
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
class Block_236205b081b6f87d4f8_07002110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_236205b081b6f87d4f8_07002110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Blog<?php
}
}
/* {/block 'title'} */
}
