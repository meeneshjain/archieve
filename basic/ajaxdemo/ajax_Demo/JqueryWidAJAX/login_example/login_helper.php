<?php
require_once('config.php');

if(isset($_GET['loginid']))
{
	$select="SELECT * from newDataTable WHERE loginid='".$_GET['loginid']."'";
	$result=mysql_query($select);
	if($result)
	{
		if(mysql_num_rows($result))
	}
	else
	{
		echo 'error';
	}
	
}

if(isset($_GET['pass']))
{
	
}


?>
