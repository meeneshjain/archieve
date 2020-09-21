<!DOCTYPE HTML >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Information Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
function myFunction()
{
alert("this is not a validation");
var x=document.forms["myForm"]["name"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
  
  }
  var y=document.forms["myForm"]["lname"].value;
if (y==null || y=="")
  {
  alert("Last name must be filled out");
  return false;
  }
   var z=document.forms["myForm"]["faname"].value;
if (z==null || z=="")
  {
  alert("Fathers name must be filled out");
  return false;
  }
   var d=document.forms["myForm"]["day"].value;
   var m=document.forms["myForm"]["month"].value;
      var y=document.forms["myForm"]["year"].value;
if (d==null || d=="" && m==null || m=="" && y==null || y=="")
  {
  alert("Date of Birth must be filled out");
  return false;
  }
   var m=document.forms["myForm"]["mno"].value;
if (m==null || m=="")
  {
  alert("Mobile Number must be filled out");
  return false;
  }
  
   var tempadd=document.forms["myForm"]["tempadd"].value;
if (tempadd==null || tempadd=="")
  {
  alert("Tempory Address must be filled out");
  return false;
  }
     var permadd=document.forms["myForm"]["permadd"].value;
if (permadd==null || permadd=="")
  {
  alert("Permanent Address must be filled out");
  return false;
  }
  var email=document.forms["myForm"]["email"].value;
if (email==null || email=="")
  {
  alert("Email Address must be filled out");
  return false;
  }
    var email=document.forms["myForm"]["email"].value;
if (email==null || email=="")
  {
  alert("Email Address must be filled out");
  return false;
  }
  
      var ocu=document.forms["myForm"]["ocu"].value;
if (ocu==null || ocu=="")
  {
  alert("Occupation must be filled out");
  return false;
  }
      var edu=document.forms["myForm"]["edu"].value;
if (edu==null || edu=="")
  {
  alert("Education must be filled out");
  return false;
  }
  if (doj==null || doj=="")
  {
  alert("Date of Joining	 must be filled out");
  return false;
  }
  



}
</script> 

</head>

<body bgcolor="#0099FF" text="#000000" title="Information Form">
<form name="myform" action="" method="post" target="" onSubmit="return myFunction()">
<div align="center">
<table width="78%" bgcolor="#FFFFFF" height="59%" id="border1" >
<tr> <td height="22" colspan="4" align="left" valign="top"><h2>Information Form 
</h2></td>
</tr>
<tr>
  <td height="29" colspan="4" align="left" valign="top"><h4>Fill in all the details <br>
     	(<font color="#FF0000">*</font>) are m andatory fields 
        <div align="center"></div> </h4></td>
</tr>
<tr>
  <td width="122" valign="top">First Name <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top"><input type="text" name="name" value="" size="30" maxlength="20" class="asa"   /></td>
  <td width="93" valign="top">Last Name <font color="#FF0000">*</font> </td>
  <td width="180" height="21" valign="top"><input type="text" name="lname" value="" size="30" maxlength="20" class="asa"   /></td>
</tr>
<tr>
  <td width="122" valign="top">&nbsp;</td>
  <td width="180" height="21" valign="top"><font color="#FF0000"></font></td>
  <td width="93" valign="top">&nbsp;</td>
  <td width="180" height="21" valign="top"><font color="#FF0000"></font></td>
</tr>
<tr>
  <td width="122" valign="top">Fathers Name <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top"><input type="text" name="faname" value="" size="30" maxlength="30" class="asa"  /></td>
  <td width="93" valign="top">Date of Birth <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top">
  				<select name="day">
             <?php formDay();   ?>
            </select>
              <select name="month">
               <?php formMonth();  ?>
              </select>
              <select name="year">
               <?php formYear(); ?>
		  </select>		</td>
</tr>
<tr>
  <td width="122" valign="top">&nbsp;</td>
  <td width="180" height="21" valign="top"><font color="#FF0000"><</font></td>
  <td width="93" valign="top">&nbsp;</td>
  <td height="21" valign="top"><font color="#FF0000"></font></td>
</tr>

