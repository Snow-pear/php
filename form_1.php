<meta charset="utf-8">
<?php
//经典代码片段
if(isset($_POST["name"])){
	$name=$_POST["name"];
	$age=$_POST["age"];
	echo "保存成功<br>";
}else {
	$name="";
	$age="";
}
?>
<form action="" method="POST">
姓名：<input type="text" id="name" name="name" value="<?php echo $name;?>" /><br>
年龄：<input type="text" id="age" name="age" value="<?php echo $age;?>" /><br>
<input type="submit" id="ok" name="ok" value="ok" /><br>
</form>