<meta charset="utf-8">
<body>
//服务器端代码
<?php
//经典代码，防止出现提示、警告
if(isset($_POST['ok'])){
	//var_dump($_POST);  //输出中间调试信息
	var_dump($_FILES);//上传小文件
	//得到文件名称
	$file_name=$_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	//从临时文件移到指定文件，默认放在www文件夹中
	if(move_uploaded_file($tmp_name,$file_name)!=false){
		echo "文件上传成功";
	}else{
		echo "文件上传失败";
	}
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" id="myfile" name="myfile" value="" /><br>
<input type="submit" id="ok" name="ok" value="ok" />
</form>
</body>