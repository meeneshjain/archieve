<?php include 'config.php';
if(empty($_SESSION['started']) && $_SESSION['started']==""){
	header('Location:login.php');
	die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main Page </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script>
	var timer = 0;
		$(document).ready(function() {
			set_interval();
			
			$("html,body").on("click keypress scroll mousemove",function(){
				console.log("in here= "+ timer);
				reset_interval();
			});
		});
		
		function set_interval() {
			timer = setInterval("auto_logout()", 60000);
		}
		
		function auto_logout() {
		  window.location = "logout.php?timeout=1";
		}

		function reset_interval() {
			if (timer != 0) {
				clearInterval(timer);
				timer = 0;
				set_interval();
			}
		}
</script>
</head>
<body >
	testing timeout and logout 
</body>
</html>