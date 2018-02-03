<?php /* Smarty version Smarty-3.1.18, created on 2016-03-12 03:59:30
         compiled from ".\..\content\themes\default\userIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:1019056e323a24dfed5-66893309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c76174b5f82d0d41db74feaeca2cab7a0319984f' => 
    array (
      0 => '.\\..\\content\\themes\\default\\userIndex.html',
      1 => 1454726034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1019056e323a24dfed5-66893309',
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
    'filenum' => 0,
    'sharenum' => 0,
    'mailhash' => 0,
    'gname' => 0,
    'jscode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56e323a251a728_95948258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e323a251a728_95948258')) {function content_56e323a251a728_95948258($_smarty_tpl) {?><title>用户中心 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
   <?php echo $_smarty_tpl->getSubTemplate ("userIndexSide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

              <div class="col-md-10">
                <div class="zhu">
                  <div class="row">
                  <div class="col-md-12">
                    <h1 class="page-header">  欢迎您,<?php echo $_smarty_tpl->tpl_vars['userinfo']->value["username"];?>
</h1>
                    </div>
                  </div>
                  <div class="row">
                <div class="col-lg-3 col-md-6" style="margin-left: 20px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="height: 114px;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div style="font-size: 70px;"><i  class="glyphicon glyphicon-file"></i></div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $_smarty_tpl->tpl_vars['filenum']->value;?>
</div>
                                    <div>我的文件</div>
                                </div>
                            </div>
                        </div>
                        <a href="userFiles.php">
                            <div class="panel-footer" style="color:#428bca  ">
                                <span class="pull-left" herf="userFiles.php">查看详情</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6" >
                    <div class="panel panel-green">
                        <div class="panel-heading" style="height: 114px;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div style="font-size: 70px;"><i  class="glyphicon glyphicon-cloud"></i></div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $_smarty_tpl->tpl_vars['sharenum']->value;?>
</div>
                                    <div>我的分享</div>
                                </div>
                            </div>
                        </div>
                        <a href="userFiles.php">
                            <div class="panel-footer" style="color: #5cb85c;">
                                <span class="pull-left" herf="userShares.php">查看详情</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               <div class="col-lg-5 col-md-11" >
                  <div class="panel panel-default">
  <div class="panel-body">
    <div class="info-left"><img src="https://secure.gravatar.com/avatar/<?php echo $_smarty_tpl->tpl_vars['mailhash']->value;?>
?s=69&r=g" alt="..." class="img-circle">
  </div>
  <div class="info-right">
    <div ><strong>注册邮箱：</strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
<br>
        <strong>UID：</strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['uid'];?>
  <br><strong>注册日期：</strong><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['regtime'];?>
<br><strong>用户组：</strong><?php echo $_smarty_tpl->tpl_vars['gname']->value;?>
<br>
    </div>
  </div>
  </div>
  <div class="panel-footer" align="right">用户信息</div>
</div>
                </div>
            </div>

                </div>
              </div>
</div>
              </div><!--con -->
  <br>  <br>  <br>  <br>  <br>
  <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('jscode'=>$_smarty_tpl->tpl_vars['jscode']->value,'tit'=>$_smarty_tpl->tpl_vars['tit']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value), 0);?>

  <script language="JavaScript">  
 
</script>  
 </body>
</html><?php }} ?>
