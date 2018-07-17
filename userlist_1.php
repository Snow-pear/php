<meta charset="utf-8">
<?php
//会话操作 session可以在整个服务器中都有效，限制访问权限
session_start();
if (isset($_SESSION['user'])and$_SESSION['user']!="")
{
	echo "欢迎归来：".$_SESSION['user'];
	echo "<br>显示重要客户列表";
}else {
	echo"您无权访问本页面，请登录";
	echo"<br><a href='login_1.php'>登录</a>";
}
echo "重要客户列表";
?>
