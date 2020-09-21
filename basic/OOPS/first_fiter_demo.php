<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['Submit']))
{
	 $number=$_POST['number'];
	/*if(!filter_var($number,FILTER_VALIDATE_INT))
	{
		echo "this is not a valid number";
	}
	else
	{
		echo"This is a valid number";
	}
	 */
	if(is_numeric($number))
	{
		echo"you entered a number",PHP_EOL;
	}
	else
	{
		echo"its not a number";
	}
}

define("greeting","welcome");
echo greeting;
define("GREETING2","define welcome");
echo "<br>". GREETING2;
?>
<hr /><br />
<br />

<form method="post">
Enter your Mobile number : <input type="text" name="number" />
<input type="submit" name="Submit" />

</form>
</body>
</html><br />


<?php
echo"<hr>";
$variable1=500;
$variable2=6.212;
var_dump($variable1);
var_dump($variable2);
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);

$mobiles=array("samsung"=>"s3","sony"=>"Z ultra","nokia"=>"920");
var_dump($mobiles);





?>