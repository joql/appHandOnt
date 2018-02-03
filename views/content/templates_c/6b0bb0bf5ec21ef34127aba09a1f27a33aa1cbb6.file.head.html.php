<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 04:38:33
         compiled from ".\..\content\themes\default\head.html" */ ?>
<?php /*%%SmartyHeaderCode:2541956e309e03962d9-53299615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b0bb0bf5ec21ef34127aba09a1f27a33aa1cbb6' => 
    array (
      0 => '.\\..\\content\\themes\\default\\head.html',
      1 => 1457728705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2541956e309e03962d9-53299615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e309e03b4949_42025233',
  'variables' => 
  array (
    'zzurl' => 0,
    'isvisitor' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e309e03b4949_42025233')) {function content_56e309e03b4949_42025233($_smarty_tpl) {?><nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
/content/themes/default/images/logo_s.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!-- 你可以在这里添加靠左边的导航   -->
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页</a></li>

         <?php if ($_smarty_tpl->tpl_vars['isvisitor']->value=="true") {?>
         <li><a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 登录</a></li>
         <?php } else { ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="
glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
/views/userIndex.php">用户中心</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
/includes/userAction.php?action=logout">登出</a></li>
          </ul>
        </li>
        <?php }?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 </div>
</nav>
<?php }} ?>
