<?php
require_once('config.php');
$str=$_GET['str'];
$select ="SELECT * FROM myTable WHERE name LIKE '".$str."%' ";
$result=mysql_query($select);

if(mysql_num_rows($result)>0)	
	{
		while($row=mysql_fetch_array($result))
		{
			echo "Name - ".$row['Name'] ." <br>";
			echo "Email - ".$row['login_id'] ." <br>";
			echo "Phone - ".$row['phone'] ." <br>";
			echo '________________________________<br>';
		}

	}
	else
	{
		echo 'no result found';
		
	}	

?>
