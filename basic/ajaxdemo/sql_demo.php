
<?php

require_once('config.php');

$sql_query="SELECT * from test_sql_1 LIMIT 0,2";
$result=mysql_query($sql_query) or die("error");

while($row = mysql_fetch_array($result))
{
	echo '
	id :- '.$row['id'].'<br>
	first Name :- '.$row['name'].'<br>
	last Name :-  '.$row['lname'].'<br>
	email :- '.$row['email'].'<br>
	';
	echo '<br><br>';
}

?>
<br>

<form method='post' >
Table Name : - 	<input type='text' name='table_name' value='<?php if(isset($_POST['table_name'])) echo $_POST['table_name']?>'  >
<input type='submit' name='submit' value='Create Table'>

</form>


<?php
if(isset($_POST['submit']))
{
	$table_name =$_POST['table_name'];
	$create_table="Create table ".$table_name."
	(
	ID INT NOT NULL AUTO_INCREMENT,
	Fname varchar(50),
	Lname varchar(54),
	email varchar(50),
	PRIMARY KEY(ID) 
	)
	";
	$create_result=mysql_query($create_table);
	if(!$create_result)
	{
		die(mysql_error());
		
	}
	else
	{
		'success';
	}
}

?>
