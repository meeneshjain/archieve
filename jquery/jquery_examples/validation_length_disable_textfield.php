<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>example 7 </title>
<script src="jquery-2.0.3.js"></script>
<script>
$(document).ready(function() {
	$("input").keyup(function(){
	
	var $ids=$(this).val();

		
		if(isNaN($ids))
		{
		
				if($ids.length<=8)
				{
					var $rs=$ids.length;
					$("#para").text("string to short  "+$rs);
					$("#para").text("The value is fine");
					$(this).css({"border-color":"blue","border-radius":"0"});
					$("#text2").removeAttr("disabled");	
						
				}
		}
		else
		{
				$("#para").text("Number not allowed");
				$(this).css({"border-color":"#F00"});
				$("#text2").attr("disabled","disabled")		
		}
		
	});    
});

</script>
</head>

<body>
<button id="btn">Buttons</button>
<br>

<input type="text" id="text1"> 
<input type="text" id="text2" disabled> 
<div id="d1" >Hello world</div>
<br>
<br>

<p id="para"></p>
</body>
</html>