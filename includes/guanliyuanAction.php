<?php
error_reporting(0);//设置错误级别0
$action = $_POST['action'];
require_once("../config.php");//引入配置文件
require_once('function.php');//引入函数库
require_once('connect.php');
require_once("usercheck.php");
switch ($action) {
	case 'edituser':
 		$passWord = $_POST['epwd'];
 		$userName = $_POST['eusername'];
 		$userId = $_POST['euid'];
 		$userName = str_replace(" ", "", $userName);
	    $passWord = str_replace(" ", "", $passWord);
	    $pattern = " ";
	    if(empty($passWord)){
			$sql = "UPDATE `sd_user` SET `username` = '$userName'  WHERE `id` = '$userId'";
		}else{
			$passWord=md5($passWord."sdshare");
			$sql = "UPDATE `sd_user` SET `username` = '$userName',`pwd` = '$passWord' WHERE `id` = '$userId'";
			
		}

		if (mysqli_query($con,$sql)){
		  echo "ok|ok";
		  }else{
		  echo "bad|" ."无法修改数据表";
		  }
 		break;
	default:
		# code...
		break;
}
?>
