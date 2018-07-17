<meta charset="utf-8">
<?php
require_once("db_config.php");
$rows_of_page=10;
$query_string="select count(*) as counter from stuinfo";
$rs=mysqli_query($link,$query_string);
$row=mysqli_fetch_assoc($rs);
$max_rows=$row['counter'];
if (isset($_GET['action'])) {
	if ($_GET['action']=='top') {
		$offset=0;
	}
	if ($_GET['action']=='pre') { 
		$offset=$_GET['offset']-$rows_of_page;
		if ($offset<0) {
			$offset=0;
		}
	}
	if ($_GET['action']=='next') {
		if (($_GET['offset']+$rows_of_page)>$max_rows) {
			$offset=$_GET['offset'];
		}else {
			$offset=$_GET['offset']+$rows_of_page;
		}
	}
	if ($_GET['action']=='bottom') {
		//假设有40条记录，每页显示10条,末页偏移量30 $max-rows-$rows_of_page
		//40 12  0 12 24 36 $max_rows-($max_rows%$rows_of_page)
		if ($max_rows%$rows_of_page==0) {
			$offset=$max-rows-$rows_of_page;
		} else {
			$offset=$max_rows-($max_rows%$rows_of_page);
		}
	}
}else {
	//第一次进入，默认从最开始取数  
	$offset=0;
}
$where_string="";
if (isset($_POST['ok'])) {
	$name=$_POST['name'];
	$score=$_POST['score'];
	// where name='$name'
	if ($_POST['name']!="") {
		$where_string=" name='$name' ";
	}
	if ($_POST['score']!="") {
		if ($where_string!="") {
			$where_string=$where_string." and score='$score'";
		} else {
			$where_string=" score='$score'";
		}
	}
	if ($where_string!='') {
			$where_string=" where".$where_string;
		}
}

$query_string="select * from stuinfo $where_string limit $offset,$rows_of_page";
echo $query_string;
$rs=mysqli_query($link,$query_string);
echo "<table border=1>";
?>
<tr><td colspan="3">
<form action="" method="POST"> 
姓名：<input type="text" id="name" name="name" value="" />
成绩：<input type="text" id="score" name="score" value="" />
<input type="submit" id="ok" name="ok" value="查询" >
</form>
</td></tr>
<?php
echo "<tr><td>学号</td><td>姓名</td><td>成绩</td><td>操作</td></tr>";
while ($row=mysqli_fetch_assoc($rs)){
	echo  "<tr>";
	echo "<td>".$row["id"]."</td>" ;   //点号连接字符串
	echo "<td>".$row["name"]."</td>" ;   
	echo "<td>".$row["score"]."</td>" ;   
	echo "<td>编辑|删除</td>" ;   
	echo  "</tr>"; //ctrl+d 向下复制一行	
}
echo "<tr>";
echo "<td colspan=3>"; //colspan=3跨三列
echo "
<a href='list_page_2.php?action=top&offset=$offset'>首页</a>
<a href='list_page_2.php?action=pre&offset=$offset'>前一页</a>
|
<a href='list_page_2.php?action=next&offset=$offset'>后一页</a>
<a href='list_page_2.php?action=bottom&offset=$offset'>末页</a>
";
echo "</td>";
echo "</tr>";
echo "</table>";

?>
