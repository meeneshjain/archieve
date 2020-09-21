<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accordin Example</title>
<style>
#accordin_division
{
	width:300px;
	height:200px;
	background:#DDD;
	color:black;
	//display:inline;
	float:left;
}
h3
{
	background:#999;
}
.inner_section
{
	
	background:#DDD;
	float:left;
	height:100px;
}
</style>
<script src="jquery-2.0.3.js"> </script>
<script src="jquery_ui_10_3_0.js"></script>
<script>
$(document).ready(function(){
	
	$("#accordin_division").accordion({
		collapsible:false
		});
		
		
	$("#btn_add").click(function(){
		
		$("#accordin_division").append("<h3>section  </h3><div class='inner_section' ><label>Name : </label><input type='text' id='name_menu_item'><label>link : </label><input type='text' id='name_menu_item_link'><button id='btn_menu_save'>Save  </button>	</div>").accordion('destroy').accordion({collapsible:true});
		});
	});

</script>
</head>

<body>

<div id="accordin_division">
<h3>section 1 </h3>
<div class="inner_section">
<label>Name : </label><input type="text" id="name_menu_item">
<label>link : </label><input type="text" id="name_menu_item_link">
<button id="btn_menu_save">Save  </button>
</div>


</div>
<button id="btn_add">add Menu </button>
<button id="btn_save">Save Menu </button>
</body>
</html>