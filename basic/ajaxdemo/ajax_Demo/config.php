<?php
//connection code 
error_reporting(0);
$connect= mysql_connect('localhost','root','') or die("error");;
mysql_select_db('meenesh',$connect) or die("ERROR");
?>
