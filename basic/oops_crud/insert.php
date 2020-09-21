<?php
include('Crud_class.php');
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$obj->insert($name,$email,$address,$mobile);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data</title>
</head>

<body>
<form method="post" action="insert.php">
<table width="500" border="1" cellpadding="5">
  <tr>
    <th width="154" scope="row">Name</th>
    <td width="314"><input type="text" name="name" size="30" /></td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td><input type="text" name="email" size="30" /></td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><textarea name="address" cols="20" rows="5"></textarea></td>
  </tr>
  <tr>
    <th scope="row">Mobile</th>
    <td><input type="text" name="mobile" size="30" /></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input type="submit" name="submit" value="Save" /></td>
  </tr>
</table>

</form>

</body>
</html>