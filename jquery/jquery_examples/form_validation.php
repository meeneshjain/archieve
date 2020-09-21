<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
#form1 span
{
	color:red;
}
div
{
	margin:0 auto;
}
</style>
<script src="jquery-2.0.3.js"></script>
<script>
	$(document).ready(function(){
		
		$("form#form1 input[name=submit]").click(function(){
			
			var name=$("form#form1 input[name='name']").val();
			var fname=$("form#form1 input[name='fname']").val();
			var email=$("form#form1 input[name='email']").val();
			var phn=$("form#form1 input[name='phn']").val();
			var pwd=$("form#form1 input[name='pswd']").val();
			var rpsw=$("form#form1 input[name='rpswd']").val();
			var phn_regex=/^[0-9]{10,12}$/;
			var validation_form =0;
			
			if(name=="")
			{
				$("#name_required").html("this field is required ");
				validation_form=1;
				
			}
			
			if(fname=="")
			{
				$("#fname_required").text("this field is required");
				validation_form=1;
			}
			if(email=="")
			{
				$("#email_required").text("this field is required");
				validation_form=1;
			}
			if(phn=="")
			{
				$("#phn_required").text("this field is required ");
				validation_form=1;
			}
			else 	
			{
				if(!phn.match(phn_regex))
				{
					$("#phn_required").text("number invalid ");
					validation_form=1;
					
				}
				else
				{
					$("#phn_required").text("number valid ");
					validation_form=1;
				}
				
			}
			if(pwd=="")
			{
				$("#pswd_required").text("this field is required");
				validation_form=1;
			}
			if(rpsw=="")
			{
				$("#rpswd_required").text("this field is required");
				validation_form=1;
			}
			
			if(pwd!="" && rpsw!="")
			{
				if(pwd!=rpsw)
				{
					$("#pswd_required").text("");
					$("#rpswd_required").text("password didnt match...! ");	
				}
				
				
			}
	
			if(validation_form==1)
			{
				//return false;
				event.preventDefault();
			}
	});
		
	
	
	
		$("form#form1 input[type='text']").blur(function(){
			
			
			});
		});

</script>
</head>

<body>
<div>
<form id="form1" name="form1" method="post">
  <table width="506" height="425" border="0">
    <tr>
      <td width="137">Name</td>
      <td width="359"><input type="text"  name="name" id="name"><span id="name_required"></span></td>
    </tr>
    <tr>
      <td>Father Name</td>
      <td><input type="text" name="fname" id="fname"><span id="fname_required"></span></td>
    </tr>
    <tr>
      <td><p>Email :</p></td>
      <td><input type="text" name="email" id="email"><span id="email_required"></span></td>
    </tr>
    <tr>
      <td>Phone/mobile :</td>
      <td><input type="text" name="phn" id="phn"><span id="phn_required"></span></td>
    </tr>
    <tr>
      <td>Password :</td>
      <td><input type="text" name="pswd" id="pswd"><span id="pswd_required"></span></td>
    </tr>
    <tr>
      <td>Re-enter Password</td>
      <td><input type="text" name="rpswd" id="rpswd"><span id="rpswd_required"></span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit">
      <input type="reset" name="reset" id="reset" value="Reset"></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>