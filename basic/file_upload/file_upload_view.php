<?php

$con=mysql_connect('localhost','root','');
	mysql_select_db('test',$con);
if(isset($_POST["submit"]))
{
	
	$file_name=$_FILES["file"]["name"];
	$file_type=$_FILES["file"]["type"];
	$file_size=$_FILES["file"]["size"]/1024;
	$file_temp_path=$_FILES["file"]["tmp_name"];
	$path="upload/";
	if(
($_FILES["file"]["type"]=="image/jpeg")||
($_FILES["file"]["type"]=="image/png")||
($_FILES["file"]["type"]=="image/jpg")||
($_FILES["file"]["type"]=="image/gif") &&
($_FILES["file"]["size"]<= 200000))
	{					  
		move_uploaded_file($file_temp_path,"uploads/". $file_name);
		

		$insert_query="INSERT INTO upload_file VALUES('','$file_name','$file_size','$path')";
		mysql_query($insert_query) or die("error");
		
		echo"Successfully inserted <br>";
		
		echo "file name : - $file_name <br> file size :-  $file_size kb<br> path :  $path $file_name";

echo "file uploaded successfully";	 
	}
	else
	{
		echo "Imvalid File type or check file size";
	}
	
	
	
	
}
	


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div>
  <form method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="686" height="220" border="0">
      <tr>
        <td width="184" height="165"><?php
        $select_query="SELECT * FROM upload_file";
		$res=mysql_query($select_query) or die("error");

	//header("Content-type:image/jpeg");
	while($row= mysql_fetch_assoc($res))
	{
echo "<img src='uploads/$row[file_name]' width='150' height='150'>";		
	}
				
		
		
		
		?></td>
        <td width="147">Upload File : </td>
        <td width="333"><input type="file" name="file" id="file">
        <br>
        Upload Image (jpg / png /gif : 1.5 Mb)</td>
      </tr>
      <tr>
        <td height="47">&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset"></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>