<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
</head>
<body>
<?php
mysql_connect('localhost','root','') or die("error");
		mysql_select_db("student") or die("error");
		
		

$sql="SELECT * FROM student_login_info";
$result=mysql_query($sql);

echo "<form method=post action=''>"; 
echo "<table border='0' cellspacing='2' cellpadding='10px' style='border-collapse: collapse' width='100' >"; 
while($rows=mysql_fetch_array($result)){
echo"<tr bgcolor='#ffffff'>";
echo"<td width='25%'>";
echo"<input type = 'checkbox' name='box[]' value=\"".$rows['Userid']."\"'</td>";
echo"<td bgcolor='#FFFFFF'>".$rows['Userid']."</td>";
echo"<td bgcolor='#FFFFFF'>".$rows['Password']."</td>";
echo"<td bgcolor='#FFFFFF'>".$rows['Firstname']."</td>";
echo"<td bgcolor='#FFFFFF'>".$rows['Lastname']."</td></tr>";
}

?>
<tr><td colspan =6 align=center><input type=submit value=Delete name='delete'></form></td></tr></table>
<?php
if(isset($_POST['delete'])){//check to see if the delete button has been pressed

   if(isset($_POST['box'])){ //check to see if any boxes have been checked 
        $num = 0;//used to count the number of rows that were deleted
        $box = $_POST['box'];
        while (list ($key,$val) = @each ($box)) { //loop through all the checkboxes
              $num++;
              $sqldel="DELETE FROM Student_login_info WHERE Userid='$val'";//delete any that match id
              $resdel=mysql_query($sqldel);//send the query to mysql
        }
        //print the logs that were deleted
        echo"$num record(s) have been deleted.";
   }
   else{//no boxes checked
   echo "No records selected.";
   }
}
?>
<a href="main_page.php">Return to main page</a>
</center>

</div>
</body> 
</html>