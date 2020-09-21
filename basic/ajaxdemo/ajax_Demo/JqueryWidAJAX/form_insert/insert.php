<?php
include_once('config.php');
$data1 = explode(',',$_GET['data']);
//$data1 = explode(",",$data);
$insert="INSERT INTO newDataTable VALUES('','".$data1[0]."','".$data1[1]."','".$data1[2]."','".$data1[3]."','".$data1[4]."','".$data1[5]."')";
$result=mysql_query($insert);
if(!$result)
{
	echo mysql_error();
}
else
{
	echo 'successfully submitted ';
}
?>
