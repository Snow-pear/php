<meta charset="utf-8" />
<?php
	require_once("db_config_2.php");	//读取连接数据库的配置文件
	mysqli_query($link,"drop database student");	//	删除之前的数据库
	mysqli_query($link,"create database student");
	mysqli_query($link,"use student");
	mysqli_query($link,"create table stuinfo(id char(50),name char(50),score int) engine = myisam default charset = utf8");
	mysqli_query($link,"create table user_1(name char(20),password char(40)) engine = myisam default charset = utf8");
	mysqli_query($link,"insert into user_1(name,password)values('mike','1')");
	mysqli_query($link,"insert into user_1(name,password)values('tom','2')");