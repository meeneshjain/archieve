<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
function f1()
{
	$i=$j=1;
	for($i=1; $i<=10; $i++)
	{
		
		for($j=1;$j<=$i;$j++)
		{
			document.write("*");	
		}
		document.write("<br>");	
	}
	$k=$r=1;
	for($k=10; $k>=1;$k--)
	{
		for($r=1;$r<=$k;$r++)
		{
			document.write("*");	
		}
		document.write("<br>");	
	}
}
</script>
</head>

<body>
<button name="button" onClick="f1()">click me</button>

</body>
</html>