<?php /* Smarty version Smarty-3.1.18, created on 2016-03-11 18:11:19
         compiled from "content\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2248456e30a47772b72-45907108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1434cbf5d71ce7d11af84a9cecdecfa02f45232c' => 
    array (
      0 => 'content\\themes\\default\\footer.html',
      1 => 1454502542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2248456e30a47772b72-45907108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zzurl' => 0,
    'tit' => 0,
    'jscode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e30a4777ba92_62657376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e30a4777ba92_62657376')) {function content_56e30a4777ba92_62657376($_smarty_tpl) {?>


<br><br><br>
    <footer class="footer" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/default/images/footer.png);background-repeat: repeat-x;
">
      <div class="container"> 
        <p class="text-muted">Copyright &copy; 2016 <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
 </p>
      </div>
    </footer><?php }} ?>
