<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 03:59:30
         compiled from ".\..\content\themes\default\userIndexSide.html" */ ?>
<?php /*%%SmartyHeaderCode:3102456e323a25273f9-15389288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ac98cd00e360cd2c56bcca592c3af81e1b582a6' => 
    array (
      0 => '.\\..\\content\\themes\\default\\userIndexSide.html',
      1 => 1454722784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3102456e323a25273f9-15389288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e323a25353a8_90229031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e323a25353a8_90229031')) {function content_56e323a25353a8_90229031($_smarty_tpl) {?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 


  
  <link rel="stylesheet" href="../content/themes/default/bootstrap/css/bootstrap.css" /> 
  <link rel="stylesheet" href="../content/themes/default/bootstrap/css/style_u.css" /> 
    <link rel="stylesheet" href="../content/themes/default/bootstrap/css/lock.css" /> 
      <link rel="stylesheet" href="../content/themes/default/bootstrap/css/iosOverlay.css" /> 
 </head> 
 <body>
   <?php echo $_smarty_tpl->tpl_vars['head']->value;?>
 
  <script type="text/javascript" src="../content/themes/default/bootstrap/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="../content/themes/default/js/ZeroClipboard.js"></script> 
    <script type="text/javascript" src="../content/themes/default/js/iosOverlay.js"></script>
        <script type="text/javascript" src="../content/themes/default/js/else.js"></script>
  <style type="text/css">
 body {
  background-image: url(../content/themes/default/images/bg.png);
  background-repeat: repeat-x;
  background-color: #9cd9f2;
  margin-top:36px;
font-family: '微软雅黑';

}
a{
  color: #444444  ;
}
.xiaoguo{box-shadow: 0px 0px 30px #888888;}
body, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, textarea, p, blockquote, th, td { padding: 0; margin: 0; }
</style> 
<div>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

    <br /> 
   <br /> 
   <br /> 

   <br />  <br /> 
<div class="container">
<div class="row">
 <div class="list-group-block col-md-2 zhu">
                <div class="list-group-panel">


<br>
                  
                <ul class="list-group">
                                
                  <a class="list-group-item " href="userIndex.php"><i class="glyphicon glyphicon-home"></i> 个人主页</a>
                  
                  <a class="list-group-item " href="userFiles.php"><i class="glyphicon glyphicon-file"></i> 我的文件</a>
                  
                  <a class="list-group-item " href="userShares.php"><i class="glyphicon glyphicon-cloud"></i> 公开分享</a>
                  <a class="list-group-item " href="userSharesS.php"><i class="glyphicon glyphicon-eye-close"></i> 私密分享</a>

                               
                  <a class="list-group-item " href="userPassWord.php"><i class="glyphicon glyphicon-lock"></i> 修改密码</a>

                                  <a class="list-group-item " href="../includes/userAction.php?action=logout"><i class="glyphicon glyphicon-circle-arrow-right"></i> 退出登录</a>
                  
                </ul>
              </div>

                    

                     

                
              </div>
<script type="text/javascript">
 var linkname = window.location.pathname.split('/');
var linknow = linkname[linkname.length-1].split("?");
 $("a[href='"+linknow+"']").addClass("active");
</script><?php }} ?>
