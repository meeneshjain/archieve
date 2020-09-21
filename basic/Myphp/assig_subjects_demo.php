	<?php
$msg="";
$msg1="";
$row;
	function facultyName()
	  {
		
	$con=mysql_connect('localhost','root','') or die("error");
	mysql_select_db('faculty',$con);
	$sql="SELECT * from faculty_login_info";
	$result=mysql_query($sql);
	echo"<option  ></option>";
		   	while($row = mysql_fetch_array($result))
  			{
				$id=$row["userid"];
	  			$fname=$row["firstname"];
				$lname=$row["lastname"];
	echo '<option value="'.$row['userid'].'">'.$id.' '."-".' '.$fname.'  '.$lname.'</option>'."\n";
		//$faculty=$_POST['faculty'];
			
  			}
			
			mysql_close();
	  }
  
if(isset($_POST['assign']))
{	
$conn=mysql_connect('localhost','root','') or die("error");
	mysql_select_db('admin',$conn);
	$query="select * from assign_sub  ";
	$result=mysql_query($query);
	
	
	if($_POST['subcode']==NULL )
	{
	$msg="enter the correct sub_code";	
	}
	else if($_POST['subname']==NULL)
	{
		$msg="Enter the sub_name";
	}
	else if($_POST['sem']==NULL)
	{
		$msg="Enter the semester";
	}
	else if($_POST['branch']==NULL)
	{
		$msg="Enter the branch";
	}
	else if($_POST['faculty']==NULL)
	{
		$msg="Select one faculty";
	}
	else 
	{
		

	$mysql2="SELECT * FROM assign_sub WHERE sub_code='".$_POST['subcode']."' AND sub_name='".$_POST['subname']."' AND semester='".$_POST['sem']."' AND branch='".$_POST['branch']."' AND Type='".$_POST['type']."'";
		$res2=mysql_query($mysql2);

		if(mysql_num_rows($res2)==1)
		{
			
	
			$msg="the subname and code amd branch  are correct";
			$faculty=$_POST['faculty'];
			$subcode=$_POST['subcode'];
			$subname=$_POST['subname'];
			$sem=$_POST['sem'];
			$branch=$_POST['branch'];
			$type=$_POST['type'];
			$insert_query="INSERT INTO assigned_subject(faculty_userid, sub_code, sub_name, type, semester, branch) VAlUES('$faculty','$subcode','$subname','$type','$sem','$branch')";
			$result2=mysql_query($insert_query);
			$msg="subjects are inserted successfully ";
		}
		else {
				
				
				$msg="entries filled are wrong plz check pre entries";
				
			
			}
			
	}
}

 ?>
 
 <? echo $msg;?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASSIGN sub</title>
<link rel="stylesheet" type="text/css" href="tdStyles.css" />
</head>

<body>
<form action="" method="post" target="_self">
<table width="900" height="261" border="0" align="center" cellpadding="5px" cellspacing="0" >
  <tr>
    <td height="10" colspan="7"><h3>Assign Subjects</h3></td>
    </tr>
  <tr>
    <td height="11" colspan="7"><strong>
    <p>1. Check the &quot;ENTRIES&quot; before assigning the subject. <br />
