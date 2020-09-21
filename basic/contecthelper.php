<?php

$Fname1 = $_POST['Fname'];
$Fname2 = $_POST['Age'];
$Fname3 = $_POST['Mobile'];

//echo $Fname1 .$Fname2 .$Fname3 ;
//echo $Fname1 .$Fname2 .$Fname3 ;

$con = mysql_connect('localhost:3306','root','1234'); 
if(!$con)
{
	die('could not connect ' . mysql_error());
}
mysql_select_db("contact",$con);




?>