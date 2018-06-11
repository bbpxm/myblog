<?php
/* Smarty version 3.1.32, created on 2018-05-26 10:40:13
  from 'F:\phpStudy\WWW\blog\app\admin\view\Admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b09398d8340f7_20172688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e25314be682f5f5b511dba185ba12155043a0c5' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\blog\\app\\admin\\view\\Admin\\login.html',
      1 => 1527328083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b09398d8340f7_20172688 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta charset="UTF-8">
		<title>后台管理</title>
		<link rel="stylesheet" href="statics/css/loader.css">
	</head>

	<body>
		
		<div class="wrapper">           
			<div class="login-panel">
			   <div class="form-title">
			   <img src="statics/images/logo_v3.png" class="logo" alt="" /><span>管理登录</span>
		    </div>
              <form action="" method='post'>
              	
              	   <div class="form-group">
              	   	     <label for="" >用户名</label>
              	   	     <input type="text" name="aname" id="aname" class="textinput" />
              	   </div>
              	   <div class="form-group">
              	   	     <label for="" >密&nbsp;&nbsp;&nbsp;码</label>
              	   	     <input type="password" name="apass" id="apass" class="textinput" />
              	   </div>
              	   <div class="form-group">
              	   	     <label for="" >验证码</label>
              	   	     <input type="text" name="vcode" id="vcode" class="vcode textinput" />
              	   	     <img src="admin.php?c=user&a=getVcode" onclick="this.src='admin.php?c=user&a=getVcode'" alt="点击刷新" class="imgcode"/>
              	   </div>
              	   <div class="form-group text-center">
              	   	<p>test帐号:   admin   admin123</p>
              	   	     <input type="submit" value="登录后台" name="btnComeIn" class="btn btn-green btn-submit"/>
              	   </div>
              </form>
			</div>
			<footer>
			<div class="copyright">
				技术支持-达内-PSD1803 制作@娄金平
			</div>
		</footer>
		</div>
	</body>
</html><?php }
}
