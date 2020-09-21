<?php
$i;
$con=mysql_connect("localhost","root","");
mysql_select_db('test',$con);
if(isset($_POST['submit']))
{
for($i=2;$i<=100;$i++)
{
$sql="INSERT INTO mydata VALUES('$i','Rohan','22','ranka mension')";
$res=mysql_query($sql);
if($res)
{
echo"value inserted";
}
}
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert</title>

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

</head>
<body bgcolor="grey">
<form name="myform" method="post" action="">

<div align="center"><input type="submit" name="submit" value="Insert values"class="button1" />
<input type="submit" name="show" value="Show values" class="button1" />
<input type="submit" name="showfew" value="Show few values " class="button1" />
<input type="submit" name="showlast" value="Show last values " class="button1" />
</div></form><br>
<?php 

if(isset($_POST['show']))
{
echo "<table border='1' align='center' width='50%' height='100%'>
<tr>
<th align='center'> id</th>
<th align='center' >name</th>
<th align='center'>age</th>
<th align='center'>address</th>
<th align='center'>   #  </th>

</tr>";
$con=mysql_connect("localhost","root","");
mysql_select_db('test',$con);
$sql2="SELECT * FROM mydata";
$res2=mysql_query($sql2);
while($row=mysql_fetch_array($res2))
{
echo"<tr>";
  echo "<td align='center'>" . $row['id'] . "</td>";
 echo "<td align='center' >" . $row['name'] . "</td>";
 echo "<td align='center'>" . $row['age'] . "</td>";
 echo "<td align='center'>" . $row['address'] . "</td>";
echo"<td align='center' width='25px'></td>"; 
echo"</tr>";

}
echo"<table>";

mysql_close($con);
}
?>
<?php

if(isset($_POST['showfew']))
{
echo "<table border='1' align='center' width='50%' height='100%'>
<tr>
<th align='center'> id</th>
<th align='center' >name</th>
<th align='center'>age</th>
<th align='center'>address</th>
<th align='center'>   #  </th>

</tr>";
$con=mysql_connect("localhost","root","");
mysql_select_db('test',$con);
$sql3="SELECT * FROM mydata WHERE id BETWEEN '1' AND '50'";
$res3=mysql_query($sql3);
while($row2=mysql_fetch_array($res3))
{
echo"<tr>";
  echo "<td align='center'>" . $row2['id'] . "</td>";
 echo "<td align='center' >" . $row2['name'] . "</td>";
 echo "<td align='center'>" . $row2['age'] . "</td>";
 echo "<td align='center'>" . $row2['address'] . "</td>";
echo"<td align='center' width='25px'></td>"; 
echo"</tr>";

}
echo"<table>";

mysql_close($con);
}
?>
<?php

if(isset($_POST['showlast']))
{
echo "<table border='1' align='center' width='50%' height='100%'>
<tr>
<th align='center'> id</th>
<th align='center' >name</th>
<th align='center'>age</th>
<th align='center'>address</th>
<th align='center'>   #  </th>

</tr>";
$con=mysql_connect("localhost","root","");
mysql_select_db('test',$con);
$sql4="SELECT * FROM mydata ORDER BY id LIMIT 10";
$res4=mysql_query($sql4);
while($row2=mysql_fetch_array($res4))
{
echo"<tr>";
  echo "<td align='center'>" . $row2['id'] . "</td>";
 echo "<td align='center' >" . $row2['name'] . "</td>";
 echo "<td align='center'>" . $row2['age'] . "</td>";
 echo "<td align='center'>" . $row2['address'] . "</td>";
echo"<td align='center' width='25px'></td>"; 
echo"</tr>";

}
echo"<table>";

mysql_close($con);
}
?>
</body>

</html>