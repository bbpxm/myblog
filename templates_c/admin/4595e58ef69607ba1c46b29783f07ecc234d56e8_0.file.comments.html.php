<?php
/* Smarty version 3.1.32, created on 2018-05-26 10:45:41
  from 'F:\phpStudy\WWW\blog\app\admin\view\Article\comments.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b093ad50518a2_81323667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4595e58ef69607ba1c46b29783f07ecc234d56e8' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\blog\\app\\admin\\view\\Article\\comments.html',
      1 => 1527249267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b093ad50518a2_81323667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_255795b093ad502ba16_39820797', 'rightnav');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166715b093ad502d0b9_18847605', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Public/layout.html");
}
/* {block 'rightnav'} */
class Block_255795b093ad502ba16_39820797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightnav' => 
  array (
    0 => 'Block_255795b093ad502ba16_39820797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="admin.php">后台首页</a> >
<a href="#">文章列表</a>
<?php
}
}
/* {/block 'rightnav'} */
/* {block 'main'} */
class Block_166715b093ad502d0b9_18847605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_166715b093ad502d0b9_18847605',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\phpStudy\\WWW\\blog\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


<div class="lists">
	<table class="table">
		    <thead>
		    	<tr>
				<th>id</th>
				<th>评论内容</th>
				<th>评论文章</th>
				<th>评论时间</th>
				<th>评论IP</th>
				<th>评论状态</th>
				<th>用户名</th>
				<th>操作</th>
			</tr>
		    </thead>			
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commentlist']->value, 'c', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['c']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
</td>
				<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['comment_content'],30,'...');?>
</td>
				<td><a class="link" href="index.php?c=article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['art_id'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['title'],50,'...');?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['comm_time'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['comm_ip'];?>
</td>
				<td>1</td>
				<td><?php echo 1;?>
</td>
				<td>
					<p>
						<a href="#" class="btn btn-green">回复</a>
						<a href="#" class="btn btn-green">审核</a>
						<a href="#" class="btn btn-red">删除</a>
					</p>
				</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
         <tfoot>
         	<tr>
         		<td></td>
         		<td colspan="7">
         			<?php if ($_smarty_tpl->tpl_vars['pager_open']->value) {?>
						<div class="panel">
						  <div class="pager"><?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
</div>
						</div>  
					<?php }?>
         		</td>
         	</tr>
         </tfoot>
	</table>
</div>
<?php
}
}
/* {/block 'main'} */
}
