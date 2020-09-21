<?php 


$con = mysql_connect('localhost','root','');
if(!$con){
die('could not connect to mysql'.mysql_error());
}

mysql_select_db("eschool",$con);

?>

<?php 
//$con = mysql_connect('bey1325204190985.db.11288216.hostedresource.com','bey1325204190985','t6O%mTbcSi1OP');
//mysql_select_db("bey1325204190985",$con);
?>