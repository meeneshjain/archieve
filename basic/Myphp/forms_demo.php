<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php forms value</title>
</head>

<body>

<form action="forms_demo.php" method="post">
First name <input type="text" name="fname" value=""/>
<br />
last name <input type="text" name="lname" />
<input type="submit">
</form>



<?php
//echo "welcome is your name " . $_POST["fname"] . "<br>"; 
//echo "and your last name is " . $_POST["lname"]  . "<br/>";
$abc=$_POST["fname"];
if($abc=="null" || $abc=="")
{
	echo"the first name is empty";
}
else
{
	echo"the first name is not empty";
}
echo "<br>" . date("d/m/y") . "<br>";

echo '<a href="/default.php">Home</a>
<a href="/tutorials.php">Tutorials</a>
<a href="/references.php">References</a>
<a href="/examples.php">Examples</a> 
<a href="/about.php">About Us</a> 
<a href="/contact.php">Contact Us</a>
<a href="/myphp/design demi.php">Meenesh Jain </a>';


?>
<br />
</body>
</html>