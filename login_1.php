<meta charset="utf-8">
<?php
session_start();
if(isset($_POST['ok'])){
	$name=$_POST['name'];
	$password=$_POST['password'];
	if($name=="马云" and $password=="250"){
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