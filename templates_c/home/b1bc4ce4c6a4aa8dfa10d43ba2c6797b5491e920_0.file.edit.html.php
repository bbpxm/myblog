<?php
/* Smarty version 3.1.32, created on 2018-05-26 16:17:50
  from 'D:\WWW\PSD1803\CodingBlog\app\home\view\User\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b09182e7148a7_55956753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1bc4ce4c6a4aa8dfa10d43ba2c6797b5491e920' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\home\\view\\User\\edit.html',
      1 => 1527217065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/foot.html' => 1,
  ),
),false)) {
function content_5b09182e7148a7_55956753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
	<div class="main">
		<div class="url_here"></div>
		<div class="panel mb-3">
			
				<div class="box">
			<div class="box_title">用户信息修改</div>
			<div class="box_body">
				<form action="" method="post" enctype="multipart/form-data">
								  				 
				<div class="form-group">
					<div class="userface">
						<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->face;?>
" onerror="this.src='statics/images/face/face<?php echo $_smarty_tpl->tpl_vars['user']->value->sex;?>
.jpg'" alt=""/></div>
					<label for="">我的头像</label><input type="text" name="faceurl" value="statics/images/face/face.jpg" id="" class="textinput" />
					<input type="file" name="userface" value="statics/images/face/face.jpg" id="" class="textinput" />
					<input type="submit" value="上传" name="btnFaceUp" class="btn btn-green" />
				</div>
				<div class="form-group">
					<label>用户名</label>
					<span><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
				</div>
				<div class="form-group">
					<label>邮箱</label>
					<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" id="" class="textinput" />
				</div>
				<div class="form-group">
					<label>密码</label>
					<input type="text" name="password" placeholder="不修改请留空"  id="" class="textinput" />
				</div>
				<div class="form-group">
					<label>确认密码</label>
					<input type="text" name="repassword" placeholder="不修改请留空"  id="" class="textinput" />
				</div>
				<p>注册时间：<?php echo $_smarty_tpl->tpl_vars['user']->value->reg_time;?>
</p>
				<p>会员状态：<?php echo $_smarty_tpl->tpl_vars['user']->value->status;?>
</p>
				<div class="form-group">					
					<input type="submit" name="btnUserEdit" value="保存"  id="" class="btn btn-submit btn-green" />
				</div>
				</form>
			</div>
		</div>
			
		</div>
		
	</div>
</div>	
<?php $_smarty_tpl->_subTemplateRender("file:../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
