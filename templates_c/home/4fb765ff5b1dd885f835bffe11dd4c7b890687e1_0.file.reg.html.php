<?php
/* Smarty version 3.1.32, created on 2018-05-26 15:49:11
  from 'D:\WWW\PSD1803\CodingBlog\app\home\view\User\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0911778fa7a4_74329656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb765ff5b1dd885f835bffe11dd4c7b890687e1' => 
    array (
      0 => 'D:\\WWW\\PSD1803\\CodingBlog\\app\\home\\view\\User\\reg.html',
      1 => 1527237827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/foot.html' => 1,
  ),
),false)) {
function content_5b0911778fa7a4_74329656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
	<div class="main panel">
		<div class="log-form">
			<div class="form-title">
			   <span>用户注册</span>
		    </div>
			<form action="index.php?c=user&a=reg" method="post">
			<div class="form-group">
				<label>用户名</label>
				<input type="text" name="username" id="" class="textinput" />
				<span><a href="#" target="_blank" style="color:blue">检查用户名是否可用</a></span>
			</div>
			<div class="form-group">
				<label>邮箱</label>
				<input type="text" name="email" id="" class="textinput" />
			</div>
			<div class="form-group">
				<label>密码</label>
				<input type="password" name="password" id="" class="textinput" />
			</div>
			<div class="form-group">
				<label>确认密码</label>
				<input type="password" name="repassword" id="" class="textinput" />
			</div>
			<div class="form-group">
				<label>验证码</label>
				<input type="text" name="vcode" id="" class="vcode textinput" />
				<img src="index.php?c=user&a=getVcode" onclick="this.src='index.php?c=user&a=getVcode'" alt="点击刷新" class="imgcode"/>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="注册" class="btn btn-submit btn-green" name="btnReg"/>
			</div>
		</form>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
