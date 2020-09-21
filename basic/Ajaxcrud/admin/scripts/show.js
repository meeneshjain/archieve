function showData(page,response)
{		
		var url=page;
		var params = "id="+1;
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
				
			}
			if(xmlhttp.readyState == 4)
			{
				if(xmlhttp.status == 200)
				{
					document.getElementById(response).innerHTML=xmlhttp.responseText;
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
