<?php
function addPerson($ename,$age,$marks){
$con = mysql_connect("localhost","root","");
if(!$con ){
die('coluld not connect to mysql'. mysql_error());
}
mysql_select_db("managment",$con);
$sql = "insert into managment.restourant_items (items_name,items_code,items_price) values ('$ename','$age','$marks')";
//echo $sql ;
mysql_query($sql);
mysql_close($con);
}

function savePerson($id,$ename,$age,$marks){
 if($id == 0){
	addPerson($ename,$age,$marks) ;
 }
 if($id>0){
   updatePerson($id,$ename,$age,$marks);
   echo $id,$ename,$age,$marks;
 }
 }

function updatePerson($id,$ename,$age,$marks){
$con = mysql_connect("localhost:3307","root","1234");
if(!$con){
die('could not connect to mysql'. mysql_error());
}
mysql_select_db("managment",$con);
$sql = "update managment.restourant_items set items_name='$ename',items_code='$age',items_price=$marks where idrestourant_items= $id ";
echo $sql ;
mysql_query($sql);
mysql_close($con);
}



function getPersons(){
$con = mysql_connect("localhost:3307","root","1234");
if(!$con){
die('Could not connect to Mysql'. mysql_error());
}
mysql_select_db("managment",$con);
$sql = "SELECT * FROM restourant_items ";
$rows = array();
$result = mysql_query($sql);

while($row = mysql_fetch_array($result)){
	$rows[]=$row;
}
mysql_close($con);
return $rows;
}





function getIdPerson($id){
	$row = array();
	if ($id > 0){
	$con = mysql_connect("localhost:3307","root","1234");
	if(!$con){
	die('could not connect to mysql'. mysql_error());
	}
	mysql_select_db("managment",$con);
	$sql = "select * from managment.restourant_items where idrestourant_items = $id ";
	$row = null ;
	$result = mysql_query($sql);
	
	$row = mysql_fetch_array($result);
	mysql_close($con);
	}
	else
	{ 
	$row['idrestourant_items'] = 0;
	$row['items_name']= '' ;
	$row['items_code']= '' ;
	$row['items_price']= '' ;
	
	}
	return $row ;
}


function deletePerson($id){
$con = mysql_connect("localhost:3307","root","1234");
if(!$con){
die('could not connect to mysql.'.mysql_error());
}
mysql_select_db("managment",$con);
$sql = "delete from managment.restourant_items where idrestourant_items = $id ";
mysql_query($sql);
mysql_close($con);
}
?>