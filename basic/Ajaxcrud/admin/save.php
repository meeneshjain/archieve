<?php
sleep(5);
	error_reporting(0);
	$con= mysql_connect('localhost','root','');
	if(!con)
	{
		die(mysql_error());
	}
	else
	{
		mysql_select_db('ajax',$con);
	}
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	if ($name=="" || $lastname=="" || $email=="" || $mobile=="")
	{
		$error= "Please enter all the fields";
		echo $error;
	}
	else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
	{
		$error= "Please enter the valid email address";
		echo $error;
	}	
	else if(strlen($mobile)!=10)
	{
		$error= "Please enter the valide mobile no.";
		echo $error;
	}
	else
	{
		mysql_query("INSERT INTO `ragistration_form` (`name`,`lastname`,`email`,`mobile`) VALUES ('$name','$lastname','$email','$mobile')",$con) or die(mysql_error()); 
		echo "Success Fully Saved!!!";
	}
?>
