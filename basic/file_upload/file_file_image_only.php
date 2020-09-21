<?php 
if(isset($_POST['submit']))
{
	
		if(($_FILES["file"]["type"]=="image/jpeg") ||
		($_FILES["file"]["type"]=="image/png") ||
		($_FILES["file"]["type"]=="image/gif") ||
		($_FILES["file"]["type"]=="image/jpg")		
		
		
		)
		{
			$filename=$_FILES["file"]["name"];
			$size=$_FILES["file"]["size"];
			$path="upload/";
			$temp_path=$_FILES["file"]["tmp_name"];
			
			move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/". $_FILES["file"]["name"]);
			echo "uploaded successfully "."<br>";
			echo "You uploaded ". $filename ."<br>"."path"."upload/".$filename;
		}
		else
		{
			echo "upload a valid image file as declared above";
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
<form method="post" enctype="multipart/form-data" name="form1" id="form1" >
  <table width="561" height="163" border="0">
    <tr>
      <td width="112">File Upload</td>
      <td width="365" bgcolor="#FFFFFF"><input type="file" name="file" id="file">
        <br>
      (upload image only : jpg, png,gif )</td>
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