<?php
include_once('config.inc.php');
extract($_POST);

if(!isset($_SESSION))
session_start();
function get_extension_status($name)
{
$exte_status_select="select * from `extension` where `name`='".$name."' ";
	$exte_status_qry=mysql_query($exte_status_select);
	$extension_status_array=mysql_fetch_assoc($exte_status_qry);
	//print_r($product_select_array);
	return $extension_status_array;
	
}


function get_favourite_forum($id)
{
	$forum_topic = "select * from `favourite_forum` where `client_id` = '".$id."' ";
	$query_forum_topic = mysql_query($forum_topic );
	while($row = mysql_fetch_assoc($query_forum_topic))
	{
			$id = $row['forum_topic_id'];
			$forum_select = "select * from `forum_topic` where `id`='".$id."' ";
			$forum_select_rs = mysql_query($forum_select);
			while($forum_select_row = mysql_fetch_assoc($forum_select_rs))
			{
				?><tr><td><i class="icon-share"></i></td>
				<td><?php echo '<a href="forum_title_detail.php?id='.$forum_select_row['id'].'">'.$forum_select_row['title'].'</a>'; ?></td>
				<td><?php $forum_client = get_forum_msg_client($forum_select_row['id']);
				echo date('d-M-Y - g:i a 	', $forum_select_row['created_at'])."by".get_Client_Name($forum_client);?></td>
				<td><?php $select_count = "SELECT COUNT(*) as num FROM `forum_topic_message`  WHERE `forum_topic_id` = ".$forum_select_row['id']." ";
													$query_count = mysql_fetch_array(mysql_query($select_count));
													$row_count = $query_count[num];
													echo $row_count; ?></td>
				<td><?php echo $forum_select_row['views']; ?></td></tr>
			<?php }
	}
}
function get_fav_forum()
{
	$forum_topic = "select * from `favourite_forum`  `id`=1";
	$query_forum_topic = mysql_query($forum_topic );
	$fetch_forum_topic_id= mysql_fetch_assoc($query_forum_topic);
	$row = $fetch_forum_topic_id['id']; //mysql_num_rows($query_forum_topic);
	return($row);
}
function get_forum_msg_client($id)
{

	$select_msg = "SELECT * FROM `forum_topic_message`  WHERE `forum_topic_id` = ".$id." ";
	$query_msg = mysql_fetch_array(mysql_query($select_msg));
	return ($query_msg['client_id']);
}


function get_product_info($p_id)
{
	
	$product_select="select * from product where `id`=".$p_id."";
	$product_select_qry=mysql_query($product_select);
	$product_select_array=mysql_fetch_assoc($product_select_qry);
	//print_r($product_select_array);
	return $product_select_array;
	
}

function generateRandomString($length = 25)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';
	for($i=0;$i<$length;$i++)
	{
		$randomString .=$characters[rand(0, strlen($characters) -1)];
	}
		return $randomString;
}


function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

/*  This is for get client group  */

function get_All_Client_Group($gid)
{
	$rs_all_client = mysql_query("select `id`,`title` from `client_group`");
	while($row = mysql_fetch_assoc($rs_all_client))
	{ 	?>
		<option value="<?php echo $row['id'];?>" <?php if($row['id'] == $gid) { echo 'selected="selected"'; } ?> ><?php echo $row['title'];?></option>
		<?php
	}
	
}

/* This function for get client information by id  --- general function*/
function get_all_currency($currency_code)
{
	$currency_rs =  mysql_query("select * from `currency`");
	while($currency_row = mysql_fetch_assoc($currency_rs))
	{?>
	<option value="<?php echo $currency_row['id']; ?>" <?php if($currency_row['id'] == $currency_code) { echo 'selected="selected"'; } ?> ><?php echo $currency_row['title'];  ?></option>
	<?php
	}
}

function get_client_info($infoid)
{
 	$get_info_rs = mysql_query("select * from `client` where `id` = '".$infoid."'");
	$rows_info   = mysql_fetch_assoc($get_info_rs); 
	$num = mysql_num_rows($get_info_rs);
	if($num != 0){
		return $rows_info;
	}else {
				return 0;
		}
}

