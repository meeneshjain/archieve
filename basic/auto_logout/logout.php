<?php include 'config.php';
if(isset($_GET['timeout']) && $_GET['timeout']!=""){
	unset($_SESSION['started']);
	echo('session destroyed');
	header('Location:login.php');
}
?>