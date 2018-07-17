<?php
$link=mysqli_connect("localhost","root","","test");
echo mysqli_error($link);
mysqli_query($link,"set names utf8");
mysqli_query($link,"use student");
echo mysqli_error($link); 
