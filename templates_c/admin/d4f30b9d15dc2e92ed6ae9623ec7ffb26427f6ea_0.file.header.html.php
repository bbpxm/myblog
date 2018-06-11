<?php
/* Smarty version 3.1.32, created on 2018-05-26 10:45:22
  from 'F:\phpStudy\WWW\blog\app\admin\view\Public\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b093ac258f956_71818101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f30b9d15dc2e92ed6ae9623ec7ffb26427f6ea' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\blog\\app\\admin\\view\\Public\\header.html',
      1 => 1527249736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b093ac258f956_71818101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="UTF-8">
		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_323855b093ac258ec13_15126884', 'title');
?>
</title>
		<link rel="stylesheet" href="statics/css/admin.css">		
	</head>
	<body>
		<?php }
/* {block 'title'} */
class Block_323855b093ac258ec13_15126884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_323855b093ac258ec13_15126884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
后台管理<?php
}
}
/* {/block 'title'} */
}
