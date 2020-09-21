<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jquery Example 1 </title>
<style>
a
{
	background:red;
	padding:50px;
	color:white;
	
}
</style>
<script src="jquery-2.0.3.js"></script>
<script>
$(document).ready(function(){
	
	$("p").click(function(){
		$("#para").hide();
		$(".meenesh").hide();	
		});
});
	$(document).ready(function(){
       
$("button").click(function(){
	$("#para2").hide();
	
	});	 
    });
	$(document).ready(function(){
	$("span:first").click(function(){
		$("span:first").hide();
		
		});
		});
		
		
$(document).ready(function() {
	$("div").dblclick(function(){
		$("div").hide();
		});
		
		$("div").mouseenter(function(){
			alert("you enentered hiiii");
			});
			
				
			
	
	  
});

$(document).ready(function(){
	$("a").click(function(){
	$("a").hide("slow");
		$("a").fadeout();
		
		//$("a").toggle("fast");
				
		});		
	
	$("#btns").click(function(){
		$("a").show("slow");
		$("a").fadeout();
			$("a:first").toggle("fast");
		});
	
	
	});
	

</script>
</head>

<body>
<span>gg</span>
<span>asdsad</span>

<div><h2>Hiii</h2></div>
<p id="para">content </p>
<p class="meenesh">  are hidden</p>
<p id="para2">hello </p>
<button name="btn">Click me </button>
<br><br><br><br><br><br>
<br>


<a >Hey</a>
<br><br><br><br><br><br>
<br>
<br><br><br><br><br><br>
<br>


<a >Hey</a>
<br><br><br><br><br><br>
<br>
<button id="btns" name="btn">Click me </button>

</body>
</html>