<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$to="j.meenesh@gmail.com";
$from="j.meenesh@gmail.com";
$subject="hello world";
$message="hello world returns ";
$header="FROM :". $from;
$sent = mail($to,$subject,$message,$header);

if($sent)
{
	echo "success";
}
else
{
	echo "error";
}
?>
</body>
</html>