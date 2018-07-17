<meta charset="utf-8">
<?php
require_once("db_config.php");
session_start();
if(isset($_SESSION['session_name']) and $_SESSION['session_name']!="")
{
	echo "欢迎 ".$_SESSION['session_name']."<br>";   
}
else {
	echo " 没有权限 请";
	echo "<a href='user_login.php'>登录</a>";
}

?>