<tr>
  <td width="122" height="21" valign="top">Cell Phone  <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top"><input type="text" name="mno" value="" size="30" maxlength="10"  class="asa"  /></td>
  <td width="93" height="21" valign="top">Alternate No. </td>
  <td width="180" height="21" valign="top"><input type="text" name="ano" value="" size="30" maxlength="10"  class="asa"  /></td>
</tr>
<tr>
  <td width="122" height="22" valign="top">&nbsp;</td>
  <td height="22" valign="top"><font color="#FF0000"></font></td>
  <td width="93" height="22" valign="top">&nbsp;</td>
  <td width="180" height="22" valign="top">&nbsp;</td>
</tr>
<tr>
  <td width="122" height="21" valign="top">Temporary Address <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top"><input type="text" name="tempadd" value="" size="30" maxlength="70" class="asa"   /></td>
  <td width="93" height="21" valign="top">Fixed Address <font color="#FF0000">*</font> </td>
  <td width="180" height="21" valign="top"><input type="text" name="permadd" value="" size="30" maxlength="70" class="asa"  /></td>
</tr>
<tr>
  <td width="122" height="22" valign="top">&nbsp;</td>
  <td height="22" valign="top"><font color="#FF0000"></font></td>
  <td width="93" height="22" valign="top">&nbsp;</td>
  <td width="180" height="22" valign="top"><font color="#FF0000"></font></td>
</tr>
<tr>
  <td width="122" height="21" valign="top">Email <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top"><input type="email" name="email" value="" size="30" maxlength="55" class="asa"   /></td>
  <td width="93" height="21" valign="top">Alternate Email </td>
  <td width="180" height="21" valign="top"><input type="email" name="aemail" value="" size="30" maxlength="55" class="asa"  /></td>
</tr>
<tr>
  <td width="122" height="22" valign="top">&nbsp;</td>
  <td height="22" valign="top"><font color="#FF0000"></font></td>
  <td width="93" height="22" valign="top">&nbsp;</td>
  <td width="180" height="22" valign="top">&nbsp;</td>
</tr>
<tr>
  <td width="122" height="21" valign="top">Occupation <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top"><input type="text" name="occu" value="" size="30" maxlength="20" class="asa"  /></td>
  <td width="93" height="21" valign="top">Education <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top"><input type="text" name="edu" value="" size="30" maxlength="20" class="asa"  /></td>
</tr>
<tr>
  <td width="122" height="22" valign="top">&nbsp;</td>
  <td height="22" valign="top"><font color="#FF0000"></font></td>
  <td width="93" height="22" valign="top">&nbsp;</td>
  <td width="180" height="22" valign="top"><font color="#FF0000"></font></td>
</tr>
<tr>
  <td width="122" height="22" valign="top">Date of Joining <font color="#FF0000">*</font></td>
  <td width="180" height="21" valign="top"><input type="text" name="doj" value="" size="30" maxlength="10" class="asa"  /></td>
  <td width="93" height="22" valign="top">Timing  </td>
  <td width="180" height="21" valign="top"><input type="hidden" name="timing" value="<?php  echo date('r'); ?>" size="30" maxlength="20" class="asa"  /><?php  //echo date('l jS \of F Y h:i:s A'); 
  echo date('r');
  ?></td>
</tr>
<tr>
  <td width="122" height="21" valign="top">&nbsp;</td>
  <td height="21" valign="top"><font color="#FF0000"></font></td>
  <td width="93" height="21" valign="top">&nbsp;</td>
  <td width="180" height="21" valign="top">&nbsp;</td>
</tr>
<tr>
  <td height="45" colspan="4" align="center">
  <input type="submit" name="submit" value="Submit"  size="30" 
  onclick="myFunction()" class="rounded-corners"/> 
  
  
  <input type="submit" name="select" value="View Entries"  size="30" class="rounded-corners"/>
  
  
  
    <input type="reset" name="reset" value="reset" class="rounded-corners" /></td>
  </tr>
<tr>
  <td colspan="4"></td>
</tr>

<tr><td colspan="4"></td></tr>
</table>
</div>
</form>
</body>
</html>
<?php
function formDay()
{
	$i;
	echo "<option value=''>Day</option>";
  for($i=1; $i<=31; $i++)
  {
  echo "<option value='".$i."'>".$i."</option>";
  
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


if(isset($_POST['select']))
{
	header('Location:select.php');
	
	
}
?>