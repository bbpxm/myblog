<?php
/* Smarty version 3.1.32, created on 2018-05-25 16:52:41
  from 'D:\WWW\PSD1803\CodingBlog\app\admin\view\Public\left.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b07ced9140501_61257138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a096b56ee4c47e9eaaa48e01e83d565ef32b3c' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\admin\\view\\Public\\left.html',
      1 => 1527238339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b07ced9140501_61257138 (Smarty_Internal_Template $_smarty_tpl) {
?><p class="caption">控制面板</p>
<dl class="menu">
	<dt class="nav"><i>☛</i>博客管理</dt>
	<dd class="sub_nav">
		<a href="admin.php?c=article" class="nav-link"><i>•</i>文章列表</a>
		<a href="" class="nav-link"><i>•</i>添加文章</a>
		<a href="admin.php?c=article&a=showcomments" class="nav-link"><i>•</i>评论管理</a>
	</dd>
	<dt class="nav"><i>☛</i>用户管理</dt>
	<dd class="sub_nav">
		<a href="admin.php?c=user" class="nav-link"><i>•</i>用户列表</a>
	</dd>
	<dt class="nav"><i>☛</i>系统管理</dt>
	<dd class="sub_nav">
		<a href="" class="nav-link"><i>•</i>管理员列表</a>
		<a href="" class="nav-link"><i>•</i>密码修改</a>
		<a href="" class="nav-link"><i>•</i>清除缓存</a>
	</dd>
</dl><?php }
}
