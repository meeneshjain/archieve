<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<script>
	function fun(str)
		{
			if(str=="")
			{
				document.getElementById("para").innerHTML="";
				return false;
			}
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("para").innerHTML=xmlhttp.responseText;
		
				}
				
			}
			xmlhttp.open("GET","sug.php?id="+str,true);
			xmlhttp.send();
	}
	</script>


</head>

<body>
	<form method="post" action="suggestion_box.php">
	Name : <input type="text" name='fname' value="" placeholder=' write name for suggestion' onkeyup="fun(this.value)" autocomplete="off">
<!--	<input type="submit" name="btn" Value="click me " onclick=fun(this.value)> -->
	<br>
	<p id="para"></p>
	</form>
</body>

</html>
