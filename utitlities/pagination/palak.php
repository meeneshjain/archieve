<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
a
{
	display:inline-block;
	float:left;
	margin-left:20px;
	text-decoration:none;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<?php
mysql_connect("localhost","root");
mysql_select_db("eschool");	

//create pages

$limit=10;

$sql=mysql_query("Select * from admission");
 $num=mysql_num_rows($sql);
echo $num."<br><br>";


$total_pages=$num/$limit;
$i=1;

$next=$i+1;
echo $lastpage = ceil($total_pages/$limit)."<br><br>";	


if(isset($_GET['page']))
{
$page=$_GET['page'];
$prev="";
$prev=$page-1;

if($prev>=1)
{
?>
 <a href="my_page.php?page=<?php echo $prev;?>">Previous</a>
<?php
}
}
while($i<=$total_pages)
{
	?>
   
    <a href="my_page.php?page=<?php echo $i;?>"><?php echo $i; ?></a>
   
   
    <?php
	$i++;
} 

if(isset($_GET['page']))
{
$page=$_GET['page'];
$next="";
$next=$page+1;

if($next<=$total_pages)
{?>
 <a href="my_page.php?page=<?php echo $next;?>">Next</a>
<?php
}
}
if(isset($_GET['page']))
{
	$page=$_GET['page'];
	
	$start = ($page - 1) * $limit; 

	
	$sql = "SELECT full_name,id FROM admission LIMIT $start, $limit";
	$result = mysql_query($sql);
	
	
	
	while($row=mysql_fetch_array($result))
	{ 
	    echo "<br>";
		echo $row['id']."<br>";
		echo $row['full_name']."<br>"."<br>";
	}
}


   ?> 
     
   

</body>
</html>