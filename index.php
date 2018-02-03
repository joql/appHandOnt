<?php

error_reporting(0);

function getTopDomainhuo()

{

    $host = $_SERVER['HTTP_HOST'];

    $host = strtolower($host);

    if (strpos($host, '/') !== false) {

        $parse = @parse_url($host);

        $host = $parse['host'];

    }

    $topleveldomaindb = array('com', 'edu', 'gov', 'int', 'mil', 'net', 'org', 'biz', 'info', 'pro', 'name', 'museum', 'coop', 'aero', 'xxx', 'idv', 'mobi', 'cc', 'me');

    $str = '';

    foreach ($topleveldomaindb as $v) {

        $str .= ($str ? '|' : '') . $v;

    }

    $matchstr = '[^\\.]+\\.(?:(' . $str . ')|\\w{2}|((' . $str . ')\\.\\w{2}))$';

    if (preg_match('/' . $matchstr . '/ies', $host, $matchs)) {

        $domain = $matchs['0'];

    } else {

        $domain = $host;

    }

    return $domain;

}

$domain = getTopDomainhuo();

$real_domain = 'baidu.com';

//本地检查时 用户的授权域名 和时间

$check_host = 'http://2015.v513.com/update.php?a=client_check&u=' . $domain;

$check_info = file_get_contents($check_host);

require_once("config.php");//基础配置文件
require_once('includes/function.php');//函数库
require_once('includes/smarty.inc.php');//smarty模板配置
require_once('includes/connect.php');
require_once('includes/userShell.php');
$result = mysqli_query($con,"SELECT * FROM sd_setting");//获取数据
while($row = mysqli_fetch_assoc($result)){ 
	$tit = $row['main_tit'];
	$tit1 = $row['tit_2'];
	$theme = $row['theme'];
	$notice = $row['notice'];
	$des = $row['desword'];
	$kw = $row['keyword'];
	$tjcode = $row['tjcode'];
	$zzurl = $row['zzurl'];
}
$userGroup = $userInfo['group'];
$results1 = mysqli_query($con,"SELECT * FROM sd_usergroup where id = $userGroup");
while($row1 = mysqli_fetch_assoc($results1)){ 
	$policyId = $row1['policyid'];
}
$results = mysqli_query($con,"SELECT * FROM sd_policy where id = $policyId");
while($row2 = mysqli_fetch_assoc($results)){ 
	$policyType = $row2['p_type'];
	$fileType = $row2['p_filetype'];
	$fileSize = ceil($row2['p_size']/(1024*1024));
	$autoName = $row2['p_autoname'];
	$nameRule = $row2['p_namerule'];
	$serverUrl = $row2['p_server'];
}
if($policyType!="qiniu"){
	$fileType = 'var min="'.$fileType.'"';
	$filePart = "0";
	if($policyType == "local"){
		$upServer = $zzurl."includes/fileReceive.php";
	}else if($policyType == "server"){
		$upServer = $serverUrl;
	}
}else{
	$fileType = 'var min="'.$fileType.'"';
	$upServer = "http://up.qiniu.com";
	$filePart = "4";
}
$smarty->template_dir = "content/themes/".$theme;
$head ='<script type="text/javascript" src="includes/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="includes/js/plupload/plupload.full.min.js"></script>
<script type="text/javascript" src="includes/js/plupload/i18n/zh_CN.js"></script>
<script type="text/javascript" src="includes/js/ui.js"></script>
<script type="text/javascript" src="includes/js/main.js"></script>
<script type="text/javascript" src="includes/js/qiniu.js"></script>
<meta name="description" content="'.$des.'" />
<meta name="keywords" content="'.$kw.'" />';

$jscode = $tjcode.'
<script type="text/javascript">
var autoname='.$autoName.';'.$fileType.'; var max='.$fileSize.'; var fp="'.$filePart.'"; var upserver ="'.$upServer.'"</script>';

$smarty->assign("isVisitor", $isVisitor); 
$smarty->assign("userinfo", $userInfo); 
$smarty->assign("des", $des);
$smarty->assign("kw", $kw);
$smarty->assign("notice", $notice);
$smarty->assign("tit", $tit."-".$tit1); 
$smarty->assign("head", $head); 
$smarty->assign("jscode", $jscode); 
$smarty->display("index.html");  

?>