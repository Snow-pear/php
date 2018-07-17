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
}else {
	//第一次进入，默认从最开始取数  
	$offset=0;
}
$rs=mysqli_query($link,"select * from stuinfo limit $offset,$rows_of_page");
echo "<table border=1>";
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
<a href='list_page_1.php?action=top&offset=$offset'>首页</a>
<a href='list_page_1.php?action=pre&offset=$offset'>前一页</a>
|
<a href='list_page_1.php?action=next&offset=$offset'>后一页</a>
";
echo "</td>";
echo "</tr>";
echo "</table>";

?>
