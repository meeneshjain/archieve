<?php
session_start();
$name=$_SESSION['id']="admin";



?>

<?php 
setcookie("user","password",time() + 3600);

//header('Location:SESSION_COOKIE_DEMO2.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<a href="SESSION_COOKIE_DEMO2.php" > go to link</a>
</head>

<body>

</body>
</html>