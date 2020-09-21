function save(page,response)
{alert(page);
	var name = document.getElementById('name').value;
	var lastname = document.getElementById('lastname').value;
	var email = document.getElementById('email').value;
	var mobile= document.getElementById('mobile').value;
	alert(name);
	if (name==null || name=="")
  	{
 		alert("Fill the name field");
 		return false;
 	}
	if (lastname==null || lastname=="")
  	{
 		alert("Fill the Lastname field");
 		return false;
 	}
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  	{
  		alert("Enter the valid e-mail address");
  		return false;
  	}	
  	if(mobile.length!=10)
	{
		alert("Enter valid Mobile Number");
		return false;
	}
	var numericExpression = /^[0-9]+$/;
	if(mobile.match(numericExpression))
	{
		var url=page;
		var params = "name="+name+"&lastname="+lastname+"&email="+email+"&mobile="+mobile;
		//alert(params);
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() 
		{				
			if (xmlhttp.readyState < 4)
			{
				document.getElementById('loading').style.display = 'block';
			}
			if(xmlhttp.readyState == 4)
			{
				if(xmlhttp.status == 200)
				{
					//alert(xmlhttp.responseText);
					
					document.getElementById('loading').style.display = 'none';
					document.getElementById('response').innerHTML =xmlhttp.responseText;
				}								
				else 
				{
					alert('Page Not Found');
				}
			}
		}
		xmlhttp.open("POST",url,true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.setRequestHeader("Content-length", params.length);
		xmlhttp.setRequestHeader("Connection", "close");
		xmlhttp.send(params);
	}
}
							
							

