<?php
include("connection.php");
if(isset($_POST['submit']))
	{
		$uname = $_POST['username'];
		$pwd = $_POST['password'];
		$match = "SELECT * FROM ragistration_form WHERE name = 'pushpraj'"; 
		$qry = mysql_query($match,$con) or die(mysql_error());
		$num_rows = mysql_num_rows($qry); 
		if ($num_rows <= 0) 
		{ 
			echo "Sorry, there is no username $uname with the specified password.";
			echo "Try again";
		} 
		else 
		{
			header("location:default.php");
		
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<center>
	<div style= "width:960px;height:550px;padding:10px">
	<form action="" method="post">
	<table cellpadding="0" cellspacing="5" width="400px; " style="background:#669999; margin-top: 150px;">
	<tr>
		<td colspan="2" style="text-align:center;"><span style="color:white"><strong>LOGIN</strong></span></td>
	</tr>
	<tr>
		<td align="left" style="color:white"><b>Username : </b></td>
	</tr>
	<tr>
		<td align="left"><input name="username" placeholder="Username" type="text" style="width: 400px;height:22px;" /></td>	
	</tr>
	<tr>
		<td align="left" style="color:white"><b>Password : </b></td>
	</tr>
	<tr>
		<td align="left"><input name="password" placeholder="Password" type="password" style="width: 400px;height:22px;" /></td>	
	</tr>
	<tr>
		<td colspan="" align="center"><input name="submit" type="submit" value="Login"/></td>
	</tr>
	</table>
	</form>
	
	</div>
</center>
</body>

</html>
