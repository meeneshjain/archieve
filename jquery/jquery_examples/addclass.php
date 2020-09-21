<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.division
{
	width:100px;
	height:100px;
	color:red;
	background:green;
	float:left;
	margin-right:15px;
}
</style>
<script src="jquery-2.0.3.js">

</script>
<script>
$(document).ready(function(){
	$('#btn').click(function(){
	
		$('div').addClass("division"); 
		});
	});
	</script>
</head>

<body>
<button id="btn" >Click me</button>
<div class="division"></div>
<div id="div1"></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</body>
</html>