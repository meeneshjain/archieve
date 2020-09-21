<?php
include('../config.php');
$select = 'Select * from myTable';
$query=mysql_query($select) or die("error");
?>

<html>
<head>
<script>
		
		function fun(str)
		{
			if(str=="")
			{
				document.getElementById("para").innerHTML=" ";
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
			xmlhttp.open("GET","suggestion.php?id="+str,true);
			xmlhttp.send();
		}
</script>
</head>
<body></body>
Select One Option : - <select name="name_select" onchange="fun(th
)">
		<option value=''>Select one option</option>
<?php while($row=mysql_fetch_array($query))
{?>
	
		<option value='<?php echo $row['id'];?>'><?php echo $row['Name'];?></option>
	

<?php } ?>	
</select>
<p id="para"></p>
</body>
</html>
