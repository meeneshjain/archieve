
<html>
<head>
	<title>hello world</title>

	<script>
	/*	function ajax_load()
		{
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				//for all major browsers 
				xmlhttp= new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readystate==4 && xmlhttp.status==200)
				{
						document.getElementById("myh1").innerhtml=xmlhttp.responseText;
				}				
			}
			xmlhttp.open("GET","jquery_traversing.html",true);
			xmlhttp.send();
		}
	*/
	
			function ajaxloaddemo()
			{
			var xmlhttp;
			if (window.XMLHttpRequest)
			  {
				  
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById("myh1").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","meenesh.txt",true);
			xmlhttp.send();

			}
	</script>
</head>
	<body>
		<p>let ajax change this content </p>
		<div id="myDiv">
			click on "hello world" 
				<h1 id='myh1'>Hello World </h1> 
				<button name="btn" onclick="ajaxloaddemo()" >Click ME</button>
		  </div>

	</body>
</html>
