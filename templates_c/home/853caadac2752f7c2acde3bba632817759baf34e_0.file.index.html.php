<?php
/* Smarty version 3.1.32, created on 2018-05-26 17:04:15
  from 'D:\WWW\PSD1803\CodingBlog\app\home\view\User\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b09230f5f7628_24192735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '853caadac2752f7c2acde3bba632817759baf34e' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\home\\view\\User\\index.html',
      1 => 1527325434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/foot.html' => 1,
  ),
),false)) {
function content_5b09230f5f7628_24192735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
	<div class="main">
		<div class="url_here"></div>
		<div class="panel mb-3">
			<div class="box">
			<div class="box_title">用户信息<a href="index.php?c=user&a=useredit&uid=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="btn btn-green float-right">修改信息</a></div>
			<div class="box_body">
				<p>
				  <div class="userface"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->face;?>
" onerror="this.src='statics/images/face/face<?php echo $_smarty_tpl->tpl_vars['user']->value->sex;?>
.jpg'" alt=""/></div>				 
				</p>
				<p>用户名：<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</p>
				<p>邮箱：<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>
				<p>注册时间：<?php echo $_smarty_tpl->tpl_vars['user']->value->reg_time;?>
</p>
				<p>会员状态：<?php echo $_smarty_tpl->tpl_vars['user']->value->status;?>
</p>
			</div>
		</div>
		</div>
		<div class="panel mb-3">
			<div class="box">
				<div class="box_title">封面图<a href="#" class="btn btn-green">更换封面</a><a href="#" class="btn btn-red">删除封面</a></div>
				<div class="box_body">
					<div class="banner"><img width="100%" src="statics/images/banner-bg<?php echo $_smarty_tpl->tpl_vars['bgnum']->value;?>
.jpg"  height="80" alt="" /></div>
				</div>
			</div>
		</div>
		<div class="panel mb-3">
			<div class="box">
			<div class="box_title">我发布的文章<a href="index.php?c=article&a=artPub" class="btn btn-green">发布文章</a></div>
			<div class="box_body">	
				<!--<p class="float-right">-->
					<!--<a href="index.php?c=article&a=artPub" class="btn btn-green float-right">发布文章</a>-->
				<!--</p>-->
				<table class="table" border="1" cellpadding="10" cellspacing="0">
					<tr>
						<th>博客标题</th>
						<th>评论数 / 浏览量</th>
						<th>创建时间</th>
						<th>操作</th>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articlelist']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
					<tr>
						<td><a href="index.php?c=article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></td>
						<td>1221&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['hit'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['article']->value['pub_time'];?>
</td>
						<td><a href="index.php?c=article&a=artEdit&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="btn btn-green">编辑</a><a class="btn btn-red" href="index.php?c=article&a=art_del&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">删除</a></td>
					</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</table>
			</div>
		</div>
		</div>
	</div>
</div>	
<?php $_smarty_tpl->_subTemplateRender("file:../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
