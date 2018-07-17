<meta charset="utf-8">
<?php
if (isset($_POST['ok'])) {
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	//bmi=体重/身高的^2
	$bmi=$weight/($height*$height);
	echo "BMI:round($bmi,2)";
}
?>
<form action="" method="POST">
身高：<input type="text" id="height" name="height" value=""/><br/>
体重：<input type="text" id="weight" name="weight" value=""/><br/>
<input type="submit" id="ok" name="ok" value="ok"/>
</form>

