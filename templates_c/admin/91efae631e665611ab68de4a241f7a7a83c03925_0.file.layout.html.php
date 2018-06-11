<?php
/* Smarty version 3.1.32, created on 2018-05-26 10:45:22
  from 'F:\phpStudy\WWW\blog\app\admin\view\Public\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b093ac257c3b9_09270232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91efae631e665611ab68de4a241f7a7a83c03925' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\blog\\app\\admin\\view\\Public\\layout.html',
      1 => 1527327327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/left.html' => 1,
    'file:../Public/foot.html' => 1,
  ),
),false)) {
function content_5b093ac257c3b9_09270232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header>
			<div class="admin-logo">
				<h1>达内psd1803</h1>				
			</div>
			<div class="top">
				<div class="top-nav">
				<ul class="navlist">
					<li class="nav"><a href="admin.php">首页</a></li>
					<li class="nav"><a href="#">菜单一</a></li>
					<li class="nav"><a href="#">菜单二</a></li>
					<li class="nav"><a href="index.php" target="_blank">浏览前台</a></li>
				</ul>
			</div>
			<div class="admin-zone">
				<?php echo $_SESSION['admin_name'];?>
，欢迎回来！&nbsp;&nbsp;<a href="admin.php?c=admin&a=admin_out">退出</a>
			</div>
			</div>
		</header>
<div class="main">	
	<div class="sidebar"><?php $_smarty_tpl->_subTemplateRender("file:../Public/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="divider"></div>
	<div class="rightmain">
		<div class="rightnav"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_308535b093ac25782e5_99564004', 'rightnav');
?>
</div>
	    <div class="rightcontent"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109845b093ac2579a04_84870081', 'main');
?>
</div>
		
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'rightnav'} */
class Block_308535b093ac25782e5_99564004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightnav' => 
  array (
    0 => 'Block_308535b093ac25782e5_99564004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
标题栏	<?php
}
}
/* {/block 'rightnav'} */
/* {block 'main'} */
class Block_109845b093ac2579a04_84870081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_109845b093ac2579a04_84870081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
右侧内容<?php
}
}
/* {/block 'main'} */
}
