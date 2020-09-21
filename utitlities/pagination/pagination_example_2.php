<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include('connect.php');
$firstpage=1;
$select="SELECT * FROM admission";
$result=mysql_query($select);
$total=mysql_num_rows($result);
$per_page=5;
$total;
$lastpage=ceil($total/$per_page);


if(isset($_GET['page']))
{
	$page=$_GET['page'];
	$start = ($page - 1) * $per_page; 
	
}
else
{
	$page=1;
	$start=0;
}
$previous=$page-1;
$next=$page+1;

$select2="SELECT * FROM admission  LIMIT $start,$per_page";
$result2=mysql_query($select2);

while($rows=mysql_fetch_array($result2))
{
echo $rows['id'];
echo '<br>';	
	
}

if($previous>=1)
{
	echo '<a href="?page='.$previous.'">previous</a>';
}
$i=1;
while($i<=$lastpage)
{
	
	echo '&nbsp;<a href="?page='.$i.'">'.$i.'</a>&nbsp;';
	$i++;
	
}

if($next<=$lastpage)
{
	echo '<a href="?page='.$next.'">Next</a>';
}

?>
</body>
</html>