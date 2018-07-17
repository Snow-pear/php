<meta charset="utf-8">
<?php
//isset($_SESSION['role'])
$resource="p2.php";
require_once("acl.php");
if(isset($_GET['role'])){
	if(isset($acl[$_GET['role']])){
		if(in_array($resource,$acl[$_GET['role']])){
			echo"欢迎您的光临".$_GET['role'];
		}else{
			echo "您的角色没有授权访问本资源";
		}
	}else{
		echo "您的角色没有定义";
	}
}else{
	echo "您无权限访问";
}
