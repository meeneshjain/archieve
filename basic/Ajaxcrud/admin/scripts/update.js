function update(page,response)
{
	var name = document.getElementById('name').value;
	var lastname = document.getElementById('lastname').value;
	var email = document.getElementById('email').value;
	var mobile= document.getElementById('mobile').value;
	var id= document.getElementById('id').value;
	alert(id);
	var url='update.php';
		var params = "id="+id+"&name="+name+"&lastname="+lastname+"&email="+email+"&mobile="+mobile;
		alert(params);
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
