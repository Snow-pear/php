<meta charset="utf-8">
<?php
//经典代码片段
	$name="";
	$age="";
	$check_boy="";
	$check_girl="";
	$check_asp="";
	$check_jsp="";
	$check_php="";
	$check_bj="";
	$check_cd="";
	$check_cq="";
if(isset($_POST["name"])){
	$name=$_POST["name"];
	$age=$_POST["age"];
	echo "保存成功<br>";
	//echo $_POST["gender"];
	//判断是否提交了性别
	if(isset($_POST["gender"])){
		//如果是男
		if($_POST["gender"]=="01"){
			$check_boy="checked";
			$check_girl="";
		}else {
			//如果是女
			$check_boy="";
			$check_girl="checked";
		}
	}
	if(isset($_POST["love"])){
		foreach ($_POST["love"] as $key=>$value){
			if ($value=="asp") {
				$check_asp="checked";
				//continue;
			}
			if ($value=="jsp") {
				$check_jsp="checked";
			}
			if ($value=="php") {
				$check_php="checked";
			}
			
		}
	}
	if (isset($_POST["hometown"])) {
		if ($_POST["hometown"]=="北京") {
			$check_bj="selected";
		}
		if ($_POST["hometown"]=="成都") {
			$check_cd="selected";
		}
		if ($_POST["hometown"]=="重庆") {
			$check_cq="selected";
		}
	}
	
	
}
?>
<form action="" method="POST">
姓名：<input type="text" id="name" name="name" value="<?php echo $name;?>" /><br>
年龄：<input type="text" id="age" name="age" value="<?php echo $age;?>" /><br>
性别：<input type="radio" id="boy" name="gender" value="01"<?php echo $check_boy;?> />男
<input type="radio" id="girl" name="gender" value="02"<?php echo $check_girl;?> />女<br>
爱好：<input type="checkbox" id="asp" name="love[]" value="asp"<?php echo $check_asp;?>>ASP
爱好：<input type="checkbox" id="jsp" name="love[]" value="asp"<?php echo $check_jsp;?>>JSP
爱好：<input type="checkbox" id="php" name="love[]" value="asp"<?php echo $check_php;?>>PHP<br>
家乡：<select id="hometown" name="hometown">
	 <option value="北京" <?php echo $check_bj;?>>北京</option>
	 <option value="成都" <?php echo $check_cd;?>>成都</option>
	 <option value="重庆" <?php echo $check_cq;?>>重庆</option>
</select><br>
<input type="submit" id="ok" name="ok" value="ok" />
</form>
<script type="text/javascript">
alert(parseInt(Math.random()*245))
</script>