<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$ar1=array("element1","element2","element3","element4","element5");
$ar0=array("value1","value2","value3","value4","value5");
$ar2=array("element1"=>"value1","element2"=>"value2","element3"=>"value3");

$ar3=array(
	array("element1","element2","element3","element4","element5"),
	array("element1"=>"value1","element2"=>"value2","element3"=>"value3"),
	array("1"=>"12","2"=>"13","3"=>"14")
	
);

foreach($ar3 as $value)
{
	foreach($value as $value)
	{
		echo $value."<br/>";
	}
}
echo '<hr><br>';
$combine = array_combine($ar0,$ar1);
$combine1 = array_combine($ar1,$ar0);
echo 'combine function<br>';
print_r($combine);
echo '<br>';
print_r($combine1);
echo '<hr><br><br>flip function<br>';
$flip = array_flip($ar2);
print_r($flip);
echo '<br><hr>';

echo '<br>Merge <br>';
$merge= array_merge($ar0,$ar1);
print_r($merge);
echo '<br><hr>';
//phpinfo();
echo '<br>';
?>
</body>
</html>