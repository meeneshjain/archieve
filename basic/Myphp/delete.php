
<?php
 $i="";
?>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="student"; // Database name
$tbl_name="student_login-info"; // Table name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM student_login_info";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>
<html>
<body>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="4" bgcolor="#FFFFFF"><strong>Delete multiple rows in mysql</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Lastname</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result, MYSQL_ASSOC)){
?>
<tr>
<td align="center" bgcolor="#FFFFFF"><?php  echo "<input name='checkbox[]' type='checkbox' id='checkbox['$i']'>";?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Userid']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Password']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Firstname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Lastname']; ?></td>
</tr>
<?php
}
?>
<tr>
<td colspan="5" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>
<?php
// Check if delete button active, start this
if(isset($_POST['delete'])){
for($i=0;$i<20;$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM $tbl_name WHERE userid=''";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=dele.php\">";
}
}
mysql_close();
?>
</table>
</form>
</td>
</tr>
</table>
</body>
</html>