<meta charset="utf-8">
<form id="form_1">
<input type="text" id="name" name="name" value=""/>
<input type="button" id="b_1" name="ok" value="提交" onclick="ajaxSave()"/><br>
<div id="div_1"></div>

</form>
<script src="/public_libs/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function ajaxSave(){
	$.ajax(
	{
		url:"/public_libs/server_ajax_post_1.php",
		success:function(result){
                $("#div_1").html(result);
                },
		type:"POST",
		data:{
			name:$("#name").val()			
		}
	}
	)
}
</script>
