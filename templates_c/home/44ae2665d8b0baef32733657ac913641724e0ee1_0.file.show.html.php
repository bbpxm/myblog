<?php
/* Smarty version 3.1.32, created on 2018-05-26 16:15:30
  from 'D:\WWW\PSD1803\CodingBlog\app\home\view\Article\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0917a2432422_81429182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44ae2665d8b0baef32733657ac913641724e0ee1' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\home\\view\\Article\\show.html',
      1 => 1527138053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/foot.html' => 1,
  ),
),false)) {
function content_5b0917a2432422_81429182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\WWW\\PSD1803\\CodingBlog\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
			<div class="main">
				<div class="url_here">
					当前位置:
				</div>
				<div class="leftPanel float-left">
					<article class="panel mb-3">
						<div class="title"><h1><?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
</h1></div>
						
						<div class="articel_info">
							<span>作者:<a href="#"><?php echo $_smarty_tpl->tpl_vars['article']->value->author;?>
</a></span>
								<span>发表时间：<?php echo $_smarty_tpl->tpl_vars['article']->value->pub_time;?>
</span>
								<span>阅读(<?php echo $_smarty_tpl->tpl_vars['article']->value->hit;?>
)</span>
						</div>
						<hr />
						<div class="article_content mb-3">
							<p class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value->top_img;?>
" alt="" /></p>
							<?php echo nl2br($_smarty_tpl->tpl_vars['article']->value->content);?>

						</div>
					
					</article>
					<div class="panel ">
						<div class="box">
							<div class="box_title">评论</div>
							<div class="box_body">
								<div class="commentPanel" name="#comments">
									<form action="index.php?c=article&a=pub_comm" method="post">
										<div class="form-group">
											<label >用户名：</label>
											<?php echo (($tmp = @$_SESSION['username'])===null||$tmp==='' ? '登录后发布评论' : $tmp);?>

										</div>
										<div class="form-group">
											<label style="vertical-align: top;">评论内容</label>
											<textarea name="content" rows="5" cols="50"></textarea>
										</div>
										<div class="form-group">
											<input type="hidden" name="artId" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->id;?>
" />
											<input type="hidden" name="userId" value="<?php echo $_SESSION['userid'];?>
" />
											<input type="submit" value="提交评论" name="btnCom" class="btn btn-green btn-submit" />
										</div>
									</form>
								</div>
								<div class="panel">
									<hr />
									<ul class="commentsList">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
										  <li class="comment">
											<div class="comment_user text-center"><span class="text-center"><img src="statics/images/face.png" class="thumb-user-face" /></span><br /><?php echo $_smarty_tpl->tpl_vars['c']->value['username'];?>
</div>
											<div class="comment_content">
												<p class="mb-1">发表时间:<?php echo $_smarty_tpl->tpl_vars['c']->value['comm_time'];?>
</p>
											<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['comment_content'],150,'...');?>
</p></div>											
										</li>
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
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['hot']->value['title'],16,'...');?>
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
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['new']->value['title'],16,'...');?>
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
