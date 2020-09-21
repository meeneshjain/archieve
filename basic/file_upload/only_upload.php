<?php 
if(isset($_POST['submit']))
{
	
	$file=$_FILES["file"]["name"];
	$size=$_FILES["file"]["size"];
	$temp_path=$_FILES["file"]["tmp_name"];
	$path="uploads/";
	move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/". $_FILES["file"]["name"]);
	echo"successfully movied ";
	echo $file ."<br>". $size ."<br>". $path . $file ; 

}




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data" name="form1" id="form1" >
  <table width="340" height="163" border="0">
    <tr>
      <td width="112">File Upload</td>
      <td width="218"><input type="file" name="file" id="file"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit">
      <input type="reset" name="reset" id="reset" value="Reset"></td>
    </tr>
  </table>
</form>
</body>
</html>