<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Drag drop and remove</title>
<style>
#division_1,para3
{
	width:500px;
	height:500px;
	border:1px dashed red;
}
ul
{
	display:inline;
	list-style:none;
	
}
ul li 
{
	float:left;
	padding:5px;
	
}
</style>
<script src="jquery-2.0.3.js"> </script>
    <script src="jquery_ui_10_3_0.js"></script>
<script>
$(document).ready(function() {
  $("#btn_drag").click(function(){
	    $("#list_1 li").draggable({disabled:false}).css({"background":"#FFA6A6","border":"3px dashed gray "});
		 $("#para2").html("<h2>Drop in here</h2>");
			  $("#division_1").css({"border":"2px dashed gray","display":"block"});
	  });
	  $("#division_1").droppable({
		  drop:function(event , ui ){
			$("#removed_list").append("<li>"+ ui.draggable.text()+"</li>");
			$(ui.draggable).draggable({disabled:true});
			
		  }
		  });
		  $("#remove").click(function(){
			  $("#removed_list").hide();
			  });
		  
		  
		 
  
  		$("#btn_save").click(function(){
			$("#list_1 li").css({"background":"white","border":"none"});
		$("#list_1 li").unbind("click");
		$("#list_1 li").draggable({disabled : true});
		 $("#division_1").css({"border":"1px dashed red","display":"none"});
		  $("#para2").text("");
			});
		
});
</script>
</head>

<body>

<ul id="list_1">
<li>Hello  </li>
<li>Hello  </li>
<li>Hello  </li>
<li>Hello  </li>
<li>Hello  </li>
<li>Hello  </li>
<li>Hello  </li>
<li>Hello  </li>
</ul>
<button id="btn_drag">button click me </button>
<button id="btn_save">save </button>
<br>
<br>
<br> 
<div id="division_1" style="display:none">
<p id="para3">
<ul id="removed_list"></ul>
<p id="para1"> Remove the files by drag and drop </p>
<p id="para2" align="center"></p>
<button name="remove" id="remove">Remove</button>
</p>
</div>
</body>
</html>