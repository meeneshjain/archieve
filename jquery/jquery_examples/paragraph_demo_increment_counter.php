<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="jquery-2.0.3.js"></script>
<script>
$(document).ready(function(){
	$("#btn").click(function(){
		var $vars= $("#para1").text();
		$count=Number($vars);
	//$count=$vars;
		$count+=1;
		$("#para1").text($count);
		$count+=1000;
		$("#para2").css({"color":"#F8"+$count});
		$()
		});
	});
	
	
</script>
</head>

<body>
<p id="para1">1 </p>
<p id="para2">color me </p>
<button id="btn"> Click Me</button> 

</body>
</html>