2. Subject code and Subject name should be same as database entries ("-" if its in the entry then its counted).<br />
3. The type element consist of a value either Theory/ Practical as "T/P".</p></strong></td>
  </tr>
  <tr>
    <td width="90" height="72">Select faculty<font color="red">*</font>
    <select name="faculty" size="1">
	<?php facultyName();  ?>
    </select></td>
    <td width="90" align="center">Sub_code<font color="red"> *</font>
      <input type="text" name="subcode" value="<?php if(isset($_POST['subcode'])) echo $_POST['subcode'];?>"  /></td>
    <td width="90" align="center">Sub_name<font color="red"> *</font>
      <input name="subname" type="text" value="<?php if(isset($_POST['subname'])) echo $_POST['subname'];?>" /></td>
    <td width="120" align="center">Type <font color="red"> *</font>
      <select name="type"><option value="T" >T</option><option  value="P">P</option></select></td>
    <td width="90" align="center">Semester<font color="red"> *</font>
      <input name="sem" type="text" value="<?php if(isset($_POST['sem'])) echo $_POST['sem'];?>" /></td>
    <td width="90" align="center">Branch <font color="red">*</font>
      <input type="text" name="branch" value="<?php if(isset($_POST['branch'])) echo $_POST['branch'];?>"/></td>
    <td width="90">&nbsp;</td>
  </tr>
  <tr>
    <td height="53" colspan="7" align="center"><input type="submit" name="assign" class="button7" value="Assign" /></td>
  </tr>
  <tr>
    <td height="53" colspan="7" align="center"><input type="submit" name="view" class="button1" value="show entry" /><input type="submit" name="assigned" class="button1" value="View Assigned" /></td>
    </tr>
  <tr>
    <td colspan="4"><font size="+2" color="red"><?php echo $msg; ?></font></td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><?php ?></td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>

<?php 
$con=mysql_connect('localhost','root','');
mysql_select_db('admin',$con);
$sql="select * from assign_sub";
$result=mysql_query($sql);
if(isset($_POST['view']))
{
	echo"<table border='1' bordercolor='blue' align='center' width='inherit'  height='150' cellpadding='3px'>";
	echo"<tr><th>branch</th>

<th> sub_code </th>
<th>semester</th>
<th >sub_name</th>
<th>type(theory/practical )</th>";

echo"</tr>";

	while($row = mysql_fetch_array($result))
	{ 
		 echo "<tr>";echo "<td align='center'>" . $row['branch'] . "</td>";	
   echo "<td align='center'>" . $row['sub_code'] . "</td>";  echo "<td align='center'>" . $row['semester'] . "</td>";
  echo "<td align='center'>" . $row['sub_name'] . "</td>";  
  echo "<td align='center'>" . $row['Type'] . "</td>";

 echo "</tr>";
 
	}

	echo"</table>";
}
?>
<?php 
if(isset($_POST['assigned']))
{
	
$conn=mysql_connect("localhost","root","");

$dbselect=mysql_select_db("admin",$conn);

$result2 = mysql_query("SELECT * FROM assigned_subject");
	echo "<table border='1' bordercolor='blue' align='center' width='700' height='100' cellpadding='10px'>
<tr>
<th> # </th>
<th >faculty user-id</th>
<th>branch</th>
<th>semester</th>
<th>subject name</th>
<th>subject code</th>
<th>type</th>
</tr>";
	while($row = mysql_fetch_array($result2))
  {
  echo "<tr>";
    echo"<td align='center'>";
echo"<input type = 'checkbox' name='box[]' value=\"".$row['faculty_userid']."\"'</td>";
  echo "<td align='center'>" . $row['faculty_userid'] . "</td>";
   echo "<td align='center'>" . $row['branch'] . "</td>";   echo "<td align='center'>" . $row['semester'] . "</td>";  echo "<td align='center'>" . $row['type'] . "</td>";
 echo "<td align='center'>" . $row['sub_code'] . "</td>";
 echo "<td align='center'>" . $row['sub_name'] . "</td>";
  echo "</tr>";
  
  echo "<tr>";
  
  }echo "<td align='center' colspan='7'> <input type='submit' name='delete' value='Delete' class='button2'></form></td>";
  echo "</tr>";
}
echo "</table>";



if(isset($_POST['delete']))
{

   if(isset($_POST['box']))
   { 
        $num = 0;
        $box = $_POST['box'];
        while (list ($key,$val) = @each ($box)) { 
              $num++;
              $sqldel="DELETE FROM assigned_subject
 WHERE faculty_userid='$val'";
              $resdel=mysql_query($sqldel);
			 
        }
       
        $msg1="$num record(s) have been deleted....!";
   }
   else{
	  
   $msg1= "No records selected....!";
   }
}
echo"<div align='center'>";
 echo"<font size='+2' color='red' >". $msg1;
 echo"</font>";
 ?>

</form>
</body>
</html>