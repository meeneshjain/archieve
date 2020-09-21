<?php
session_start();
$msg= "";


include('calendar\classes\tc_calendar.php');
if(isset($_POST['save']))
{
		
	if($_POST['name']==NULL)
	{
		$msg="entered the first name";
	}
	else if($_POST['email']==NULL)
	{
		$msg="enter the email";
	}
	else if($_POST['contact']==NULL)
	{
		$msg="Enter your Contact no";
	}
	else if($_POST['branch']==NULL)
	{
		$msg="Select your branch";
	}
	else if($_POST['sem']==NULL)
	{
			$msg="Select your Semester";
	}
	else if($_POST['address']==NULL)
	{
			$msg="Enter your address";
	}
	
	else 
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$branch=$_POST['branch'];
		$sem=$_POST['sem'];
		$address=$_POST['address'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$date = $day . "/" . $month . "/" . $year;
				
$con=mysql_connect("localhost","root","");
mysql_select_db("student",$con);
$sql="INSERT INTO student_personal(userid,name,email,contact,branch,address,DOB,sem) VALUES('tds0001','$name','$email','$contact','$branch','$address','$date','$sem')";
$result=mysql_query($sql);
	$msg=$date;
	
		
	
	}
	
	
	
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="tdStyles.css">
</head>

<body>

<table width="450" height="308" border="0" align="center" class="body1">
  <tr>
    <td height="22" colspan="2"><h3>Student Detail form</h3></td>
  </tr>
  <tr>
    <td height="10" colspan="2">Fill in all the details</td>
  </tr>
  <tr>
    <td height="10" colspan="2"><font color="#FF0000" size="+2"><?php echo $msg;?></font></td>
  </tr>
  <tr>
    <form method="post" action=""> <td width="142" height="46">Full Name <font color="red">*</font></td>
    <td width="298"><input name="name" type="text" size="40" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>"/></td>
  
  <tr>
    <td>Email<font color="red">*</font></td>
    <td><input name="email" type="email" size="40" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" /></td>
  </tr>
  <tr>
    <td height="24">Contact no.<font color="red">*</font></td>
    <td><input name="contact" type="text" size="40" value="<?php if(isset($_POST['contact'])) echo $_POST['contact'];?>" /></td>
  </tr>
  
    <tr>
      <td>Branch<font color="red">*</font></td>
      <td><select name="branch">
       <option value="" > </option>
        <option value="IT">INFORMATION TECHNOLOGY</option>
        <option value="CS"> COMPUTER SCIENCE</option>
        <option value="EC">ELECTRONICS & COMMUNICATION</option>
        <option value="EX"> ELECTRONICS & ELECTRICALS </option>
        <option value="ME">MECHANICAL ENGINEERING</option>
        <option value="CIVIL">CIVIL ENGINEERING</option>
        <option value="Other">OTHER</option>
      </select></td>
    </tr>
      <tr>
    <td>Sem/year</td>
    <td><select name="sem">
      <option value="1st" >1st Sem</option>
      <option value="2ns"> 2nd Sem</option>
      <option value="3rd">3rd Sem</option>
      <option value="4th">4th Sem </option>
      <option value="5th">5th Sem</option>
      <option value="6th">6th Sem</option>
      <option value="7th">7th Sem</option>
      <option value="8th">8th Sem</option>
     
    </select></td>
  </tr>
  <tr>
    <td>Address<font color="red">*</font></td>
    <td><input name="address" type="text" size="40" value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>" /></td>
  </tr>
    
    <tr>
     <td>DOB<font color="red">*</font></td>
     <td>
     <select size="1" name="day"  >
  <?php formDay(); 
  if(isset($_POST['day'])) echo $_POST['day'];?>
  </select>
  <select size="1" name="month">
  <?php formMonth(); 
  if(isset($_POST['month'])) echo $_POST['month'];
  ?>
  </select>
  <select size="1" name="year">
  <?php formYear(); 
  if(isset($_POST['year'])) echo $_POST['year'];
  ?>
        </select>
     <tr>
    <td>

</td>
    <td><input type="submit" name="save" class="button1" value="Save">
      <input type="submit" name="cancel" class="button2" value="Cancel" />
      <input type="submit" name="showvalue" class="button1" value="show" /></td>
    </form>
  </tr>
</table>
</body>
</html>
 <?php

function formDay()
{
  for($i=1; $i<=31; $i++){
  echo '<option value="'.$i.'">'.$i.'</option>'."\n";
  if(isset($_POST['day'])) echo $_POST['day'];
    }
}

function formMonth(){
    $month = strtotime('2011-01-01');
    $end = strtotime('2012-01-01');
    while($month < $end){
        echo '<option value="'.date('F', $month).'">'.date('F', $month).'</option>'."\n";
        $month = strtotime("+1 month", $month);
		if(isset($_POST['month'])) echo $_POST['month'];
    }
}

function formYear()
{
    for($i=1990; $i<=date('Y'); $i++){
        echo '<option value="'.$i.'">'.$i.'</option>'."\n";
    if(isset($_POST['year'])) echo $_POST['year'];
	}
}

?>