<meta charset="utf-8">
<?php 
$link=mysqli_connect("localhost","root","","test");
mysqli_query($link,"drop database student");//向数据库服务器发送删除一个数据库命令
mysqli_query($link,"creat database student");//向数据库服务器发送创建一个数据库命令
echo  mysqli_error($link);
mysqli_query($link,"use student");//使用student数据库
mysqli_query($link,"creat table stuinfo(id char(50),name char (20),score int)");//创建表单
echo  mysqli_error($link);
mysqli_query($link,"insert into stuinfo(id,name,score)values('001','mike','89')");//插入数据
echo  mysqli_error($link);
mysqli_query($link,"insert into stuinfo(id,name,score)values('002','rose','89')");//插入数据
echo  mysqli_error($link);

$rs=mysqli_query($link,"delect * from stuinfo");//获取数据，while循环
while ($row=mysqli_fetch_array($rs)){
	echo $row['id'];
	echo $row['name'];
	echo $row['score'];
	echo "<br>";
}
?>