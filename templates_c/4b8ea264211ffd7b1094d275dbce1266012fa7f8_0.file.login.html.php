<?php
/* Smarty version 3.1.32, created on 2018-05-25 14:19:44
  from 'F:\phpStudy\WWW\blog\app\home\view\User\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b081b80ebe571_87353814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b8ea264211ffd7b1094d275dbce1266012fa7f8' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\blog\\app\\home\\view\\User\\login.html',
      1 => 1527237818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
    'file:../Public/foot.html' => 1,
  ),
),false)) {
function content_5b081b80ebe571_87353814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
	<div class="main panel">
		
		<div class="log-form">
			<div class="form-title">
			   <span>用户登录</span>
		    </div>
			<form action="" method="post">
			<div class="form-group">
				<label>用户名</label>
				<input type="text" name="username" id="" class="textinput" />
			</div>
			<div class="form-group">
				<label>密码</label>
				<input type="password" name="password" id="" class="textinput" />
			</div>
			<div class="form-group">
				<label>验证码</label>
				<input type="text" name="vcode" id="" class="textinput vcode" />
				<img src="index.php?c=user&a=getVcode" onclick="this.src='index.php?c=user&a=getVcode'" alt="点击刷新" class="imgcode"/>				
			</div>
			<div class="form-group text-center">
				<input type="submit" name="btnLog" value="登录" class="btn btn-submit btn-green"/>
			</div>
		</form>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
