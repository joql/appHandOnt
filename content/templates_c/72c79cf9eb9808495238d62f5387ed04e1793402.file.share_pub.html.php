<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 03:55:27
         compiled from "content\themes\default\share_pub.html" */ ?>
<?php /*%%SmartyHeaderCode:2864656e30a476a6a24-30265626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72c79cf9eb9808495238d62f5387ed04e1793402' => 
    array (
      0 => 'content\\themes\\default\\share_pub.html',
      1 => 1457726125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2864656e30a476a6a24-30265626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e30a4771ffd6_29621791',
  'variables' => 
  array (
    'fname' => 0,
    'kw' => 0,
    'filetype' => 0,
    'tit' => 0,
    'sskey' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e30a4771ffd6_29621791')) {function content_56e30a4771ffd6_29621791($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
   <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
">

  <title> <?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['filetype']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
 </head> 
 <body>
   <a href = "itms-services://?action=download-manifest&url=http://ios.123.cd57.cn/ps.php?k=<?php echo $_smarty_tpl->tpl_vars['sskey']->value;?>
">
   <h1><?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
</h1>
   </a>
</body>
</html><?php }} ?>
