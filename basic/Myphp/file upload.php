<?php
	error_reporting(0);
	$con = mysql_connect('localhost','root','');
	if(!$con)
	{
		die(mysql_error());
	}
	else
	{
		mysql_select_db('employ',$con);
	}
	if(isset($_POST['submit']))
	{
	
 		
   		$file_result .= " file uploaded succesfully " ;
		$name=$_POST['name'];
		$department=$_POST['department'];
		$DOB=$_POST['DOB'];
		$salary=$_POST['salary'];
		$address=$_POST['address'];
		$mobile_no=$_POST['mobile_no'];
		$image=$_FILES["file"]["name"];
		
		
		if(empty($name) || empty($department)|| empty($DOB) || empty($salary) || empty($address)|| empty($mobile_no) || empty($image) )
		{
			$error = 'ALL FEILD ARE REQUIRED';
		}
		else
		{
			if ( strlen($name) > 25 )
			{
				$error = 'NAME IS TOO LARGE';
			}
			if( !is_numeric($DOB) )
			{
				$error = 'AGE MUST BE A NUMERIC';
			}
			
			$allowedExts = array("jpg", "png");
			$extension = end(explode(".", $_FILES["file"]["name"]));
			$image = time().rand().".".$extension; 
			if ((($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/png")) && in_array($extension, $allowedExts))
			{
				if ($_FILES["file"]["error"] > 0)
	    		{
					$file_result .= " NO FILE UPLOAD OR INVALID FILE " ;
 					$file_result .= " Error code :" .$_FILES["file"]["error"] . " <br> ";
 	    		}
				else
	   			{
	  				$file_result .=
   					"Upload: " . $_FILES["file"]["name"] . "<br>";
   					"Type: " . $_FILES["file"]["type"] . "<br>";
   					"Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
   					"Stored in: " . $_FILES["file"]["tmp_name"] . "<br>";
  	   			}
  	   			move_uploaded_file($_FILES["file"]["tmp_name"],"my_upload/". $image);
				mysql_query("INSERT INTO employee_info (`name`,`department`,`DOB`,`address`,`mobile_no`,`salary`,`image`) VALUES ('$name','$department','$DOB','$address','$mobile_no','$salary','$image')",$con) or die(mysql_error());
			$_POST= " ";
			}
			else
			{
				$error = 'INVALID file ';
			}
		}
		
		if(!empty($error))
		{
			foreach($error as $e)
			{
				echo '<strong><center>' ,$e, '</center></strong><br />';	
			}
		}
		else
			$error = 'you have ragister !';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
</head>

<body bgcolor="#D7D7FF"> 
	<form enctype="multipart/form-data" action="new.php?id=<?php echo $id;?>" method="post">
	<table width="100%" border="0" cellspacing="1" cellpadding="0">
		<tr>
			<td>&nbsp;</td>
			<td colspan="8"><strong>ADD NEW RECORD</strong> </td>
		</tr>
		<tr>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
			
		</tr>

		<tr>
			<th>Employee Name :  </th>
			<th>Department : </th>
			<th>DOB : </th>
			<th>Mobile_no. : </th>
			<th>Address : </th>
			<th>Salary :  </th>	
			<th>Upload : </th>
		</tr>
		<tr>
			
			<td align="center">
			<input type="text" name="name" value="<?php echo $_POST['name'] ?>" size="15"/><br/>	
			</td>
			
			<td align="center">
			<input type="text" name="department" value="<?php echo $_POST['department'] ?>" size="15"/><br/>	
			</td>
		
			<td align="center">
			<input type="text" name="DOB" value="<?php echo $_POST['DOB'] ?>" size="15"/><br/>	
			</td>
			
			<td align="center">
			<input type="text" name="mobile_no" value="<?php echo $_POST['mobile_no'] ?>" size="15"/><br/>	
			</td>
			
			<td align="center">
			<input type="text" name="address" value="<?php echo $_POST['address'] ?>" size="15"/><br/>	
			</td>
			
			<td align="center">
			<input type="text" name="salary" value="<?php echo $_POST['salary'] ?>" size="15"/><br/>
			</td>
			
			<td align="center">
			<input name="file" type="file" id="file" size="80"/><br/>
			</td>

			
		</tr>
		
	<input type="submit" name="submit" value="submit"/> <br/>
	<!--<input type="submit" id="u_button" name="u_button" value="upload the file"/>-->

	VIEW TABLE : <a href="view.php">view</a>
	</table>

</form>

</body>

</html>
