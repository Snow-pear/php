<meta charset="utf-8">
<form id="form_1">
<input type="text" id="name" name="name" value=""/>
<input type="button" id="b_1" name="ok" value="提交" onclick="ajaxSave()"/><br>
<div id="div_result"></div>

</form>
<script src="/public_libs/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function ajaxSave(){
	$.ajax(
	{
		url:"server_ajax_check_name_1.php",
		success:function(result){
                $("#div_1").html(result);
                },
		type:"GET",
		data:{
			name:$("#name").val()			
		}
	}
	)
	if(document.getElementById("name").value=null){
		return "姓名不能为空";
	}
	return "欢迎XXX";
}
</script>
