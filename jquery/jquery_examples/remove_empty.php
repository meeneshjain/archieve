<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
body
{
	background:#F6F4F0;
}
</style>
<script src="jquery-2.0.3.js"></script>
<script>

$(document).ready(function(){
	$("#para1").click(function(){
		$("p").remove("#para1");
		});
		$("#para2").click(function(){
		$("p").remove("#para2");
		});
	});

</script>
</head>

<body>
<p id="para1">fadsfasfsafa <em>Hesgfdsfadfadsfasf</em></p>
<p id="para2">asfasfsafasfaf <strong>asfdasfafsafsa</strong></p>
</body>
</html>