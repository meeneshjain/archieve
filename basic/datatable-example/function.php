<?php 

function getAllTopics(){
	$arr = "";
	 $select = "SELECT topic_id,alert_type FROM  `topics`";
	 $selectRes = mysql_query($select);
	 if($selectRes > 0){
	 	 while($row = mysql_fetch_assoc($selectRes)){
	 	 	 $arr[$row['topic_id']] = $row['alert_type'];
	 	 }
	 }
	 return $arr;
}


function getTopicsDropDown(){
	 $html = "";
	 $allTopics = getAllTopics();
	 foreach ($allTopics as $topic_id => $alert_type ) {
	 	 	 $html.='<option value="'.$topic_id.'">'.$alert_type.'</option>';
	 }
	 return $html;
}




 ?>
 