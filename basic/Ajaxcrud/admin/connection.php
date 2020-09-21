<?php
$con = mysql_connect('localhost','root','');
if(!$con)
{
	die(mysql_error());
}
else
{
	mysql_select_db('ajax',$con);
}
?>
