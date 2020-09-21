<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php demo</title>
</head>

<body>
<?php
echo "hello world";
print "<br>this is my first php example";
$txt="meenesh jain!";
$x=16;
print"<br>the value of x is " . $x;

echo"<br>my name is ". $txt. "<br>";

$a=5;
$b=10;
echo $b;
echo"<br>";
function add1()
{
	$a=5;
	$b=10;
	//global $a, $b;
	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
	$GLOBALS['a'] = $GLOBALS['b'] + $GLOBALS['b'];
}
add1();
echo"<br>";
echo $a;
echo"<br>";
echo $b;

$txtc1="Hello World!";
$txtc2="What a nice day!";
echo $txtc1 . " " . $txtc2;

echo "<br>". $txtc2 ." ". $txtc1 . "<br>" ;

echo strlen('textc1');
echo("<br>");
echo strlen("hello world this is meenesh..!");
echo"<br>";
echo strpos("meenesh jain","j");

$xyz=123;
echo"<br>" . $xyz++;

$num=5;
if($num==5)
{
	echo"the no is ". $num;
}

$d=date("D");
if ($d=="Wed")
  {
  echo "<br>Have a nice mid-week!<br>";
  }
else
  {
  echo "<br>wait for wednesday!<br>";
  }
  
  $i=1;
  while($i<=5)
  {
	  echo"the no is ". $i . "<br>" ;
	  $i++;
  }
  
  $j=1;
  do
  {
	//  $j++;
	  echo"<br>this no is " . $j ;
	$j++;
  }
  while($j<=10);


function add2($a,$c)
{
	$result= $a + $c ;
	return $result;
}
echo"<br> result of 4 +5  =  " . add2(4,5) . "<br>";

echo(date("1") . "<br />");
echo(date("l") . "<br />");
echo(date("l dS \of F Y h:i:s A") . "<br />");
echo(date("j m Y y , j  F y , h:i:s    l , B g G  ") . "<br />");
?>


</body>
</html>