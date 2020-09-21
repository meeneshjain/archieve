<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
class MyClassDemo
{
	public $error="this is a public variable outside coructor";
	public function __construct()
	{
		$this->ontrcuvariabme="hello";
		echo $this->ontrcuvariabme;
		echo "this is a constructor <br>";
		echo "this cstructor was initialized ".__CLASS__."<br>";

	}
	

	function myclassfunction()
	{
		echo"this is defined before cstructor<br>";
		
	}
	public function __destruct()
	{
		echo "the ontructor has been de de initialized ".__CLASS__."<br>";
	}
	
	
		
}
$object1=new MyClassDemo;
$object1->error;
$object1->myclassfunction();







?>
</body>
</html>