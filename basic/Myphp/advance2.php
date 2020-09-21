<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>advance2</title>
</head>

<body>
<form action="advance2.php" method="post" enctype="multipart/form-data">
<label for="file">File-name:</label>
<input type="file" name="file" id="file" />
<br>
<input type="submit" name="submit" value="submit" />
</form>
<?php
	$file=fopen("call.txt","r") or exit("unable to open file..!");
//	if (feof($file)) echo "End of file";
echo"the file is not opened";


if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }

?>
</body>
</html>