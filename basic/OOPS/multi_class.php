<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//multiple classes with same object 

class MyClass1
{
	function MyclassDemo()
	{
		echo"this is the first fucntion of the first class<br />";
		echo __CLASS__."<br>";

	}
}

class MyClass2
{
	
	function MyclassDemo2()
	{
		echo"this is second method of second class<br />
";
	}
}

class MyClass3
{
	function MyclassDemo3()
	{
		echo"this is second method of second class<br />
";
	}
}

$obj= new MyClass1;
$obj->MyclassDemo();

$obj= new MyClass2;
$obj->MyclassDemo2();


$obj= new MyClass3;
$obj->MyclassDemo3();




?>
</body>
</html>