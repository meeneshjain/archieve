<?php
require_once('config.php');
if(isset($_GET['country']))
{
	 $select_country="select * FROM  loccountries WHERE continentID='".$_GET['country']."'";
	$result_country=mysql_query($select_country);
	
	echo '<option value="">Select a country</option>';
	while($row=mysql_fetch_array($result_country))
	{
		echo '<option value="'.$row['countryID'].'">'.$row['countryName'].'</option>';
		
	}
}

if(isset($_GET['region']))
{
	$select_region="SELECT * FROM  locregions WHERE countryID='".$_GET['region']."'";
	$result_region=mysql_query($select_region);
	echo'<option value="">Select a region</option>';
	while($row_region=mysql_fetch_array($result_region))
	{
		echo '<option value="'.$row_region['regionID'].'">'.$row_region['regionName'].'</option>';
	}
	
}
if(isset($_GET['city']))
{
	echo $select_city="SELECT * FROM loccities WHERE regionID='".$_GET['city']."'";
	$result_city=mysql_query($select_city) or die(mysql_error());
	echo'<option value="">Select a region</option>';
	while($row=mysql_fetch_array($result_city))
	{
		echo '<option value="'.$row['cityID'].'">'.$row['cityName'].'</option>';
	}	
}


?>
