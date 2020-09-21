<?php
include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<script type="text/javascript" src="scripts/deletedata.js"></script>
<script type="text/javascript" src="scripts/update.js"></script>
<script type="text/javascript" src="scripts/show.js"></script>
<title>Untitled 1</title>
</head>

<body>

<table bgcolor="#D7FFFF" align="center" border="0" cellpadding="0" cellspacing="12" >
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>LastName</th>
		<th>Email</th>
		<th>Mobil no.</th>
		<th colspan="2">Action</th>
	</tr>
	<?php 
	$i= 1;
		$getvalue=mysql_query("SELECT * FROM `ragistration_form` WHERE `delete`='0' " ,$con) or die(mysql_error());
		while ( $row = mysql_fetch_array($getvalue))
		{
	?>
	<tr id="row<?php echo $i?>">
		<td ><?php echo $row[0]; ?></td>
		<td ><?php echo $row[1]; ?></td>
		<td ><?php echo $row[2]; ?></td>
		<td ><?php echo $row[3]; ?></td>
		<td ><?php echo $row[4]; ?></td>
		
		<td><img src="../images/update.png" width="20px" title="Update" onclick="showData('edit.php?id=<?php echo $row[0]; ?>','viewdata')"/></td>
		<td><button name="button" type="button" onclick="deletedata('<?php echo $row[0]; ?>','ragistration_form','row<?php echo $i?>')"><img src="../images/delete.png" width="20px" title="delete"/> </button></td>
		
	</tr>
	<?php 
	$i++;
	} ?>
	</table>
	
</body>

</html>
