
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>

<body>
	
	<form method='post' action="ajax_suggest.php">
	Name : <input type="text" name="name" value="<?php ?>">
	<input type="submit" name='submit'>
	
	</form>
</body>

</html>
<?php

include('config.php');

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
$select= 'SELECT * FROM `myTable` WHERE Name LIKE "%'.$name.'%"';
	$result = mysql_query($select);
	while($row=mysql_fetch_array($result))
	{
		echo $row['Name'];
		echo ' , ';
	}
}

?>
