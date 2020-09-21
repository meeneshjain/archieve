<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo basename($_SERVER['PHP_SELF']);

echo '<br>';

echo $replace =str_replace(array("-","_",".php")," ",basename($_SERVER['PHP_SELF']));

echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo '<br>';
echo $_SERVER['REQUEST_METHOD'];
echo '<br>';
echo $_SERVER['REMOTE_HOST'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
setrawcookie("cookie['one']","cookieOne");
setrawcookie("cookie['two']","cookieTwo");
setrawcookie("cookie['three']","cookieThree");
if(isset($_COOKIE['cookie']))
{	
	foreach($_COOKIE['cookie'] as $name => $value)
	{
		echo "$name :  $value"."<br>";
		
	}
}
?>
</body>
</html>
