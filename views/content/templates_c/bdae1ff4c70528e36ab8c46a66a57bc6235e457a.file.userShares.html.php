<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 03:59:40
         compiled from ".\..\content\themes\default\userShares.html" */ ?>
<?php /*%%SmartyHeaderCode:1738956e323aca28f11-85651176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdae1ff4c70528e36ab8c46a66a57bc6235e457a' => 
    array (
      0 => '.\\..\\content\\themes\\default\\userShares.html',
      1 => 1454725178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1738956e323aca28f11-85651176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tit' => 0,
    'head' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'filedata' => 0,
    'jscode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e323aca78bf0_43852557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e323aca78bf0_43852557')) {function content_56e323aca78bf0_43852557($_smarty_tpl) {?><title>公开分享 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
   <?php echo $_smarty_tpl->getSubTemplate ("userIndexSide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

              <div class="col-md-10">
                <div class="zhu">
                  <div class="row">
                  <div class="col-md-12">
                    <h1 class="page-header">  公开分享</h1>
                    </div>
                  </div>
                  <div class="row">

                  <div class="col-md-12" style="margin-left: 20px;">
                  <table class="table table-hover table-bordered "style="width: 96%">
<thead>
        <tr>
        <th> <input type="checkbox" onclick="selectAll(this);"  /></th>
        <th >分享文件名</th>
          <th >源件名</th>
          <th>下载次数</th>
          <th>分享日期</th>
          <th>操作</th>
        </tr>
      </thead>

         
          <tbody>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['two'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['two']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['filedata']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['name'] = 'two';
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total']);
?>  
 <tr> 
<td><input type="checkbox"name="file"value="<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['sskey'];?>
"  /></th></td>
<td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['fname'];?>
.<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['ftype'];?>
</td>
 <td><a target="_blank"href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
/views/fileJump.php?key=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['filekey'];?>
&ming=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['ming'];?>
"><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['ming'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['downloadnum'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['sstime'];?>
</td> 
 <td><button onclick="delshare('<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['sskey'];?>
');"class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> 删除</button> <a href="../f.php?k=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['sskey'];?>
"target="_blank"class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i> 查看</a></td></td>
<?php endfor; else: ?> 
没有记录 
<?php endif; ?>  </tbody></table>
<button onclick="delall();"id="s"class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> 删除选中分享</button><br><br>
        </div>
            </div>

                </div>
              </div>
</div>
              </div><!--con -->
  <br>  <br>  <br>  <br>  <br>
  <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('jscode'=>$_smarty_tpl->tpl_vars['jscode']->value,'tit'=>$_smarty_tpl->tpl_vars['tit']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value), 0);?>

  <script language="JavaScript"> 
  function delall(){
     var chk_value =[];//定义一个数组    
            $('input[name="file"]:checked').each(function(){  
            chk_value.push($(this).val());   
            });
            $("#s").attr("disabled","true");
            for(key1 in chk_value){ 
                $.post("../includes/userAction.php",{key: chk_value[key1],action: "delshare"},
  function(data){
    var pe=data.split(".");
    if(pe[0]=="ok"){ 
    }else{ 



 };

});
                
            }
            $("#ss").removeAttr("disabled");
            window.location.reload();
  } 
 function delshare(key1) {
   
$.post("../includes/userAction.php",{key: key1,action: "delshare"},
  function(data){
    var pe=data.split(".");
    if(pe[0]=="ok"){ 
alert(pe[1]);
window.location.reload();
    }else{ 
alert(pe[1]);


 };

});}
 function selectAll(checkbox) {
                $('input[type=checkbox]').prop('checked', $(checkbox).prop('checked'));
            }
</script>  
 </body>
</html><?php }} ?>
