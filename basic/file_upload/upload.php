<?php 
$name=$_FILES["file"]["name"];
$size=$_FILES["file"]['size']/1024;
$temp=$_FILES["file"]["tmp_name"];
$path = "uploads/";

	    move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);
  
		 echo "Upload: " . $_FILES["file"]["name"] . "<br><br>
";
  echo "Type: " . $_FILES["file"]["type"] . "<br><br>
";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br><br>
";
   echo "Stored in: " . "uploads/" . $_FILES["file"]["name"]. "<br>
<br>
"; 

	$con=mysql_connect('localhost','root','');
	mysql_select_db('test',$con);
		$insert_query="INSERT INTO upload_file VALUES('','$name','$size','$path')";
		mysql_query($insert_query) or die("error");
		echo"successfully inserted";
?>