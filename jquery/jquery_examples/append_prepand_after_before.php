<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
div
{
		background:#444444;
		padding:10px;
		border:1px dashed white;
}
a
{
	text-decoration:none;
	color:White;
	padding:5px;
	border-right:1px thick #FFF;

}
body
{
	background:#F6F4F0;
}
.last
{
	border-right:none !important;
}
</style>
<script src="jquery-2.0.3.js" ></script>
<script>
	$(document).ready(function(){
		$("#btn").click(function(){
				$("#para").append("<span><strong> Meenesh Jain </strong></span>");
				
			});		
	});
	
	$(document).ready(function(){
		$("#btn2").click(function(){
			$("#ol1").append("<li>Hello</li>");
			});
		$("#btn3").click(function(){
			$("#ol1").prepend("<li>heelo</li>");
			});
		
		$("#btn4").click(function(){
			$("#para2").before("bla bla bla");
			});

		$("#btn5").click(function(){
			$("#para2").after("lalal lala lala");
			});
		});

</script>
</head>

<body>
<p>click to append accordingly</p>
<div>


<a href="#" id="btn">Append Paragraph </a>

<a href="#"  id="btn2">Append list </a> 
<a class="last" href="#"  id="btn3">Prepand list </a>
<a href="#" id="btn4">before </a>
<a href="#" id="btn5">After </a>
</div>
<p id="para">Hello </p>


<ol id="ol1">
<li>Oye</li>

</ol>
<hr>
<p id="para2">After</p>

<hr>
<p id="para3">Before</p>

</body>
</html>