<?php

error_reporting(0);//设置错误级别0

require_once("../config.php");//引入配置文件
require_once('../includes/function.php');//引入函数库
require_once("../includes/connect.php");
require_once("../includes/usercheck.php");
$title="管理员修改Passwrod";
require_once("common/head.php");

$result = mysqli_query($con,"SELECT * FROM sd_setting");//获取数据
while($row = mysqli_fetch_assoc($result))
  { 
$tit= $row['main_tit'];
$tit1= $row['tit_2'];
$theme= $row['theme'];
$des= $row['desword'];
$kw= $row['keyword'];
$notice= $row['notice'];
$tjcode= $row['tjcode'];
}
?>
<body>

      <link href="css/form.css" rel="stylesheet">
        <div id="page-wrapper">



            <!-- /.row -->
            <div class="table-responsive">
             <br>
             <table class="table table-striped table-bordered table-hover">
              <thead>
               <tr>
               <th> <input type="checkbox" onClick="selectAll(this);"  /></th>
                  <th>ID</th>
                   <th>用户名</th>
                  <th>操作</th>
                   </tr>
                 </thead>
               <tbody>
 <?php
$url=$_SERVER["REQUEST_URI"];
$url=parse_url($url);
$url=$url[path];
$pagesize=$_GET['s'];
$suser=$_GET['search'];
$g=$_GET['g'];  
if(! (empty($suser))){
  if(strstr($suser,"@")){
    $others = "WHERE `username` = '$suser'";
  }else{
    $others = "WHERE `uid` = '$suser'";
  }
}
$numq=mysqli_query($con,"SELECT * FROM `sd_user` ".$others);
$num = mysqli_num_rows($numq);

if($_GET[page]){
$pageval=$_GET[page];
$page=($pageval-1)*$pagesize;
$page.=',';
}
if($num > $pagesize){
 if($pageval<=1)$pageval=1;
}
$line="SELECT * FROM `sd_user`  ".$others." ORDER BY `id` DESC limit $page $pagesize";
$pagenum=ceil($num/$pagesize);

 $query=mysqli_query($con,$line);
      while($row=mysqli_fetch_assoc($query)){
        $id=$row['id']; 
echo'<tr>
        <td><input type="checkbox"name="user"value="'.$id.'"  /></td>
  <td>'.$row["id"].'</td>

<td>'.$row["username"].'</td>
<td><button class="btn btn-info"onclick="edituser(\''.$id.'\',\''.$row["username"].'\');">编辑</button></td>
  </tr>';
      }
 ?>

                      </tbody></table>



        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

<div class="modal fade bs-example-modal-lg"id="edit"  tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">修改管理员账号和密码</h4>
      </div>
      <div class="modal-body">
      <form id="euser" class="form-horizontal">
      <div class="form-group">
        
         <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
    <div class="col-sm-10">
    <div id="eeuid"></div>
      <div style="display: none"><input type="text" class="form-control" id="euid"name="euid" /></div>
    </div>
    </div>
          <div class="form-group">
        
         <label for="inputEmail3" class="col-sm-2 control-label">管理员用户名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="eusername"name="eusername">
    </div>
    </div>
              <div class="form-group">
        
         <label for="inputEmail3" class="col-sm-2 control-label">设置密码</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="epwd"name="epwd" placeholder="留空表示不更改" />
    </div>
    </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" onClick="saveedit();">保存更改</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>

</html>
<script>
function saveedit(){
      $.post("../includes/guanliyuanAction.php",$("#euser").serialize()+"&action=edituser",
  function(data){
    var pe=data.split("|");
    if(pe[0]=="ok"){ 

      $('#edit').modal('toggle');
  iosOverlay({
    text: "修改成功",
    duration: 2e3,
    icon: "../content/themes/default/images/check.png"
  });
  window.location.reload();
    }else{ 
alert(pe[1]);


 };

});
}
function edituser(uid,username,usergroup,regtime){
$('#edit').modal('toggle');
$("#euid").val(uid);
$("#eeuid").html(uid+"(不可更改)");
$("#eusername").val(username);
$("#eregtime").val(regtime);
$("#egroup").val(usergroup);  
}
 function selectAll(checkbox) {
                $('input[type=checkbox]').prop('checked', $(checkbox).prop('checked'));
            }

function changeURLArg(url,arg,arg_val){ 
    var pattern=arg+'=([^&]*)'; 
    var replaceText=arg+'='+arg_val; 
    if(url.match(pattern)){ 
        var tmp='/('+ arg+'=)([^&]*)/gi'; 
        tmp=url.replace(eval(tmp),replaceText); 
        return tmp; 
    }else{ 
        if(url.match('[\?]')){ 
            return url+'&'+replaceText; 
        }else{ 
            return url+'?'+replaceText; 
        } 
    } 
    return url+'\n'+arg+'\n'+arg_val; 
} 
(function ($) {
                $.getUrlParam = function (name) {
                    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                    var r = window.location.search.substr(1).match(reg);
                    if (r != null) return unescape(r[2]); return null;
                }
 })(jQuery);
 var ugnow = $.getUrlParam('g');
  var p = $.getUrlParam('page');
   var s = $.getUrlParam('s');
   var f = $.getUrlParam('f');
if(ugnow == null){
$("#ug ").val("all");  
}else{
$("#ug ").val(ugnow);  
}
$("#ug").change(function(){
var ugnew = $("#ug").val();
var urlnew = changeURLArg('user.php?page=1'+"&s="+s+"&g=1",'g',ugnew);
window.location.href=urlnew; 
});
function pagesize(){
  var snew=$("#ps").val();
  if(ugnow == null){
    ugnow = "all";
  }
  var urlnew1 = changeURLArg("user.php?page=1&s=10"+"&g="+ugnow,'s',snew);
window.location.href=urlnew1; 
}
function deluser(uid){

  $.post("../includes/adminAction.php",{uid: uid,action: "deluser"},
  function(data){
    var pe=data.split(".");
    if(pe[0]=="ok"){ 
alert(pe[1]);
window.location.reload();
    }else{ 
alert(pe[1]);


 };

});
}

  function delall(){
     var chk_value =[];//定义一个数组    
            $('input[name="user"]:checked').each(function(){  
            chk_value.push($(this).val());   
            });
            $("#s").attr("disabled","true");
            for(key1 in chk_value){ 
                $.post("../includes/adminAction.php",{uid: chk_value[key1],action:"deluser"},
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
function adduser(){
    $.post("../includes/adminAction.php",$("#adduser").serialize()+"&action=adduser",
  function(data){
    var pe=data.split(".");
    if(pe[0]=="ok"){ 
      $('#adduser')[0].reset();  
  iosOverlay({
    text: "添加成功",
    duration: 2e3,
    icon: "../content/themes/default/images/check.png"
  });
    }else{ 
alert(pe[1]);


 };

});
}
$("#s-go").click(function(){
    var suser = $("#suser").val();
    var uslnew = "user.php?s="+s+"&search="+suser;
window.location.href=uslnew; 
})

</script>