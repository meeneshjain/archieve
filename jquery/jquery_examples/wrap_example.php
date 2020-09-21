<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="jquery-2.0.3.js"></script>
<script>
$(document).ready(function(){
	$("#btn").click(function(){
		
		$("#para").wrap("<textarea>"+$('#para').text()+"</textarea>");
		
		});
		
		$("#btn2").click(function(){
			$("#para").unwrap();
			
			});
	
	});

</script>
</head>

<body>

<p id="para">this is a paragraph to be wrapped</p>
<br>

<button name="btn" id="btn">Wrap</button>
<button name="btn2" id="btn2">unwrap</button>



</body>
</html>