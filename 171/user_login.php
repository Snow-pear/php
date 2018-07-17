<meta charset="utf-8">
<?php
require_once("db_config.php");
session_start();
if(isset($_POST['ok']))
{
	$name=$_POST['user_name'];
	$password=md5($_POST['password']);
	$query_string="select count(*) as counter from user_170 where user_name='$name' and password='$password'";
	$rs=mysqli_query($link,$query_string);
	$row=mysqli_fetch_assoc($rs);
	if($row['counter']!=0)
	{
		
		$_SESSION['session_name']=$name;
		$_SESSION['password']=$password;
		header("location:user_info.php");
	}
	else {
		echo "用户名或密码错误<br>";
	}
}

?>
用户登录<br>
<form action="" method="POST">
姓名:<input type="text" id="user_name" name="user_name" value="" /><br>
密码:<input type="password" id="password" name="password" value="" /><br>
     <input type="submit" id="ok" name="ok" value="ok" />
</form>