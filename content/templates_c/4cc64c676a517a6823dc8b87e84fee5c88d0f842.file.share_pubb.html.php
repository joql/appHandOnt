<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 03:56:35
         compiled from "content\themes\default\share_pubb.html" */ ?>
<?php /*%%SmartyHeaderCode:2014256e314df5e5a69-16083154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cc64c676a517a6823dc8b87e84fee5c88d0f842' => 
    array (
      0 => 'content\\themes\\default\\share_pubb.html',
      1 => 1457726187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2014256e314df5e5a69-16083154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e314df631729_54353808',
  'variables' => 
  array (
    'fileurl' => 0,
    'fname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e314df631729_54353808')) {function content_56e314df631729_54353808($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
    <dict>
        <key>items</key>
        <array>
            <dict>
                <key>assets</key>
                <array>
                    <dict>
                        <key>kind</key>
                        <string>software-package</string>
                        <key>url</key>
                        <string><![CDATA[<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
]]></string>
                    </dict>
                </array>
                <key>metadata</key>
                <dict>
                    <key>bundle-identifier</key>
                                        <string>im.pre.inhouse.app2</string><key>bundle-version</key>
                    <string>2.1</string>
                    <key>kind</key>
                    <string>software</string>
                    <key>title</key>
                    <string><?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
</string>
                </dict>
            </dict>
        </array>
    </dict>
</plist><?php }} ?>
