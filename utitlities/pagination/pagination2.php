<?php
$connect=mysql_connect('localhost','root','') or die(mysql_error());
$db=mysql_select_db('eschool',$connect) or die(mysql_error());
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

$firstpage=1;

$per_page=10;

$select = "Select * from admission";
$result=mysql_query($select) or die("error");
$total= mysql_num_rows($result);
$total;
 $lastpage = ceil($total/$per_page);
if(isset($_POST['page']))
{
	$page = $_GET['page'];
}
else
{
	$page = 1;
	$start = 0;
}
$previous = $page -1; 
$next = $page +1;

$select1 = "select * from admission LIMIT $start,$per_page";
$result1=mysql_query($select1);
while($rowss = mysql_fetch_array($result1))
{
	echo $rowss['id'].'<br>';
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