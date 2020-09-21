
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact  form  2</title>
<style>
body
{
	background:grey;
}
.border2
{
	  width: 70%;
      padding-top: 8px;
      padding-bottom: 10px;
      margin: 0 auto 20px auto;
      border-radius: 15px;    
      color: #446bb3;
      padding:5px;
		
}
</style>
<script>
function validform()
{
var x=document.forms["myform"]["fname"].value;
var y=document.forms["myform"]["lname"].value;


if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
 if (y==null || y=="")
  {
  alert("Last name must be filled out");
  return false;
  }
  
  var z=document.forms["myform"]["day"].value;
   if (z==null || z=="")
  {
  alert("date of birth must be filled out");
  return false;
  }
var a=document.forms["myform"]["age"].value;
 if (a==null || a=="")
  {
  alert("age must be filled out");
  return false;
  }
var b=document.forms["myform"]["mno"].value;
 if (b==null || b=="")
  {
  alert("please enter your Mobile no ");
  return false;
  }
var c=document.forms["myform"]["email"].value;
 if (c==null || c=="")
  {
  alert("Enter a valid Email Address");
  return false;
  }
var d=document.forms["myform"]["edu"].value;
 if (d==null || d=="")
  {
  alert("Education must be filled out");
  return false;
  }
var e=document.forms["myform"]["ocu"].value;
 if (e==null || e=="")
  {
  alert("Occupation must be filled out");
  return false;
  }
  
  var h=document.forms["myform"]["doj"].value;
 if (h==null || h=="")
  {
  alert("Date of joining be filled out");
  return false;
  }
var f=document.forms["myform"]["peradd"].value;
 if (f==null || f=="")
  {
  alert("premanent address must be filled out");
  return false;
  }
var g=document.forms["myform"]["treadd"].value;
 if (g==null || g=="")
  {
  alert("temporary Address must be filled out");
  return false;
  }

}



</script>
</head>

<body>
<?   echo $msg1;?>
<form name="myform" onsubmit="return validform()" action="contacthelper2.php" method="post" >
<table width="80%" height="466" border="0" class="border2" bgcolor="#FFFFFF" align="center" >
  <tr>
    <td height="66" colspan="4" valign="top"><h2>Contact form </h2>
    <font color="#FF0000">please fill in all the details</font></td>
  </tr>
  <tr>
  <td width="71" height="45">First Name :</td>
   
    <td width="120" height="45"><input type="text" name="fname" value="" size="20" maxlength="10"  /></td>
    <td width="70" height="45">Last Name :</td>
    <td width="138" height="45"><input type="text" name="lname" value="" size="20" maxlength="10" /></td>
  </tr>
  <tr>
    <td height="45">Date of Birth :</td>
    <td height="45"><select name="day">
             <?php formDay();   ?>
            </select>
              <select name="month">
               <?php formMonth();  ?>
              </select>
              <select name="year">
               <?php formYear(); ?>
              </select></td>
    <td height="45">Age :</td>
    <td height="45"><select name="age"><?php echo age();?></select></td>
  </tr>
  <tr>
    <td height="45">Mobile no. :</td>
    <td height="45"><input type="text" name="mno" value="" size="20" maxlength="10" /></td>
    <td height="45">Email :</td>
    <td height="45"><input type="email" name="email" value="" size="20" maxlength="30" /></td>
  </tr>
  <tr>
    <td height="45">Education :</td>
    <td height="45"><input type="text" name="edu" value=""  size="20" maxlength="10"/></td>
    <td height="45">Occupation :</td>
    <td height="45"><input type="text" name="ocu" value="" size="20" maxlength="10"  /></td>
  </tr>
  <tr>
    <td height="45">Date of Joining :</td>
    <td height="45" colspan="3"><input type="text" name="doj" value="" maxlength="10"  size="20"/></td>
    </tr>
  <tr>
    <td height="45">Permanent Address :</td>
    <td height="45" colspan="3"><input type="text" name="peradd" value="" size="60" maxlength="60" /></td>
  </tr>
  <tr>
    <td height="45">Temporary Address :</td>
    <td height="45" colspan="3"><input type="text" name="temadd" value=""size="60" maxlength="60"   /></td>
  </tr>
  <tr>
    <td height="21" colspan="4"><input type="hidden" name="submit" value=""size="60"   /></td>
    </tr>
  <tr>
    <td height="41" colspan="4" align="center" valign="top"><input type="submit" name="Submit" value="Submit"  size="20"/> 
    <input type="reset" name="reset" value="reset" /></td>
  </tr>
</table>
 </form>
</body>
</html>
<?php
function age()
{
$i=1;
echo "<option value=''>age</option>";
for($i=1;$i<=110;$i++)
{
echo"<option value='$i'>".$i."</option>";
}
}
function formDay()
{
	$i;
	echo "<option value=''>Day</option>";
  for($i=1; $i<=31; $i++)
  {
  echo "<option value=''>".$i."</option>";
  
    }
}

function formMonth(){
    $month = strtotime('2012-01-01');
    $end = strtotime('2013-01-01');
    echo "<option value=''>month</option>";
	while($month < $end){
        echo '<option value="'.date('F', $month).'">'.date('F', $month).'</option>'."\n";
        $month = strtotime("+1 month", $month);
		
    }
}

function formYear()
{
echo "<option value=''>Year</option>";
    for($i=1990; $i<=date('Y'); $i++){
        echo '<option value="'.$i.'">'.$i.'</option>'."\n";
   
	}
}
?>