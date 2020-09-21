<?php 
//sleep(3);
error_reporting(0);
include("connection.php");
$id = $_POST['id'];
$tablename = $_POST['tablename'];
echo $tablename;
mysql_query("UPDATE `$tablename` SET `delete`='1' WHERE `id` = '$id'",$con) or die(mysql_error());
echo "Data Successfully Deleted";
?>