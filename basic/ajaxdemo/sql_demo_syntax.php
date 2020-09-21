<?php
require_once('config.php');


echo 'SQL query Examples - <br>';
echo '<br>select query 1 <br>';
$select ='SELECT name from test_sql_1 WHERE id=1';
$result=mysql_query($select) or die(mysql_error());
$row1=mysql_fetch_array($result);

echo "fname : = <strong>" .$row1['name']."</strong><br><br>";

echo 'select query 2 <br>';
$select_query='select name,lname from test_sql_1 WHERE id=4';
$result_query=mysql_query($select_query) or die(mysql_error);
$row2=mysql_fetch_array($result_query);
echo "first name = <strong>". $row2['name']."</strong> Last name = <strong>". $row2['lname']."</strong><br><br>";



echo 'select query 3 - distint values <br>';
$select_query_2='select DISTINCT name from test_sql_1';
$result_query_2=mysql_query($select_query_2) or die(mysql_error());
//echo '<br>'.$count =mysql_num_rows($result_query_2);
while($row3=mysql_fetch_array($result_query_2))
{	
	echo 'Fname - <b>'.$row3['name'].'</b><br>';
}
echo '<br>select query 3 - WHERE CLAUSE &amp;  AND operator<br>';
 
 $select_query_3="SELECT * from test_sql_1 WHERE name='meenesh' AND lname='jain'";
 $result_query_3=mysql_query($select_query_3) or die(mysql_error());
 while($row3=mysql_fetch_array($result_query_3))
 echo 'first Name <b>: -  '.$row3['name'].' </b>Last Name : - <b> '.$row3['lname'].'</b><br>';


echo '<br>select query 4 - WHERE CLAUSE &amp;  OR operator<br>';

$select_query_4="SELECT * FROM test_sql_1 WHERE lname='jain' or lname='ja' LIMIT 0,5";
$result_query_4=mysql_query($select_query_4) or die(mysql_error());
while($row4=mysql_fetch_array($result_query_4))
echo "last name ".$row4['lname']."<br>";



echo '<br>select query 5 - Combine AND &amp; OR operator<br>';
$select_query_5="SELECT * FROM test_sql_1 WHERE name='MEENESH' AND (lname='ja</b>' or lname='jas')";
$result_query_5=mysql_query($select_query_5);
while($row5=mysql_fetch_array($result_query_5))
echo 'First Name :-<b>  '.$row5['name'].' </b> Last Name<b> '. $row5['lname']."</b><br>";

?>


