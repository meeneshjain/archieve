<?php
$id = $_GET['id'];

require_once('config.php');

$select ="SELECT * from myTable WHERE Name LIKE '".$id."%'";
$query=mysql_query($select) or die(mysql_error());

	if(mysql_num_rows($query)>0)
	{
		while($row=mysql_fetch_array($query))
		{
			echo $row['Name'].' <br>';

		}
	}
	else
	{
		echo 'no suggestion found';
	}

?>
