<?php
/* Smarty version 3.1.32, created on 2018-05-26 16:10:11
  from 'D:\WWW\PSD1803\CodingBlog\app\admin\view\Public\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0916639cfc20_58273020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd775a7a07c5ccc026ca5937986f4dedd4e3f34e2' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\admin\\view\\Public\\header.html',
      1 => 1527249736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0916639cfc20_58273020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="UTF-8">
		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11075b0916639cfc26_26524259', 'title');
?>
</title>
		<link rel="stylesheet" href="statics/css/admin.css">		
	</head>
	<body>
		<?php }
/* {block 'title'} */
class Block_11075b0916639cfc26_26524259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11075b0916639cfc26_26524259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
后台管理<?php
}
}
/* {/block 'title'} */
}
