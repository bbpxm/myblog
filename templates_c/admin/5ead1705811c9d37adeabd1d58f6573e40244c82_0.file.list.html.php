<?php
/* Smarty version 3.1.32, created on 2018-05-26 10:45:38
  from 'F:\phpStudy\WWW\blog\app\admin\view\User\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b093ad28e66c0_18558561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ead1705811c9d37adeabd1d58f6573e40244c82' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\blog\\app\\admin\\view\\User\\list.html',
      1 => 1527248646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b093ad28e66c0_18558561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61805b093ad28cb538_97655684', 'rightnav');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145735b093ad28cc9e1_26222291', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Public/layout.html");
}
/* {block 'rightnav'} */
class Block_61805b093ad28cb538_97655684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightnav' => 
  array (
    0 => 'Block_61805b093ad28cb538_97655684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="admin.php">后台首页</a> >
<a href="#">用户列表</a>
<?php
}
}
/* {/block 'rightnav'} */
/* {block 'main'} */
class Block_145735b093ad28cc9e1_26222291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_145735b093ad28cc9e1_26222291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="lists">
	<table class="table">
		    <thead>
		    	<tr>
				<th>id</th>
				<th>头像</th>
				<th>用户名</th>
				<th>性别</th>
				<th>Email</th>
				<th>注册时间</th>
				<th>会员状态</th>				
				<th>操作</th>
				</tr>
		    </thead>			
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userlist']->value, 'user', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['user']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
				<td><img src="" class="userface"/></td>
				<td><a class="link" href="#"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></td>
				<td><?php if ($_smarty_tpl->tpl_vars['user']->value['sex'] == 1) {?>男<?php } else { ?>女<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['reg_time'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['user']->value['status']) {?>正常<?php } else { ?>禁言<?php }?></td>				
				<td>
					<p>
						<a href="#" class="btn btn-green">关禁闭</a>
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
         			<?php if ($_smarty_tpl->tpl_vars['pager_open']->value == 'true') {?>
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
