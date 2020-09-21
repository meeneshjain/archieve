<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
input[type="text"]
{
	border:1px solid gray;
}

</style>

<script>

function fun_validate()
{ 
	
//	var x=document.getElementById("name").value;
//	var y=document.getElementById("last").value;
//	var z=document.getElementById("email").value;
		var para=document.getElementById("para");
		var x =document.forms["Myform"]["name"].value;
		var y =document.forms["Myform"]["last"].value;
		var z =document.forms["Myform"]["email"].value;
		var no=document.forms["Myform"]["no"].value;
<?php /*?>	if(x=="" || y=="" || z=="")
	{
		para.innerHTML="Fill in all the elements";
		para.style.color="red";
		var x=document.getElementById("name").style.border="1px solid red";
		var x=document.getElementById("last").style.border="1px solid red";
		var x=document.getElementById("email").style.border="1px solid red";
		return false;
		
	}<?php */?>
	
/*	if(no=="")
	{
		para.innerHTML="Fill a Number";
		return false;
	}
	else if(isNaN(no)!=true)
	{
		para.innerHTML="not a number";
		return false;
	}
	else if(no.length<=10)
	{
		para.innerHTML="number to small";
		return false;
	}*/
	
	
	
	
	if(z!=null )
	{
		var at=z.indexof("@");
		var dot=z.indexof(".");
		if(at<4 || dot<at+4 || dot+2>=x.length)
		{
			para.innerHTML="email valid";
			return false;
		}
		else
		{
			para.innerHTML="email not valid";
			return false;
		}
	}
}


function reply_click(click_id)
{

	document.getElementById("click_id").style.border="1px solid black";
		
	alert(click_id);
}




</script>
</head>

<body>
<p id="para">Hello Welcome to the form</p>
<form name="Myform" onSubmit="return fun_validate()" method="post" >
<input type="text"  id="name" placeholder="first name" onFocus="reply_click(this.id)">
<input type="text"  id="last" placeholder="last name" onFocus="reply_click(this.id)">
<input type="text" id="email" placeholder="email" onFocus="reply_click(this.id)">
<input type="text " id="no" placeholder="Number" >

<input type="submit" value="Click">


</form>
</body>
</html>
