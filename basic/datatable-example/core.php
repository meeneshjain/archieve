<?php include("../includes/config.php");

if(isset($_GET) && $_GET['get_alert']!=""){
	$alert_id = trim($_GET['get_alert']);
   $sqlString = "SELECT topic_id,subject from alerts WHERE id='$alert_id'";
   $sqlRes = mysql_query($sqlString);
   if(mysql_num_rows($sqlRes) > 0){
   	 $row = mysql_fetch_assoc($sqlRes);
   	 $row['alert_id'] = $alert_id;
   	 echo json_encode($row); 
   	 die;
   }
}

if(isset($_POST) && $_POST['save_changes']=="save_changes"){
	$topic_id = mysql_real_escape_string($_POST['topic_id']);
	$subject = mysql_real_escape_string($_POST['subject']);
	$alert_id = mysql_real_escape_string($_POST['alert_id']);
	$update_alert = mysql_query("UPDATE `alerts` SET `topic_id` = '$topic_id', `subject`='$subject' WHERE `id`='$alert_id'");
	if($update_alert > 0){
		echo json_encode(array("status"=>"true","message"=>"Successfully Updated"));
	} else {
		echo json_encode(array("status"=>"false","message"=>"Failed to Update"));
	}
	exit;
}
 
?>