<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
$eror="";
//other example of the class 
if(isset($_POST['submit']))
{
	class FormDemo
		{
			function myfunction($name,$lname)
			{
			echo "$name ";//. $name=$_POST['name']."<br>";
			echo "$lname ";//. $number=$_POST['number']."<br>";
	
			}
	
 		}
	$form=new FormDemo;
	$form->myfunction($_POST['name'],$_POST['number']);
}
?>
<body>
<form method="post">
Name <input type="text" name="name" />
<br />
Number <input type="text" name="number" />
<br />
<input type="submit" name="submit"/>
</form>
</body>
</html>