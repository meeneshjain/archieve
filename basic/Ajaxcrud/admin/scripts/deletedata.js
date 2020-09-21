function deletedata(id,tablename,rowid)
{	
	//var id = document.getElementById('id').value;
	//var tablename= document.getElementById('tablename').value;
	//var email = document.getElementById('email').value;
	//var mobile= document.getElementById('mobile').value;
	//var id= document.getElementById('id').value;
	var url='delete.php';
		var params = "id="+id+"&tablename="+tablename;
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
					//alert(xmlhttp.responseText);
					//document.getElementById('loading').style.display = 'none';
					document.getElementById(rowid).style.display = 'none';
					//document.getElementById('response').innerHTML =xmlhttp.responseText;
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
