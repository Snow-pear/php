<?php
$link=mysqli_connect("localhost","user_20180618_58120","QnO4dRQXhrTY1H6","exam_20180618_58120");
echo mysqli_error($link);
mysqli_query($link,"set names utf8");
mysqli_query($link,"use exam_20180618_58120");
echo mysqli_error($link); 
?>