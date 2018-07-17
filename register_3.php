<meta charset="utf-8">
<?php
session_start();
require_once("db_config.php");
//当用户表中没有该用户的注册信息时，我们新增注册用户， 否则改密码
if(isset($_POST['ok'])){
	$name=$_POST['name'];
	$password=md5($_POST['password']);
	$query_string="select count(*) as counter from user_1 where name='$name'";
	$rs=mysqli_query($link,$query_string);
	$row=mysqli_fetch_assoc($rs);
	if($row['counter']==0){
		$query_string="insert into user_1(name,password)values('$name','$password')";
		echo "注册成功";
	}else {
		$query_string="update user_1 set password='$password' where name='$$name'";
		echo "密码修改成功";
	}
	mysqli_query($link,$query_string);
}
?>

新用户注册
<form method="POST" action="">
姓名：<input type="text" id="name" name="name" value=""/><br>
密码1：<input type="password" id="password" name="password" value=""/><br>
密码2：<input type="password" id="password" name="password" value=""/><br>
<input type="submit" id="ok" name="ok" value="ok"/>
</form>