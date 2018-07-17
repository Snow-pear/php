<meta charset="utf-8">
<?php
session_start();
require_once("db_config.php");
if(isset($_POST['ok'])){
	$name=$_POST['name'];
	$password=$_POST['password'];
	$query_string="select count(*) as counter from user_1 where name='$name' and password='$password'";
	$rs=mysqli_query($link,$query_string);
	$row=mysqli_fetch_assoc($rs);
	if($row['counter']==1){
		//注册session
		$_SESSION['user']=$name;
		header("location:userlist_1.php");
	}else {
		unset($_SESSION['user']);
		echo "用户名或密码不正确";
	}
}
?>
<form method="POST" action="">
姓名：<input type="text" id="name" name="name" value=""/><br>
密码：<input type="password" id="password" name="password" value=""/><br>
<input type="submit" id="ok" name="ok" value="ok"/>
</form>