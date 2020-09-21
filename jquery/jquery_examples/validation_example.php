<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>example 7 </title>
<script src="jquery-2.0.3.js"></script>
<script>
$(document).ready(function() {
	$("#text1").keyup(function(){
	
	var $ids=$("#text1").val();

		
		if(isNaN($ids))
		{
			$("#para").text("The value is fine");
			$("#text1").css({"border-color":"blue","border-radius":"0"});		
		}
		else
		{
				$("#para").text("Number not allowed");
				$("#text1").css({"border-color":"#F00"});		
		}
		if($ids.length<=8)
		{
			$("#para").text("string to short",$ids.length);			
		}
	});    
});

</script>
</head>

<body>
<button id="btn">Buttons</button>
<br>

<input type="text" id="text1"> 
<div id="d1" >Hello world</div>
<br>
<br>

<p id="para"></p>
</body>
</html>