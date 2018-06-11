<?php
/* Smarty version 3.1.32, created on 2018-05-25 16:05:13
  from 'D:\WWW\PSD1803\CodingBlog\app\home\view\Article\articleEdit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b07c3b901f409_67775815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b9548a5e83d0d068ae13a97cc51b6caf3074a6a' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\home\\view\\Article\\articleEdit.html',
      1 => 1527129092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/foot.html' => 1,
  ),
),false)) {
function content_5b07c3b901f409_67775815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
	<div class="main panel">
		<div class="article-form">
			<form action="" method="post">
			   <div class="form-group">
			   	<label for="" style="vertical-align: top;">文章标题</label>
			   	<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
" class="textinput"/>
			   </div>
			   <div class="form-group">
			   	<label for="" style="vertical-align: top;">文章内容</label>
			   	<textarea name="content" rows="10" cols="60"><?php echo $_smarty_tpl->tpl_vars['article']->value->content;?>
</textarea>
			   </div>
			    <div class="form-group">
			   	<label for="" style="vertical-align: top;">文章配图</label>
			   	<input type="file" name="art_img" id="" />
			   </div>
			   <div class="form-group">
			   	  <input type="hidden" name="aid" id="aid" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->id;?>
" />
			   	  <input type="submit" value="修改文章" name="btnEdit" class="btn btn-green btn-submit" />
			   </div>
			</form>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
