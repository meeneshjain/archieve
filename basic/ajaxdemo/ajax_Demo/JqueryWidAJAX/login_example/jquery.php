<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	</script>
	
	<script>
	$(document).ready(function(){
		$(".enable").click(function(event){
			event.preventDefault();
			
			var link_1= $(this).attr("href");
			var split_value=link_1.split(" ");
			var sub_split=split_value[0].split("/");
			var split2=sub_split[1].split("&");
			var split3=split2[0].split("=");
			var split4=split2[1].split("=");
			$("#para").text(split3[0] + " = "+ split3[1]);
			$("#para2").text(split4[0] + " = "+ split4[1]);
		});
	});
	</script>
</head>

<body>
	<a href="www.meeneshjain.com/status='12'&action='hello'" class="enable" > Click Me</a>
	
	<p id="para">value comes here </p>
	<p id="para2">value comes here </p>
</body>

</html>
