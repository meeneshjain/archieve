<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

$araay =array("","","");
$araay2=array(""=>"");




$bikes =array(
	array("hello","hi ","how are "),
	array("why","who","when ")

);
$vars=array();
echo '<br>';
echo $bikes[0][2];
$i=$j=0;
foreach($bikes as $vars=>$value)
{
		foreach($value as $value)
		{
			echo "<br>".$value."<br>";
		}
}



$cars = array("l","b","f","c","a","r");

foreach($cars as $values)
{
	echo $values."<br>";
}

?>
</body>
</html>