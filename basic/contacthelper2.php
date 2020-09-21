<?php 
$msg1="";
$date=$_POST['day'].$_POST['month'].$_POST['year'];
if($date=="")
{
header('Location:contact2.php');
$msg1="fill the date of birth";
}
{

}




?>
<html>
<head><title>contact form 2 helper</title></head>
<style>
body
{
	background:#D0D2D0;
}
.border2
{
	  width: 45%;
      padding-top: 8px;
      padding-bottom: 10px;
      margin: 0 auto 20px auto;
      border-radius: 15px;    
      color: #446bb3;
      padding:5px;
		
}
</style>
<body>
<form name='myform' onsubmit=' ()' action='contact2.php' method='post' >
<?php 
echo"<table width='80%' height='466' border='0' class='border2' bgcolor='#FFFFFF' align='center' >
  <tr>
    <td height='66' colspan='4' valign='top'><h2>Contact form </h2>
    <font color='#FF0000'>please fill in all the details</font></td>
  </tr>
  <tr>
  <td width='71' height='45'>First Name :</td>
   
    <td width='120' height='45'>".$_POST['fname']."</td>
    <td width='70' height='45'>Last Name :</td>
    <td width='138' height='45'>".$_POST['lname']."</td>
  </tr>
  <tr>
    <td height='45'>Date of Birth :</td>
    <td height='45'>".$_POST['day']."".$_POST['month']."".$_POST['year']."</td>
    <td height='45'>Age :</td>
    <td height='45'>".$_POST['age']."</td>
  </tr>
  <tr>
    <td height='45'>Mobile no. :</td>
    <td height='45'>".$_POST['mno']."</td>
    <td height='45'>Email :</td>
    <td height='45'>".$_POST['email']."</td>
  </tr>
  <tr>
    <td height='45'>Education :</td>
    <td height='45'>".$_POST['edu']."</td>
    <td height='45'>Occupation :</td>
    <td height='45'>".$_POST['ocu']."</td>
  </tr>
  <tr>
    <td height='45'>Date of Joining :</td>
    <td height='45' colspan='3'>".$_POST['doj']."</td>
    </tr>
  <tr>
    <td height='45'>Permanent Address :</td>
    <td height='45' colspan='3'>".$_POST['peradd']."</td>
  </tr>
  <tr>
    <td height='45'>Temporary Address :</td>
    <td height='45' colspan='3'>".$_POST['temadd']."</td>
  </tr>
  <tr>
    <td height='21' colspan='4'><input type='hidden' name='submit' value=''size='60'   /></td>
    </tr>
  <tr>
    <td height='41' colspan='4' align='center' valign='top'><input type='submit' name='back' value='Back'  size='20'/> 
   </td>
  </tr>
</table>";
?>
 </form>
</body>
<?php
echo "Zend engine version: " . zend_version();
?>