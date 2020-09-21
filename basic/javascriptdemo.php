<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
function myFunction()
{
var x=document.forms["myForm"]["name"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
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


</body>
</html>