/* end here.....*/
/* function for get payment getway info*/

function get_payment_info($payment_getway_id)
{
	$payget_info_rs = mysql_query("select * from `pay_gateway` where `id` = '".$payment_getway_id."'");
	$pay_rows_info = mysql_fetch_assoc($payget_info_rs);
	return $pay_rows_info;
}

// end here..........

function get_All_Products()
{	
	$product_sql = "SELECT * FROM `product` ";
	$product_rs = mysql_query($product_sql);
	while($product_row = mysql_fetch_assoc($product_rs))
	{
		echo "<option value='".$product_row['id']."'>".$product_row['title']."</option>";	
	}		
}

function get_category($id)
{
	$ctgry = "select * from `product_category` where `id` = '".$id."'";
	$ctgry_rs = mysql_query($ctgry);
	$ctgry_row = mysql_fetch_assoc($ctgry_rs);
	$category = $ctgry_row['title'];
	return($category);
}

/* This function for delete   */ 
function deleteFunction($table,$col,$id)
{	
	$delete_sql = "delete from `".$table."` where `".$col."`='".$id."'"; 
	$delete_rs = mysql_query($delete_sql);
	return $delete_rs;
}

function get_Client_Name($id)
{
	$client_name_sql = "select * from `client` where `id` = '".$id."'";
	$client_name_rs = mysql_query($client_name_sql);
	$client_name_row = mysql_fetch_assoc($client_name_rs);
	$client_name = $client_name_row['first_name'] . " " . $client_name_row['last_name'];
	return($client_name);
}

function get_Product_Name($id)
{
	$product_name_sql = "select * from `product` where `id` = '".$id."'";
	$product_name_rs = mysql_query($product_name_sql);
	$product_name_row = mysql_fetch_assoc($product_name_rs);
	$product_name = $product_name_row['title'];
	return($product_name);
}

//Showing Amount through Client_id and Invoice_id
function get_order_info($c_id,$invc_id)
{
	$order_info_rs = mysql_query("select * from `client_order` where `client_id`='".$c_id."' and `unpaid_invoice_id`='".$invc_id."'");
	$order_info = mysql_fetch_assoc($order_info_rs);
	return $order_info;
}

//  this function used in subscription and invoices module...
function get_payment_method($select_val)
{
	$payment_mode = "select * from `pay_gateway` ";
	$payment_mode_rs = mysql_query($payment_mode);
	while($payment_mode_row = mysql_fetch_assoc($payment_mode_rs))
	{
		?> <option value='<?php echo  $payment_mode_row['id']; ?>' <?php if($select_val != '') { if($select_val == $payment_mode_row['id']) { echo 'selected="selected"'; } } ?> ><?php echo  $payment_mode_row['name']; ?></option> <?php
	}
}

// this function is used for get all currency



function get_client_group($group_id)
{
	$admin_rs =  mysql_query("select * from `admin_group` where `id`=".$group_id."");
	$admin_row = mysql_fetch_assoc($admin_rs);
	return($admin_row['name']);
	
}

/* this is for help desk support data used in admin and client penal */

function get_all_helpdesk_support($d_id, $hid)
{
	
	if($d_id !='')
	{
		$rs_help_support = mysql_query("select `name` from `support_helpdesk` where `id`= ".$d_id."");
		$rows_ticket = mysql_fetch_assoc($rs_help_support);
		return $rows_ticket['name'];
	}else
	{ 
		$rs_help_support = mysql_query("select * from `support_helpdesk`");
		while($helpdesk_row = mysql_fetch_assoc($rs_help_support))
		{?>
		<option value="<?php echo $helpdesk_row['id']; ?>" <?php if($helpdesk_row['id'] == $hid) { echo 'selected="selected"'; } ?> ><?php echo $helpdesk_row['name'];  ?></option>
		<?php
		}
	}
}

