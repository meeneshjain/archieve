<!doctype html>
<html>
<head>
</head>
<body>
<?php require_once "Forminserthelper.php";
$rows = getPersons();
?>
ADD<a href="http://localhost/zpractice_june/indesx.php?page=Forminsert">Add</a>
<table width ="369" align ="center">
<tr>
<td>
<fieldset>
<legend>This is a Grid of Items Details.</legend>
<table border="1" width = "550px" cellspacing="1">
<tr>
	<th>Id</th>
	<th>Items Name</th>
	<th>Items Code</th>
	<th>Items Price</th>
	<th>Action</th>
	<th>Action</th>
</tr>
<?php foreach($rows as $row):?>
<tr>
	<td><?php echo $row['idrestourant_items'];?> </td>
	<td> <?php echo $row['items_name'];?> </td>
	<td>  <?php echo $row['items_code'];?></td>
	<td>  <?php echo $row['items_price'];?></td>
	<td><a href ="Forminsert.php?id=<?php echo $row['idrestourant_items'];?>"/>Edit </a></td>
	<td>	<a href ="Formaction.php?id=<?php echo $row['idrestourant_items'];?>&action=delete"/>Delete </a>
	</td>
<?php endforeach;?>	

</tr>
</table>
</fieldset> 	
</td>
</tr>
</table>
</body>
</html>