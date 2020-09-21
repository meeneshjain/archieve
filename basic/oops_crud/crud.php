<?php
error_reporting(0);
mysql_connect("localhost","root","")or die("Host not Connected".mysql_error());
mysql_select_db("meenesh")or die("Database not selected".mysql_error());

if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	mysql_query("INSERT INTO users SET name='$name', email='$email', address='$address', mobile='$mobile'") or die("Your data cannot saved".mysql_error());
	 echo "Data Succesfully saved!";
}

if(isset($_REQUEST['u_submit'])){
	extract($_REQUEST);
	mysql_query("UPDATE users SET name='$u_name', email='$u_email', address='$u_address', mobile='$u_mobile' WHERE id='$u_id'") or die("Your data cannot update".mysql_error());
	 echo "Data Succesfully Update!";
}

if(isset($_REQUEST['did'])){
	$did=$_REQUEST['did'];
	mysql_query("DELETE FROM users WHERE id='$did'") or die("Your data cannot delete".mysql_error());
	 echo "Data Succesfully Deleted!";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Form</title>
</head>

<body>
<?php
if(!isset($_REQUEST['id'])){
	

?>
<form action="" method="post">
<table width="500" border="0" cellpadding="5">
  <tr>
    <th width="167" align="right" scope="row">Name</th>
    <td width="307"><input type="text" name="name" size="20" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Email</th>
    <td><input type="text" name="email" size="20" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Address</th>
    <td><textarea name="address" rows="5" cols="20"></textarea></td>
  </tr>
  <tr>
    <th align="right" scope="row">Mobile</th>
    <td><input type="text" name="mobile" size="20" /></td>
  </tr>
   <tr>
    <th align="right" scope="row">&nbsp;</th>
    <td><input type="submit" name="submit" size="20" /></td>
  </tr>
</table>

</form>
<?php

}
else{
	$uid=$_REQUEST['id'];
	$sql=mysql_query("SELECT * FROM users WHERE id='$uid'");
	$row=mysql_fetch_array($sql);
	extract($row);
?>
<form action="" method="post">
<table width="500" border="0" cellpadding="5">
  <tr>
    <th width="167" align="right" scope="row">Name</th>
    <td width="307"><input type="text" name="u_name" value="<?php echo $name; ?>" size="20" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Email</th>
    <td><input type="text" name="u_email" value="<?php echo $email; ?>" size="20" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Address</th>
    <td><textarea name="u_address" rows="5" cols="20"><?php echo $address; ?></textarea></td>
  </tr>
  <tr>
    <th align="right" scope="row">Mobile</th>
    <td><input type="text" name="u_mobile" value="<?php echo $mobile; ?>" size="20" /></td>
  </tr>
   <tr>
    <th align="right" scope="row">&nbsp;</th>
    <td>
    <input type="hidden" name="u_id" value="<?php echo $id; ?>" />
    <input type="submit" name="u_submit" size="20" /></td>
  </tr>
</table>

</form>


<?php
}
?>

<br />
<br />


<table width="500" border="1" cellpadding="5">
  <tr>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Address</th>
    <th scope="col">Mobile</th>
    <th scope="col" colspan="2">Action</th>
  </tr>
  <?php
  $sql=mysql_query("SELECT * FROM users");
  if($sql){
	while($rows=mysql_fetch_array($sql)){
		extract($rows);
  ?>
  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $address; ?></td>
    <td><?php echo $mobile; ?></td>
     <td><a href="crud.php?id=<?php echo $id; ?>">Edit</a></td>
     <td><a href="crud.php?did=<?php echo $id; ?>" onclick="return confirm('R u delete confirm!');">Delete</a></td>
  </tr>
  <?php
  }
}
?>
<tr>
<td colspan="5"><a href="crud.php">Insert New Data</a></td>
</tr>
</table>

</body>
</html>