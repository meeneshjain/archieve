<?php 
include('config.php');
$id=$_GET['id'];
$select1 = 'Select * from myTable WHERE id='.$id.'';
$query1=mysql_query($select1) or die(mysql_error());

while ($row=mysql_fetch_array($query1))
{ ?>
	<table border='1px'>
	<tr><td> ID : </td><td>   <?php echo $row['id']; ?>   </td></tr>
	<tr><td> Name  :</td><td>  <?php echo $row['Name']; ?>    </td></tr>
	<tr><td> Email :</td><td>  <?php echo $row['login_id']; ?>    </td></tr>
	<tr><td>  Phone : </td><td> <?php echo $row['phone']; ?>     </td></tr>
	</table>
	
	
	
<?php }?>
