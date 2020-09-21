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
<style>
body
{
background-image:url('wood3.jpg');
}

table, th, td
{

border-collapse:collapse;
vertical-align:middle;

}
table tr:hover td
{
background-color:#A52A2A ;
color:black;
}
table th
{
color:black;
size=22px;
width=30px;
}
.button1{
	display: inline-block;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	padding: 15px 15px;
	text-decoration: none;
	background-color:#D2691E;
}

.button1:hover
{
background-color:#A52A2A;
}
tr:nth-child(odd)		{ background-color:#eee; }
tr:nth-child(even)		{ background-color:#fff; }
</style>
</head>
<body bgcolor="grey">
<form name="myform" method="post" action="">

<div align="center"><input type="submit" name="submit" value="Insert values"class="button1" />
<input type="submit" name="show" value="Show values" class="button1" />
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
</body>

</html>