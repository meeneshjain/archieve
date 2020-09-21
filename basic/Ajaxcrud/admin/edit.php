<?php
include("connection.php");
$id=$_GET['id'];
$getvalue= mysql_query("SELECT * FROM `ragistration_form` WHERE `id` = '$id'",$con) or die(mysql_error());
$row = mysql_fetch_array($getvalue);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<script type="text/javascript" src="scripts/update.js"></script>
</head>

<body>
<div id="loading" style="display:none">Loding Please Wait....</div>
<div id="response"></div>
<div align="center" style="background-color:#99FF66;width:300px;margin-top: 250px;margin-left: 500px;box-shadow: 10px 10px 5px #888888;border-radius:25px;">
<table align="center">
	<tr>
		<td>
			Name : 
		</td>
		<td>
			<input type="text" id="name" value="<?php echo $row['name']?>"/><br/>
		</td>
	</tr>
	<tr>
		<td>
			Lastname :
		</td>
		<td>
			<input type="text" id="lastname" value="<?php echo $row['lastname']?>"/><br/>
		</td>
	</tr>
	<tr>
		<td>
			Email : 
		</td>
		<td>
			<input type="text" id="email" value="<?php echo $row['email']?>"/><br/>

		</td>
	</tr>
	<tr>
	<td>
		Mobile : 
	</td>
	<td>
		<input type="text" id="mobile" value="<?php echo $row['mobile']?>"/><br/>
	</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button name="button" type="button" onclick="update('update.php','viewdata')"> Save</button>
		</td>
	</tr>
</table>
<input type="hidden" id="id" value="<?php echo $row['id']?>"/>
</div>
</body>

</html>
