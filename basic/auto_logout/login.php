<?php include 'config.php';
if(isset($_SESSION['started']) && $_SESSION['started']!=""){
	header('Location:index.php');
	die;
}

if(isset($_GET['btn']) && $_GET['btn']!=""){
		$_SESSION['started'] =1;
		header('Location:index.php');
		die;
}
 ?>
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login Page</title>
 </head>
 <body>
 	<form action="">
 		<button name="btn" value="btn">Start My Session</button>
 	</form>
 </body>
 </html>