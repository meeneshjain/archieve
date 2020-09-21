<?php

class DemoClass
{
	
	//property or variable declaration
	public $Name="This is a variable <br>";
	
	public function MyFunctionDemo()
	{
		
	echo $Name1="this is my first class";	
	echo "<br> ";	
	}
	
	public function MyFun()
	{
		echo"Function for factorial Program <br>";
		$f=1;
		for($i=5;$i>=1; $i--)
		{
			$f=$f*$i;
			
		}
		echo $f;
	}
	
}

 $obje = new DemoClass;
echo  $obje->Name;
 $obje->MyFunctionDemo();

$obj2=new DemoClass;
$obj2->MyFun();



?>
