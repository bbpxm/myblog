<?php
/* Smarty version 3.1.32, created on 2018-05-25 19:51:54
  from 'D:\WWW\PSD1803\CodingBlog\app\admin\view\Article\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b07f8daa21c06_27583771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0343749b4f08a559df3cb22a16d70d69a55728dc' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\admin\\view\\Article\\list.html',
      1 => 1527249113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b07f8daa21c06_27583771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41175b07f8daa12207_56134571', 'rightnav');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_284585b07f8daa12206_79756857', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Public/layout.html");
}
/* {block 'rightnav'} */
class Block_41175b07f8daa12207_56134571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightnav' => 
  array (
    0 => 'Block_41175b07f8daa12207_56134571',
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
class Block_284585b07f8daa12206_79756857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_284585b07f8daa12206_79756857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="lists">
	<table class="table">
		    <thead>
		    	<tr>
				<th>id</th>
				<th>文章标题</th>
				<th>作者</th>
				<th>浏览量 / 评论数</th>
				<th>文章属性</th>
				<th>发布时间</th>
				<th>最后更新时间</th>
				<th>操作</th>
			</tr>
		    </thead>			
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artlist']->value, 'art', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['art']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
</td>
				<td><a class="link" href="index.php?c=article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</a></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['author_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['author'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['art']->value['hit'];?>
 / 0</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['art']->value['is_top'] == 1) {?><i class="badge new">顶</i><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['k']->value < 3) {?><i class="badge new">新</i><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['art']->value['hit'] > 30) {?><i class="badge hot">热</i><?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['art']->value['pub_time'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['art']->value['update_time'];?>
</td>
				<td>
					<p>
						<a href="#" class="btn btn-green">审核</a>
						<a href="#" class="btn btn-red">退稿</a>
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
