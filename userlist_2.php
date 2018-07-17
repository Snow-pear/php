<meta charset="utf-8">
<?php
//会话操作 session可以在整个服务器中都有效，限制访问权限
require_once("db_config.php");
session_start();
if (isset($_SESSION['user'])and$_SESSION['user']!="")
{
	echo "欢迎归来：".$_SESSION['user'];
	echo "<br>显示重要客户列表";
	echo "<br>";
}else {
	echo"您无权访问本页面，请登录";
	echo"<br><a href='login_1.php'>登录</a>";
}
$query_string="select * from user_1";
$rs=mysqli_query($link,$query_string);
while($row=mysqli_fetch_assoc($rs)){
	echo $row['name'];
	echo $row['password'];
	echo "<br>";
}
echo "重要客户列表";
?>
