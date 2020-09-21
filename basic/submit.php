<?php

echo $_POST['enter'];
exit();



if(isset($_POST['enter']))
{
echo"submit button clicked";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['add'];
$contact=$_POST['contact'];
$educ=$_POST['edu'];

if($fname==NULL || $lname==NULL || $email=NULL || $address==NULL || $contact==NULL || $educ=NULL)
{
echo $msg1="fields cannot be left empty";
}
else
{
$con=mysql_connect('localhost','root','1234');
if (!$con)
  {
  die('error: ' . mysql_error());
  }
mysql_db_select('contact',$con);
$sql1="INSERT into contact VALUES('$fname','$lname','$email','$address','$contact','$edu')";
$res=mysql_query($sql1);
echo "data inserted successfully";
mysql_close($con);
}

}

?>