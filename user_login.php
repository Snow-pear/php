<meta charset="utf-8">
<?php
session_start();
require_once("db_config_1.php");
if(isset($_POST['ok'])){
	$name=$_POST['name'];
	$password=md5($_POST['password']);
	$query_string="select count(*) as counter from user_1 where name='$name' and password='$password'";
	$rs=mysqli_query($link,$query_string);
	$row=mysqli_fetch_assoc($rs);
	if($row['counter']==1){
		//注册session
		$_SESSION['user']=$name;
		header("location:user_info.php");
	}else {
		unset($_SESSION['user']);
		echo "用户名或密码不正确";
	}
}
?>
<form id="form_1" method="POST" action="">
姓名：<input type="text" id="user_name" name="user_name" value=""/><br>
密码：<input type="password" id="password" name="password" value=""/><br>
<input type="button" id="ok" name="ok" value="ok"/>
</form>