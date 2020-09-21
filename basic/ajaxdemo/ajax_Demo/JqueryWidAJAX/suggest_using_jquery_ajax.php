<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>
<script src="jquery_2.0.3.js"></script>
<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">-->
  <link rel="stylesheet" href="/resources/demos/style.css">
<script>
	$(document).ready(function(){
			
		$("#box").keyup(function(){
			var input = $("#box").val();
			if(input=="")
			{
				$("#para").text("");
				return false;
			}
			$.ajax({
			type:'POST',
			async:true,
			url:"suggestion.php?str="+input,
		//	data:input,
			success:function(result){
			$("#para").text(result);
			}});
		});
	});

</script>
<body>
	
</body>
<div class="ui-widget">
Type to get suggestion - <input type="text" list="browsers"  name="suggest" id="box">
<datalist id="browsers">
  
</datalist>
</div>
<p id="para"></p>
</html>