function get_all_category($c_id,$cid)
{
	if($c_id !='')
	{
		$rs_category = mysql_query("select `title` from `support_pr_category` where `id`= ".$c_id."");
		$rows_category = mysql_fetch_assoc($rs_category);
		return $rows_category['title'];
	}
	else
	{ 
		$rs_category = mysql_query("select * from `support_pr_category`");
		while($rows_category = mysql_fetch_assoc($rs_category))
		{?>
		<option value="<?php echo $rows_category['id']; ?>" <?php if($rows_category['id'] == $cid) { echo 'selected="selected"'; } ?> ><?php echo $rows_category['title'];  ?></option>
		<?php
		}
	}
}

function get_products_info($p_id, $edit_id)
{
	
	if($p_id !='') 
	{
		$product_rs = mysql_query("select * from `product` where `id`= ".$p_id."");
		$product_info = mysql_fetch_assoc($product_rs);
		return $product_info;
	}
	else
	{ 
		$product_rs = mysql_query("select * from `product`");
		while($product_info = mysql_fetch_assoc($product_rs))
		{?>
		<option value="<?php echo $product_info['id']; ?>" <?php if($product_info['id'] == $edit_id) { echo 'selected="selected"'; } ?> ><?php echo $product_info['title'];  ?></option>
		<?php
		}
	}
}


function curPageURL() 
{
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	 
}


function update_priority($id,$val,$table)
{
	$update_priority_sql = "update ".$table." SET `priority`= ".$val." where `id`=".$id.""; 
	$update_priority_rs = mysql_query($update_priority_sql);
}


//Select Default Currency
function default_Currency()
{
	$default_currency_sql = "select * from `currency` where `is_default`='1' ";
	$default_currency_rs = mysql_query($default_currency_sql);
	$default_currency_row = mysql_fetch_assoc($default_currency_rs);
	return $default_currency_row['id'];
}


function get_Currency_byId($id)
{
	$currency_select = "select * from `currency` where `id`='".$id."' ";
	$currency_select_rs = mysql_query($currency_select);
	$currency_select_row = mysql_fetch_assoc($currency_select_rs);
	return $currency_select_row['title'];
}




ini_set('date.timezone', 'Asia/Kolkata');
function dateDiff($inter, $time1, $time2, $precision = 6)
{
  
// If not numeric then convert texts to unix timestamps
	if (!is_int($time1)) {
	  $time1 = strtotime($time1);
	}
	if (!is_int($time2)) {
	  $time2 = strtotime($time2);
	}

	// If time1 is bigger than time2
	// Then swap time1 and time2
	if ($time1 > $time2) {
	  $ttime = $time1;
	  $time1 = $time2;
	  $time2 = $ttime;
	}

	// Set up intervals and diffs arrays
	$intervals = array($inter);
	//$intervals = array('year','month','day','hour','minute','second');
	$intervals = array('month','day','hour','minute','second');
	//$intervals = array($inter);
	$diffs = array();

	// Loop thru all intervals
	foreach ($intervals as $interval) {
	  // Create temp time from time1 and interval
	  $ttime = strtotime('+1 ' . $interval, $time1);
	  // Set initial values
	  $add = 1;
	  $looped = 0;
	  // Loop until temp time is smaller than time2
	  while ($time2 >= $ttime) {
		// Create new temp time from time1 and interval
		$add++;
		$ttime = strtotime("+" . $add . " " . $interval, $time1);
		$looped++;
	  }

	  $time1 = strtotime("+" . $looped . " " . $interval, $time1);
	  $diffs[$interval] = $looped;
	}

	$count = 0;
	$times = array();
	// Loop thru all diffs
	foreach ($diffs as $interval => $value) {
	  // Break if we have needed precission
	  if ($count >= $precision) {
	break;
	  }
	  // Add value and interval 
	  // if value is bigger than 0
	  if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
	  }
	}

	// Return string with times
	return implode(", ", $times);
}

