<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<style>
	input[type='text'], 
	{
		margin-left: 32px;
	}
	input[type='password']
	{
		margin-left: -5px;
	}
	label
	{
		width:50px;
		height:20px;
		margin:10px;
		padding:5px;
	}
	 #form
	{
		width:350px;
		border:1px solid #303030;
		margin:0 auto;
		padding:2px;
		background:#eeeeee;
		box-shadow:1px 2px 3px #303030;
	}
	p
	{
		color:red;
		margin-left: 79px;
		height: 2px;
		margin-top: 0px;
	}
	h1
	{
		
		background:#303030;
		color:white;
		//margin:0 auto;
		padding:3px;
	}
	.btn
	{
		background-color: #e5e5e5;
		background-image: none;
		filter: none;
		border: 0;
		padding: 7px 14px;
		font-family: "Segoe UI", Helvetica, Arial, sans-serif;
		font-size: 14px;
		color: #333333;
		cursor: pointer;
		outline: none;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		box-shadow: none !important;
		-webkit-border-radius: 0 !important;
		-moz-border-radius: 0 !important;
		border-radius: 0 !important;
		-webkit-text-shadow: none;
		-moz-text-shadow: none;
		text-shadow: none;
	}
	.btn.blue
	 {
		color: white;
		text-shadow: none;
		background-color: #4d90fe;
	}
	.btn.red 
	{
		color: white;
		text-shadow: none;
		background-color: #d84a38;
	}
	#result,#link
	{
		color:green;
		font-weight:bold;
	}
	</style>

<script src="jquery_2.0.3.js"></script>
<script>
	$(document).ready(function(){
		$("#reg_form").submit(function(){
			var fname = $("#reg_form input[name='name']").val();
			var email=$("#reg_form input[name='email']").val();
			var pass=$("#reg_form input[name='pass']").val();
			var repass=$("#reg_form input[name='repass']").val();
			var phone=$("#reg_form input[name='phn']").val();
			var age=$("#reg_form input[name='age']").val();
			 var addr=$("#reg_form input[name='addr']").val();
			var not_submit=1;
			if(fname =="")
			{
				$("#name_para").text("field left empty");
				not_submit=0;
			}	
			if(email =="")
			{
				$("#email_para").text("field left empty");
				not_submit=0;
			}		
			if(pass =="")
			{
				$("#pass_para").text("field left empty");
				not_submit=0;
			}
			if(repass =="")
			{
				$("#repass_para").text("field left empty");
				not_submit=0;
			}	
			if(phone =="")
			{
				$("#ph_para").text("field left empty");
				not_submit=0;
			}
			if(age =="")
			{
				$("#age_para").text("field left empty");
				not_submit=0;
			}
			if(addr =="")
			{
				$("#address_para").text("field left empty");
				not_submit=0;
			}
			if(pass!=repass)
			{
				$("#repass_para").text("Password didnt match");
				not_submit=0;
			}
			if(not_submit==0)
			{
				return false;
			}
			if(not_submit==1)
			{
			var data=[fname,email,phone,age,addr,repass];
				$.ajax({							
				type: 'POST', 
				url: 'insert.php?data='+data,
				success:function(result)
				{
					$("#result").fadeIn("slow",function(){
						$('#result').html(result);
						});
					$('.btn').fadeOut("slow",function(){
						$('#result').fadeOut("slow");
						$("#link").html("<a href='#'>Click here</a> to login<br> <a href='#' id='click_register'>Click here </a> to register");
						});
				}});
				return false;
			}
				
		});
		
		$('#click_register').click(function(){
			alert();
			});
		
	});
</script>

</head>

<body>
	<div id="form"> 
	<h1>Registration Form</h1>
	<form method="POST" id="reg_form">
		<p id="all_common"></p>
	<div ><label >Name : </label><input type="text" value="" name="name" id=""><p id="name_para"></p></div>
	<br>
	<div ><label >Email :</label> <input type="text" value="" name="email" id="" placeholder="example@something.com"><p id="email_para" ></p></div>
	<br>
	<div ><label >password :</label> <input type="password" value="" name="pass"   placeholder="*******"  id=""><p id="pass_para"></p></div>
	<br>
	<div ><label >Re-Password :</label> <input type="password" value="" name="repass" placeholder="*******" id=""><p id="repass_para"></p></div>
	<br>
	<div ><label >Phone :</label> <input type="text" value="" name="phn" id=""><p id="ph_para"></p></div>
	<br>
	<div ><label >Age : </label><input type="text" value="" name="age" id=""><p id="age_para"></p></div>
	<br>
	<div ><label >Address :</label> <input type="text" value="" name="addr" id=""><p id="address_para"></p></div>
	<br>
	<div align="center" ><input type="submit" value="SUBMIT" name="" id="submit" class='btn blue'> &nbsp; 
	<input class='btn red' type="reset" value="RESET" name="" id="reset"> </div>
	<p id="result"></p>
	<p id="link"></p>
	
	</form>
	
	<br><br>
	</div>
</body>

</html>
