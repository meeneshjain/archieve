<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//classes and object example

class MyClass
{
	// properties 
	 var $mobile;
	 var $classdemo1="this is a demo variable <br />";
	public $meenesh="i m rockstar";
	
	
	// functions
	function mobile($mobile = "meenesh")
	{
		$this->mobile=$mobile;
	}
	function what_mobile()
	{
		return $this->mobile;
	} 
	function dumpyfunction()
	{
		echo "this is a function <br> ";
	}
}
$obj= new MyClass();
 var_dump($obj);
 echo $obj->classdemo1;
 $obj->dumpyfunction();
 
echo $obj->mobile();
echo $obj->what_mobile();


?>
</body>
</html>