function show_status($status)
{
	switch ($status)
	{
		case "pending_setup": return("Pending Setup");
							   break;
		case "setup_failed" : return("Setup Failed");
							   break;
		case "active" 		: return("Active");
							   break;
		case "inactive" 	: return("Inactive");
							   break;
		case "suspended"	: return("Suspended");
		 					   break;		
		case "canceled"		: return("Canceled");
							   break;
		case "close" 		: return("Close");
							   break;
		case "open"			: return("Open");
		 					   break;
		case "on_hold"		: return("On Hold");
							   break;
		case "refund"		: return("Refund");
							   break;
		case "received"		: return("Received");
		 					   break;
		case "pending"		: return("Pending");
							   break;
		case "paid"			: return("Paid");
							   break;
		case "refunded"		: return("Refund");
							   break;
        case "unpaid"		:return("Unpaid");
							   break;	
		case "cancel"		:return("Cancel");
							   break;		
		case "disabled"		:return("Disable");
							   break;	
		case "enabled"		:return("Enable");
							   break;
		case "draft"		:return("Draft");
							   break;										
	   case "locked"		:return("Locked");
								break;		
	}
}

function get_serch($table, $field, $nm)
{
	$ctgry = array();
	$select = "select * from $table where $field LIKE '%".$nm."%' ";
	$select_rs = mysql_query($select);
	while($select_row = mysql_fetch_assoc($select_rs))
	{
		$id = $select_row['id'];
		array_push($ctgry, $id); 
	}
	if(!empty($ctgry))
	{
		$str = implode("," , $ctgry);
		return($str);
	}
	else
	{
		return(-1);
	}
			  
}

//For DataTable Search
function getClientName($name)
{
	$client_arr = array();		
	$client_name_sql = "SELECT * FROM `client` WHERE `first_name` LIKE '%".$name."%' or `last_name` LIKE '%".$name."%' ";
	$client_name_rs = mysql_query($client_name_sql);
	while($client_name_row = mysql_fetch_assoc($client_name_rs))
	{
		$clientname = $client_name_row['id'];
		array_push($client_arr, $clientname);
	}
	if(!empty($client_arr))
	{
		$client_arr_separated = implode(",", $client_arr);	
		return $client_arr_separated ;
	}
	else
	{
		return 0;
	}	
}

//for group data

function get_group_info($table, $field, $id)
{
	$que_info = "select * from `$table` where `$field`= ".$id."";
	$que_info_rs = mysql_query($que_info);
	$num = mysql_num_rows($que_info_rs);
	return($num);
	
}

////For DataTable Search

function getProductName($p_name)
{
	$product_arr = array();		
	$product_name_sql = "SELECT * FROM `product` WHERE `title` LIKE '%".$p_name."%' ";
	$product_name_rs = mysql_query($product_name_sql);
	while($product_name_row = mysql_fetch_assoc($product_name_rs))
	{
		$productname = $product_name_row['id'];
		array_push($product_arr, $productname);
	}
	if(!empty($product_arr))
	{
		$product_arr_separated = implode(",", $product_arr);	
		return $product_arr_separated ;
	}
	else
	{
		return 0;
	}	
}



function show_period($period)
{
	switch ($period)
	{
		case "1w"			: return("One Week");
							   break;
		case "1m" 			: return("One Month");
							   break;
		case "3m" 			: return("Three Month");
							   break;
		case "6m"			: return("Six Month");
		 					   break;
		case "1y"			: return("One Year");
							   break;
		case "2y" 			: return("Two Year");
							   break;
		case "3y"			: return("Three Year");
		 					   break;										
	}
}	


//gorank
function get_price_format($id,$amt)
{
	$query  = "SELECT price_format FROM currency WHERE id='".$id."'";
	$result = mysql_query($query);
	$row1   = mysql_fetch_array($result);

	switch($row1['price_format'])
	{
		case "1": return($amt);
							   break;
		case "2": return(number_format($amt, 2));
							   break;
		case "3": return(number_format($amt, 2, ',', '.'));
							   break;
		case "4": return(number_format($amt));
		 					   break;
		case "5": return((int)$amt);
							   break;								
	}
}
//gorank
function get_currency_symbol($currency)
{
	$query = "SELECT format FROM currency WHERE id='".$currency."'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	return $row['format'];
} //str_replace("%%price%%",$price,$symbol);
//gorank

