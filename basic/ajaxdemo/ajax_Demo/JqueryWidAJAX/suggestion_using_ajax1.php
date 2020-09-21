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
<script>
	$(document).ready(function(){
			
		$("#box").keyup(function(){
			var input = $("#box").val();
			$.ajax({
			type:'POST',
			async:true,
			url:"suggestion.php?str="+input,
			data:input,
			success:function(result){
				$("#para").text(result);
			}});
		});
	});

</script>
<body>
	
</body>
Type to get suggestion - <input type="text" name="suggest" id="box">
Suggestion <p id="para"></p>
</html>
