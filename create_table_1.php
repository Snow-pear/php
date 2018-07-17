<?php
require_once("db_config_1.php");
mysqli_query($link,"create table user_170(user_name char(50),address char(50),password char(50))ENGINE=MyISAM DEFAULT CHARSET=utf8");
echo mysqli_error($link);
mysqli_query($link,"insert into user_170(user_name,address,password)values('mike','shanghai','c4ca4238a0b923820dcc509a6f75849b')");
echo mysqli_error($link);
mysqli_query($link,"insert into user_170(user_name,address,password)values('rose','beijing','c4ca4238a0b923820dcc509a6f75849b')");