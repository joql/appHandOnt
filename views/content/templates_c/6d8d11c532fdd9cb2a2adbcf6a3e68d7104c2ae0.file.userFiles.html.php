<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 03:59:35
         compiled from ".\..\content\themes\default\userFiles.html" */ ?>
<?php /*%%SmartyHeaderCode:2479156e323a7c9cd33-18978286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d8d11c532fdd9cb2a2adbcf6a3e68d7104c2ae0' => 
    array (
      0 => '.\\..\\content\\themes\\default\\userFiles.html',
      1 => 1454665160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2479156e323a7c9cd33-18978286',
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
  'unifunc' => 'content_56e323a7d67164_63630741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e323a7d67164_63630741')) {function content_56e323a7d67164_63630741($_smarty_tpl) {?><title>我的文件 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
   <?php echo $_smarty_tpl->getSubTemplate ("userIndexSide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

              <div class="col-md-10">
                <div class="zhu">
                  <div class="row">
                  <div class="col-md-12">
                    <h1 class="page-header">  我的文件</h1>
                    </div>
                  </div>
                  <div class="row">

                  <div class="col-md-12" style="margin-left: 20px;">
                  <table class="table table-hover table-bordered "style="width: 96%">
<thead>
        <tr>
        <th> <input type="checkbox" onclick="selectAll(this);"  /></th>
          <th >文件名</th>
          <th>上传日期</th>
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
<td><input type="checkbox"name="file"value="<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['key1'];?>
"  /></th></td>
 <td><a target="_blank"href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
/views/fileJump.php?key=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['key1'];?>
&ming=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['ming'];?>
"><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['ming'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['uploadtime'];?>
</td> 
 <td><button onclick="delfile('<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['key1'];?>
');"class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> 删除</button></td></td>
<?php endfor; else: ?> 
 nothing  
<?php endif; ?>  </tbody></table>
<button onclick="delall();"id="s"class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> 删除选中文件</button><br><br>
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
                $.post("../includes/delete_file.php",{key: chk_value[key1]},
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
 function delfile(key1) {
   
$.post("../includes/delete_file.php",{key: key1},
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
