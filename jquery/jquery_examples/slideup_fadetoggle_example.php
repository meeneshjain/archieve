<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>
<script src="jquery-2.0.3.js"></script>
<script>
$(document).ready(function(){
		$("#bt").click(function(){
		//	$("#id1").toggle("slow");
		$("#id1").fadeToggle("slow");
		$("#id1").slideUp("slow");
			$("#id2").fadeToggle("slow");
		$("#id3").fadeToggle(3000);
		});
	

		
	});
	

</script>

<style>

div
{
	width:200px;
	height:200px;
	background:red;
	color:white;
	
	
}

#id2
{
		background:blue;
}
#id3
{
		background:green;
}

</style>

</head>

<body>
<button name="but" id="bt">Click ME </button>
<br>
<br>

<div id="id1">Hello</div><br>

<div id="id2">Hello</div><br>

<div id="id3">Hello</div>

</body>
</html>