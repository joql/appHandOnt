<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 04:40:01
         compiled from ".\..\content\themes\default\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2041856e30a63589a58-86419632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c598e160b9e223a96722aca63c7b81e89412d73' => 
    array (
      0 => '.\\..\\content\\themes\\default\\login.html',
      1 => 1457728796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2041856e30a63589a58-86419632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e30a635dbad1_28864254',
  'variables' => 
  array (
    'tit' => 0,
    'head' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'jscode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e30a635dbad1_28864254')) {function content_56e30a635dbad1_28864254($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
   <head> 
      <meta charset="UTF-8" /> 
      <title>登录 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
      <meta name="renderer" content="webkit" /> 
      <link href="favicon.ico" rel="shortcut icon" /> 
      <link rel="stylesheet" href="../content/themes/default/bootstrap/css/iosOverlay.css" /> 
      <link rel="stylesheet" href="../content/themes/default/bootstrap/css/bootstrap.css" /> 
      <link rel="stylesheet" href="../content/themes/default/bootstrap/css/style.css" />
   </head>
   <body onLoad="danru();" id="sd_index" class="sdin">
     <?php echo $_smarty_tpl->tpl_vars['head']->value;?>
 
    <script type="text/javascript" src="../content/themes/default/bootstrap/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../content/themes/default/js/iosOverlay.js"></script>
    <script type="text/javascript" src="../content/themes/default/theme.js"></script> 
    <script type="text/javascript" src="../content/themes/default/js/plax.min.js"></script> 
    <script type="text/javascript" src="../content/themes/default/bootstrap/js/login.js"></script> 
    <style>
  body {

  	background-color: #F0F0F0;
    font-family:"微软雅黑";
  }
</style> 
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

  <div id="wrapper" class="clearfix"> 
     <div id="parallax_wrapper"> 
        <div class="login_content" id="loginform">
            <h4 class="loginhead">登录<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</h4>
            <div class="loginform">
                  <form id="login"class="dd">
                        <div class="form-group" >
                        <div style="display: none;">
                          <input type="text" name="action"value="login">
                        </div>
                          <label class="sr-only" for="exampleInputAmount">username</label>
                          <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                            <input style="width:245px;"type="text" class="form-control" name="username" placeholder="邮箱">
                          </div>
                        </div>
                          <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">username</label>
                          <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                            <input type="password" style="width:245px;"class="form-control" name="password" placeholder="密码">
                          </div>
                        </div>
                        <button style="width:285px;"id="login-button"class="btn btn-primary" onClick="login();">登陆</button>
                  </form>

            </div>
        </div>
     </div>
  </div>
    <span class="scene scene_1"></span> 
  <span class="scene scene_2"></span> 
  <span class="scene scene_3"></span>   <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
   
 </body>
</html><?php }} ?>
