<?php
require_once("db_config.php");
mysqli_query($link,"drop database student");
mysqli_query($link,"create database student");
mysqli_query($link,"use student");
mysqli_query($link,"create table stuinfo(id char(50),name char(50),score int)engine=MYISAM default charset=utf8");

mysqli_query($link,"create table user_1(name char(20),password char(40)) engine=MYISAM default charset=utf8");
mysqli_query($link,"insert into user_1(name,password)value('mike','1')");
mysqli_query($link,"insert into user_1(name,password)value('tom','2')");

mysqli_query($link,"insert into stuinfo(id,name,score)values('001','mike','78')");
mysqli_query($link,"insert into stuinfo(id,name,score)values('002','tom','88')");
echo mysqli_error($link);
for($i=1;$i<=40;$i++){
	$id=$i;
	$name="name_".$i;
	$score=$i+50;
	mysqli_query($link,"insert into stuinfo(id,name,score)values('$id','$name','$score')");
}
