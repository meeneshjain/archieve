<html>
<head>
<title>contact form</title>
<script>
function validateform()
{
var f=document.forms["contact"]["fname"].value;
var a=document.forms["contact"]["age"].value;
var c=document.forms["contact"]["contact"].value;

if(f==null || f=="")
{
	alert("first name field empty");
	return false;
} 
else if(a==null || a=="")
{
	alert("age  field empty");
	return false;
} 
else if(a==null || a=="")
{
	alert("contact no. field empty");
	return false;
} 


}

</script>

</head>
<body bgcolor="grey">
<div align="center"><h1>Contact form<h1></div>


<table widht="40%" align="center" >
<tr>
<td>
<fieldset>
<legend>Contact form</legend>
<font color="red">fill all the fields</font><br/><br/>
<form name="contact" method="post" action="contacthelper.php"  onsubmit="return validateform()"  >

Name : <input type="text" name="fname" value="" maxlength="25" size="25"/><br/><br/>
Age  : 	<input type="text" name="age" value="" maxlength="25" size="25"/><br/><br/>
contact : <input type="text" name="contact" value="" maxlength="25" size="25"/><br/> <br/>
		<input type="hidden" name="id" value="" maxlength="25"/><br/>
		<div align="center"><input type="reset" name="reset" value="reset" />
		<input type="submit" name="enter" value="enter"/></div>
		
</form>		

</fieldset>
</td>
</tr>
</table>



<body>
</html>
