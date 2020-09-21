<?php

class DemoClass2
{
	public $User_Name="Meenesh Jain<br>";
	private $var="this is declared in the Class<br>";	
	
		//set and get property of functions
	public $prop="I m class Property1 ";
	
	public function setProperty($parameter1)
	{
		$this->prop = $parameter1;
	}
	public function  getProperty()
	{
		return $this->prop."<br/>";
	}
	public function StringDemo()
	{
		echo"this is a function without argument";
	}
	
	//Multiple Same Name Methods 

	
		 function addDemo($a , $b )
		 {
			echo $add=$a + $b;
			return $add;
			
		 }
		/* function addDemo($c , $d , $e)
		{
			echo $add=$c * $d * $e;
						
		} */

}
$obj1=new DemoClass2;

echo $obj1->getProperty();
$obj1->setProperty("This is the value set from the function setProperty");
echo$obj1->getProperty();
$obj1->StringDemo();
echo"<br>";

$obj1->addDemo(8,5);

//echo $obj1->addDemo(5, 5 , 5);



?>