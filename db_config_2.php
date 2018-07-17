<meta charset="utf-8" />
<?php
	$link = mysqli_connect("localhost","root","","test");
	mysqli_query($link,"set names utf8");
	mysqli_query($link,"use student");	
?>