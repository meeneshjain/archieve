<?php 


$to="j.meenesh@gmail.com";
$subject="test mail";
$message="Hello...! this is meenesh jain.";
$from="j.meenesh@yahoo.in";
$header= "From : ". $from;
$mail1=mail($to,$subject,$message,$header);
if($mail1)
{
echo"mail sent";
}


?>