function get_currency_title($currency)
{
	$query = "SELECT title FROM currency WHERE id='".$currency."'";
	$result = mysql_query($query) or die("Could not run this query. ".mysql_error());
	$row = mysql_fetch_assoc($result);
	return $row['title'];
} 


function escape($str)
{
	return mysql_real_escape_string(trim($str));
}

function get_all_forum($f_id, $fid)
{
	if($f_id !='')
	{
		$rs_forum = mysql_query("select `title` from `forum` where `id`= ".$f_id."");
		$rows_forum = mysql_fetch_assoc($rs_forum);
		return $rows_forum['title'];
	}else
	{ 
		$rs_forum = mysql_query("select * from `forum`");
		while($forum_row = mysql_fetch_assoc($rs_forum))
		{?>
		<option value="<?php echo $forum_row['id']; ?>" <?php if($forum_row['id'] == $fid) { echo 'selected="selected"'; } ?> ><?php echo $forum_row['title'];  ?></option>
		<?php
		}
	}
}

function get_product_price($period, $id)
{
	$pro_price = "select * from `product_price` where `id` = ".$id." ";
	$pro_price_rs = mysql_query($pro_price);
	$pro_price_row = mysql_fetch_assoc($pro_price_rs);
	switch($period)
	{
		case "1w": return($total_price = $pro_price_row['w_price'] ."%%*%%". $pro_price_row['w_setup_price']);
					break;
		case "1m": return($total_price = $pro_price_row['m_price'] ."%%*%%". $pro_price_row['m_setup_price']);
					break;
		case "3m": return($total_price = $pro_price_row['q_price'] ."%%*%%". $pro_price_row['q_setup_price']);
					break;
		case "6m": return($total_price = $pro_price_row['b_price'] ."%%*%%". $pro_price_row['b_setup_price']);
					break;
		case "1y": return($total_price = $pro_price_row['a_price'] ."%%*%%". $pro_price_row['a_setup_price']);
					break;
		case "2y": return($total_price = $pro_price_row['bia_price'] ."%%*%%". $pro_price_row['bia_setup_price']);
					break;
		case "3y": return($total_price = $pro_price_row['tria_price'] ."%%*%%". $pro_price_row['tria_setup_price']);
					break;
	}
}

//knowledge base category//

function get_kb($id)
{
	$ctgry = "select * from `kb_article_category` where `id` = '".$id."'";
	$ctgry_rs = mysql_query($ctgry);
	$ctgry_row = mysql_fetch_assoc($ctgry_rs);
	$category = $ctgry_row['title'];
	return($category);
}
//kb_articles//

/*function get_kb_article($id)
{
	$ctgry = "select * from `kb_article` where `id` = '".$id."'";
	$ctgry_rs = mysql_query($ctgry);
	$ctgry_row = mysql_fetch_assoc($ctgry_rs);
	$category = $ctgry_row['title'];
	return($category);
}
*/
//for forum title and category
function get_forum($forum_id)
{
	$get_forum_rs = mysql_query("select * from `forum` where `id` = '".$forum_id."'");
	$rows_forum   = mysql_fetch_assoc($get_forum_rs);
	$string = $rows_forum['category']." > ".$rows_forum['title']; 
	return($string);
	
}
//admin info//

function get_admin_info($infoid)
{
	$get_info_rs = mysql_query("select * from `admin` where `id` = '".$infoid."'");
	$rows_info   = mysql_fetch_assoc($get_info_rs);  
	$num = mysql_num_rows($get_info_rs); 
	if($num != 0)
	{ 
		return $rows_info;
	}
	else 
	{
				return 0;
	}
}
function get_forum_detail($id)
{
	$ctgry = array();
	$select = "select * from `forum` where `id`='".$id."'";
	$select_rs = mysql_query($select);
	$select_array=mysql_fetch_assoc($select_rs);
	if($select_rs!=0)
	{
		return $select_array['id'];
	}
	else
	{
		return 0; 
	}
}

