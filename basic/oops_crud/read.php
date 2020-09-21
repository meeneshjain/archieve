<?php
include('Crud_class.php');
$obj->read();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Read Data</title>
</head>

<body>
<table width="500" border="1" cellpadding="5">
  <tr>
    <th width="16" scope="row">id</th>
    <td width="95">name</td>
    <td width="140">email</td>
    <td width="104">address</td>
     <td width="71">Mobile</td>
    <td>action</td>
  </tr>
  
  

<?php
foreach($obj->data as $val){
	extract($val);
  ?>
    <tr>
    <td scope="row"><?php echo $id; ?></td>
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $address; ?></td>
    <td><?php echo $mob; ?></td>
     <td><a href="edit.php?id=<?php echo $id; ?>">Edit</a>|<a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
  </tr>
    <?php
}
?>
</table>


</body>
</html>