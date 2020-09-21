<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<script src="jquery_2.0.3.js"></script>
	<script> 
	$(document).ready(function(){
		$('#btn').click(function(){
			$("#div").load("ajax_database_demo.php div",function(responseTxt,statusTxt,xhr){
			if(statusTxt=="success")
			{
				$("#para").text("successfully loaded content");
			}
			else
			{
				$("#para").html("<b>Error</b> : "+xhr.status+" - "+ xhr.statusTxt );
			}
			
				
			});
		});
	});
	
	
	</script>
</head>

<body>
	<div id="div">
	
	</div>
	<p id="para">hi</p>
	<button name='btn' id='btn'>Click Me</button>
	
</body>

</html>
