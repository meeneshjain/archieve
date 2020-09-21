<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="jquery-2.0.3.js"></script>
<script>
$(document).ready(function(){
$("#div1").mouseenter(function(){
	$("#div1").animate({
		width:'100px',
		height:'100px',
		opacity:'1',
		left:'250px'
			
	
	});
	
	});    
});
$(document).ready(function(){
$("#div1").mouseout(function(){
	$("#div1").animate({
		width:'10px',
		height:'10px',
		opacity:'.5',
		left:'0px'
			
	
	});
	
	});    
});
</script>
<style>
div
{
	width:10px;
	height:10px;
	padding:5%;
	background:red;
	opacity:0.5;
	position:relative;
}
</style>
</head>

<body>
<div id="div1">
hello </div>
</body>
</html>