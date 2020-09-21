<?php
$msg="";
if(isset($_POST['insert']))
{
if($_POST['userid']==NULL)
{
$msg="please enter user id";
}

else if($_POST['password']==NULL)
{
$msg="please enter password";
}

else if($_POST['firstname']==NULL)
{
$msg=" please enter first name ";
}

else if($_POST['lastname']==NULL)
{
$msg=" please enter last name";
}
else
{
	$conn=mysql_connect("localhost","root","");

$dbselect=mysql_select_db("student",$conn);

$sql="INSERT INTO student_login_info(Userid,Password,Firstname,Lastname) 
VALUES 
('".$_POST['userid']."','".$_POST['password']."','".$_POST['firstname']."','".$_POST['lastname']."')";

$result=mysql_query($sql);

if ($result)
  {
  $msg="value enetered";
  }
  else
  $msg="not entered";
  echo"error :". mysql_error();
  }

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database entry..</title>
<style>
h3{
	background-color:blue;
	font-family:"Comic Sans MS", cursive;
	color:yellow;
	
}
body
{
	background-color:#BAC4C7;
}
input
{
	display:block; 
	margin-bottom:10px;
}
.font1
{
	color:black;
	size:18px;
	font-family:Verdana, Geneva, sans-serif;
	font:bold;
	
	
}
.button1 {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:white;
	background-color:#03F;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	
	height:32px;
	padding:4px 16px;
	text-shadow:#FE6 0 1px 0
}
.button1:hover
{
	background-color:#00F;
}
</style>
</head>

<body><form method="POST" action="">
<table width="896" height="127" border="0" align="center" cellspacing="0"  >
  <tr><b>
    <td height="37" colspan="4"><h3>Create a User (Fill in all the values)</h3></td>
  </tr>
  <tr>area
    <td width="199" height="24" class="font1">User-id 
    <input type="text" name="userid" value="<?php if(isset($_POST['userid'])) echo $_POST['userid'];?>"></td>
     <td width="216">Password
        <input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>" /></td>
     <td width="223" class="font1"><p>First Name
          <input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>"/>
     </p></td>
     <td width="230" class="font1">Last  Name
       <input type="text" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>"  /></td>
  </tr>
  <tr>
    <td height="27" colspan="4" align="center" valign="top"><input type="submit" name="insert"  value="Insert into database"  class="button1" />
    
    <br /> 
    
    <input type="submit" name="show" value="show Databse Entry" class="button1" />
   </td> 
 
  </tr>
  <tr>
    <td colspan="4" align="center" valign="top" style="font-size:18px; color:red; "><?php echo $msg;?>
    </td>
  </tr>
  </table>  
 

<?php

echo "<table border='0' align='center' width='400' height='150'>
<tr>
<th>userid</th>
<th>password</th>
<th>first name</th>
<th>last name</th>
</tr>";
$conn=mysql_connect("localhost","root","");

$dbselect=mysql_select_db("student",$conn);

$result2 = mysql_query("SELECT * FROM student_login_info");
if(isset($_POST['show']))
{	
	while($row = mysql_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td align='center'>" . $row['Userid'] . "</td>";
  echo "<td align='center'>" . $row['Password'] . "</td>";  
  echo "<td align='center'>" . $row['Firstname'] . "</td>";
  echo "<td align='center'>" . $row['Lastname'] . "</td>";
  
  echo "</tr>";
  }
}
echo "</table>";
?>

</form>
</body>
</html>