//for client activity system//
function activity_system($priority,$client_id,$module,$summary,$type,$ip)
{

		$activity_insert = "INSERT INTO `activity_system`( `priority`, `client_id`,  `module`, `summary`, `type`, `ip`, `created_at`, `updated_at`) VALUES ('".escape($priority)."','".escape($client_id)."','".escape($module)."','".escape($summary)."', '".escape($type)."','".escape($ip)."','".strtotime("now")."','".strtotime("now")."' ) ";
		$activity_insert_query = mysql_query($activity_insert); 
		return 1;
}


//client login activity//
function client_login_activity($client_id,$ip,$country)
	{
		$client_login_insert = "INSERT INTO `activity_client_history`(`client_id`, `ip`, `country`, `created_at`, `updated_at`) VALUES ('".escape($client_id)."', '".escape($ip)."', '".escape($country)."', '".strtotime("now")."', '".strtotime("now")."') ";
		$client_login_query = mysql_query($client_login_insert);
		return 1;
	
	}
	
	


//For Taxable Value
function get_tax($p_val, $c_id, $enable, $val)
{
	if($enable == 1)
	{
		$client_cun_info = get_client_info($c_id);
		
		$tax_info = "select * from `tax` where `country` = '".$client_cun_info['country']."' AND `state` = '".$client_cun_info['state']."' 	ORDER BY `id` DESC LIMIT 0, 1 ";
		$tax_info_rs = mysql_query($tax_info);
		$t_num = mysql_num_rows($tax_info_rs);
		if($t_num > 0)
		{
			$tax_info_row = mysql_fetch_assoc($tax_info_rs);
		}
		else
		{
			$tax_info1 = "select * from `tax` where `country` = '".$client_cun_info['country']."' and `state`=0 ORDER BY `id` DESC LIMIT 0, 1 ";
			$tax_info1_rs = mysql_query($tax_info1);
			$tc_num = mysql_num_rows($tax_info1_rs);
			if($tc_num > 0)
			{
				$tax_info_row = mysql_fetch_assoc($tax_info1_rs);
			}
			else
			{
				$tax_info2 = "select * from `tax` where `country` = 0 ORDER BY `id` DESC LIMIT 0, 1";
				$tax_info2_rs = mysql_query($tax_info2);
				$all_t_num = mysql_num_rows($tax_info2_rs);
				if($all_t_num > 0)
				{
					$tax_info_row = mysql_fetch_assoc($tax_info2_rs);
				}
			}
		}
		
		$tax_price = ($p_val * $tax_info_row['taxrate'])/100;
		$p_val = $tax_price + $p_val;
	}
			
		if($val > 0)
		{
			return($tax_info_row);
		}
		else
		{
			return($p_val);
		}		
}	


//Get Currency Value After Conversion 
/*function get_currency_conversion($currency_id, $amount)
{
	$currency_conversion_sql = "SELECT * FROM `currency` WHERE id='".$currency_id."'";
	$currency_conversion_rs = mysql_query($currency_conversion_sql);
	$currency_conversion_row = mysql_fetch_assoc($currency_conversion_rs);	
	$converted_amount = ($amount * $currency_conversion_row['conversion_rate']);
	return $converted_amount;
}
*/

function get_all_invoice_item($invc_id, $total)
{
	$invc_item_que = "select * from `invoice_item` where `invoice_id`= ".$invc_id." ";
	$invc_item_rs = mysql_query($invc_item_que);
	if($total == '')
	{
		$pri_total = 0;
		while($invc_item_row = mysql_fetch_assoc($invc_item_rs))
		{
			$pri_total = $pri_total + $invc_item_row['price'];
		}
		return($pri_total);
	}
	else
	{
		$num = mysql_num_rows($invc_item_rs);
		if($num != 0)
		{ 
			return($invc_item_rs);
		}else 
		{
			return 0;
		}
	}	
}

?>
