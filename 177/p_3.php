<meta charset="utf-8">
<?php
require_once("acl_list.php");
$resource="p_3.php";
if(isset($_GET['role'])){
	if(isset($acl_list[$_GET['role']])){
		if(in_array($resource,$acl_list[$_GET['role']])){
			echo "欢迎光临";
		}else{
			echo "无权访问";
		}
	}else{
		echo "无权访问";
	}
}else{
	echo "无权访问";
}