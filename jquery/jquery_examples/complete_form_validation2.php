<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Complete form with Jquery Validation </title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<style>
input[type="text"],input[type="password"]
{
	width:279px;
	height:43px;
	outline:none;
	color:black;
	font-size:24px;
	padding-left:50px;
	border:1px dashed gray;
	
}
label
{
	width:279px;
	height:43px;
	position:relative;
}
   .myButton {
        
        -moz-box-shadow:inset 0px 1px 0px 0px #7a8eb9;
        -webkit-box-shadow:inset 0px 1px 0px 0px #7a8eb9;
        box-shadow:inset 0px 1px 0px 0px #7a8eb9;
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #637aad), color-stop(1, #5972a7));
        background:-moz-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-webkit-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-o-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-ms-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:linear-gradient(to bottom, #637aad 5%, #5972a7 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#637aad', endColorstr='#5972a7',GradientType=0);
        
        background-color:#637aad;
        
        border:1px solid #314179;
        
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:13px;
        font-weight:bold;
        padding:12px 27px;
        text-decoration:none;
        
    }
    .myButton:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5972a7), color-stop(1, #637aad));
        background:-moz-linear-gradient(top, #5972a7 5%, #637aad 100%);
        background:-webkit-linear-gradient(top, #5972a7 5%, #637aad 100%);
        background:-o-linear-gradient(top, #5972a7 5%, #637aad 100%);
        background:-ms-linear-gradient(top, #5972a7 5%, #637aad 100%);
        background:linear-gradient(to bottom, #5972a7 5%, #637aad 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5972a7', endColorstr='#637aad',GradientType=0);
        
        background-color:#5972a7;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }
i
{
margin-left: 10px;
position: absolute;
font-size: 24px;
top: -5px;
color:#A9A9A9;
border-right:1px solid #ddd;
padding-right:5px;
padding-top:0px;
}
</style>

 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="jquery-2.0.3.js"></script>
   <script>
   		$(document).ready(function(){
			
			$("input").keyup(function(){
				$y= $(this).val();
				
					if($y=="")
					{
						$("#error").text("field should be filled out").css({"color":"red"});;						
						$(this).css({"border":"1px dashed red"});
						$(this).parent().find("i").css({"color":"red"});
					}
					else
					{
						$fullname=$("#full_name").val();
						$email=	$("#email_id").val();				
						$phone=$("#phone").val();
						$password=$("#Password").val();
						$repassword=$("#password2").val();
						
						if($fullname.length<=6)
						{
							$("#error").text("to short..! ").css("color","red")
							$(this).css({"border":"1px dashed red","color":"red"});				
							$(this).parent().find("i").css({"color":"red"});
						}
						else
						{
							$("#error").text("Perfect...!").css("color","Green");
							$(this).css({"border":"1px dashed green","color":"green"});				
							$(this).parent().find("i").css({"color":"green"});
						}

					}

				});
			
		});
   </script>
</head>

<body>
<div id="form1">
<form id="form1" name="form1" method="post">
  <table width="788" height="375" border="0" align="center">
    <tr align="center">
      <td><span id="error"> </span></td>
    </tr>
    <tr align="center">
      <td><label><i class="icon-user" id="user_icon"></i><input name="full_name" type="text" id="full_name" placeholder="Full Name" title="Full Name" maxlength="55" ></label></td>
    </tr>
    <tr align="center">
      <td><label><i class="icon-envelope"></i><input name="email_id" type="text" placeholder="Email Address" title="Email Address" maxlength="70" id="email_id"></label> <span id="error2"> </span> </td>
    </tr>
    <tr align="center">
      <td><label><i class="icon-key"></i><input name="Password" type="password" id="Password" placeholder="Password" title="password" maxlength="26" ></label> <span id="error3"> </span></td>
    </tr>
    <tr align="center">
      <td><label><i class="icon-key"></i><input name="password2" type="password" id="password2" placeholder="Re-enter Password" title="re-enter Password" maxlength="26"></label> <span id="error4"> </span></td>
    </tr>
    <tr align="center">
      <td><label><i class="icon-phone-sign"></i><input name="phone" type="text" id="phone" placeholder="Mobile" title="Mobile number"></label> <span id="error5"> </span></td>
    </tr>
    <tr align="center" >
      <td height="64"><div align="center"><input type="submit" class="myButton"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</div>
</body>
</html>