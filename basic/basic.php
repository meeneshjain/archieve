<?php
echo"<table align='center' width='100%' border='0'>";
echo"<tr><th>post increment</th><th>pre increment</th><th>post decrement</th><th>pre decrement</th></tr>";
echo"<tr>";
echo"<td>";
	for($i=0; $i<=20; $i++)
	{
			echo" first post increment is = ". $i;	
			echo"<br/>";	

	}
	echo"</td>";
	echo"<td>";

		for($k=0;$k<20;++$k)
	{
			echo"third pre-increment  = ". $k;
			echo"<br/>";
	}
	echo"</td>";
	echo"<td>";
	
	for($j=20; $j>=0; $j--)
	{
	
			echo" second post decrement  = ". $j;
			echo"<br/>";
	}
	echo"</td>";
	echo"<td>";
	for($l=20;$l>=0;--$l)
	{
		
			echo"fourth pre-decrement loop = ". $l;
			echo"<br/>";
	
	}
echo"</tr>";
echo"</table>";

?>