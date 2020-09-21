<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
div
{
	color:white;
	background:#00C;
	width:400px;
	padding:5px;

	
	
}
#d2
{
	background-color:green;
	height:400px;
	padding:5px;
}
</style>
<title>Untitled Document</title>
<script src="jquery-2.0.3.js">
</script>
<script> 
$(document).ready(function(){
  $("#d1").click(function(){
    $("#d2").slideToggle("slow");
	
  });
});

$(document).ready(function() {
		$("#bt").click(function(){
 		 $("div").stop();
		}); 
});
</script>
</head>

<body>
<button id="bt">Animate</button><br>

<div id="d1">Click on this </div>
<div id="d2" style="display:none">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>

</body>
</html>