<?php
/* Smarty version 3.1.32, created on 2018-05-25 14:19:27
  from 'F:\phpStudy\WWW\blog\app\home\view\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b081b6f57feb2_67116349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '491f7dfd1372cb8031a5faa574e9ca39ef3a5dac' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\blog\\app\\home\\view\\Index\\index.html',
      1 => 1527249398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/foot.html' => 1,
  ),
),false)) {
function content_5b081b6f57feb2_67116349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\phpStudy\\WWW\\blog\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
			<div class="main">
				<div class="leftPanel float-left ">
					<div class="panel mb-3">
						<ul class="artlist">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articlelist']->value, 'article', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['article']->value) {
?>					  
						<li class="item" <?php if ($_smarty_tpl->tpl_vars['article']->value['top_img'] != null) {?>style="padding-left:180px;"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['article']->value['top_img'] != null) {?>
							   <div class="art-img">
								<a href="index.php?c=article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><img class="art-thumb-img" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['top_img'];?>
" alt="" /></a>
							</div>
							<?php }?>
							<div class="arttitle">
								<?php if ($_smarty_tpl->tpl_vars['article']->value['is_top'] == 1) {?><i class="badge new">顶</i><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['k']->value < 3) {?><i class="badge new">新</i><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['article']->value['hit'] > 30) {?><i class="badge hot">热</i><?php }?>
							
								
								<a href="index.php?c=article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['title'],24,'...');?>
</h3></a></div>
							<div class="art_sysnic"><p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['content'],120,'...');?>
</p></div>
							<div class="art_info">
								<span>作者：<a href="index.php?c=article&a=userArtList&uid=<?php echo $_smarty_tpl->tpl_vars['article']->value['uid'];?>
&n=<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</a></span>
								<span>发表时间：<?php echo $_smarty_tpl->tpl_vars['article']->value['pub_time'];?>
</span>
								<span>阅读(<?php echo $_smarty_tpl->tpl_vars['article']->value['hit'];?>
)</span>
							</div>
						</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					
					</div>
					<?php if ($_smarty_tpl->tpl_vars['pager_open']->value) {?>
						<div class="panel">
						  <div class="pager"><?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
</div>
						</div>  
					<?php }?>
				</div>
				<div class="sidebar float-right panel">
					<div class="box ">
						<div class="box_title"><span>阅读排行榜</span></div>
						<div class="box_body">
							<ul class="lists">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotlist']->value, 'hot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hot']->value) {
?>	
								<li>•<a href="index.php?c=article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['hot']->value['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['hot']->value['title'],12,'...');?>
</a>(<?php echo $_smarty_tpl->tpl_vars['hot']->value['hit'];?>
)</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
					<div class="box">
						<div class="box_title"><span>最新文章</span></div>
						<div class="box_body">
							<ul class="lists">								
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newlist']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>	
								<li>•<a href="index.php?c=article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['new']->value['title'],12,'...');?>
</a>(<?php echo $_smarty_tpl->tpl_vars['new']->value['hit'];?>
)</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
