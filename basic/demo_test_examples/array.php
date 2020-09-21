<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
//phpinfo();

$carrys = array("meenesh ","jain","is ","a ","rockstar");
$hellos = array("meenesh ","helps","who","nobody");

$array=array_diff($carrys,$hellos);
$arrays=array_diff($hellos,$carrys);
echo '<br>';
print_r($array); echo '<br>';
print_r($arrays); echo '<br>';

echo '<br>';

$ary1=array("a"=>1,"b"=>12,"c"=>55,"d"=>150);
$ary2=array("a"=>1,"b"=>12,"g"=>55,"h"=>150);
print_r(array_diff_assoc($ary1,$ary2));
echo '<br>';


$file1=$_FILES['file']['name'];
$file2= $_FILES['file']['tmp_name'];
move_uploaded_file($file2,"uploads/".$file1);




?>

<form enctype="multipart/form-data" method="post" action="#">
<input type="file" name="file" class="file">
<input type="submit">
</form>
</body>
</html>