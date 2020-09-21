<!doctype html>
<html>
<head>
</head>
<body>
<table width ="369" align="center">
<tr>
<td>
<fieldset>
<legend> Please Enter Items information.</legend>
<?php require_once"Forminserthelper.php";
$id = 0;
if(isset($_REQUEST['id'])){
$id = $_REQUEST['id'];
}
$persons = getIdPerson($id);
	//echo $id ;
 ?>
<form name="Firstinsertform" align="center" method ="post" cellspacing="1" action="formaction.php">
<input type="hidden" name="action" value="save"/>
<input type="hidden" name="id" value="<?php echo $persons['idrestourant_items'];?>"/>
<table align="center" width="100%">
<tr>
	<td>
	<label for ="2">Item Name:
	<input type="text" name="ename" id="ename" value="<?php echo $persons['items_name'];?>"/></br></label>
	</td>
</tr>
<tr>
<td>
<label for ="2">Item Code :
<input type="text" name="age" id="age" value="<?php echo $persons['items_code'];?>" /></br>
</label>
</td>
</tr>
<tr>
	<td>
<label for="2">Item Price :
<input type="text" name="marks" id="marks" value="<?php echo $persons['items_price'];?>"/></br>
</label>
	</td>
</tr>
<tr><td>	
<button type="submit" name="Submit" value="Add">Add</button>
</td></tr>
</table>
</fieldset>
</td>
</tr>
</body>

</html>

