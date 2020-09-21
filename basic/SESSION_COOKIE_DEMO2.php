<?php
session_start();
//echo $_SESSION['id'];


?>


<!doctype html>
<?php

if(isset($_COOKIE['user']) && isset($_SESSION['id']) )
{
	echo $_COOKIE['user'];
	echo "<br>". $_SESSION['id'];
}
else
{
	header('Location:SESSION_COOKIE_DEMO.php');
}
?><html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form  method="post">
<input type="submit" name="unset" value="Unset">
</form>

</body>
</html><br>
<?php 
if(isset($_POST['unset']))
{
	
	unset($_SESSION['id']);
	setcookie('user','password',time() - 3600);
	echo"unset successfull";
}
?>