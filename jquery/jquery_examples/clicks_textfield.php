<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>example 7 </title>
<script src="jquery-2.0.3.js"></script>
<script>
$(document).ready(function() {
	$("#btn").click(function(){
	
	var $ids=$("#text1").val();
	if($ids=="" || $ids==null)
	{
		$("#para").text("field is empty");
		return false;
	}
		if(isNaN($ids))
		{
			$("#para").text("The value is fine");
		}
		else
		{
				$("#para").text("Number not allowed");		
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