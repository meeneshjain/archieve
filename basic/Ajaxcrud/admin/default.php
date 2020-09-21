<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<script type="text/javascript" src="scripts/show.js"></script>
<script type="text/javascript" src="scripts/save.js"></script>
<script type="text/javascript" src="scripts/deletedata.js"></script>
<script type="text/javascript" src="scripts/update.js"></script>
<script type="text/javascript" src="scripts/search.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>

<title>Untitled 1</title>
<link rel="stylesheet" href="../css/style.css" media="screen"/>
	<style type="text/css">
		html, body { margin: 0;	padding: 0; }
		
	</style>
</head>

<body style="background:e7ebf2">
<center>
<div style="width:960px;border-bottom:1px #242424 solid;background:black;padding:10px;box-shadow: 0px 0px 19px #ccc;">
	<table cellpadding="0" cellspacing="5" width="960px">
	<tr>
		<td rowspan="2">
			<img src="../images/logo.jpg" width="200px" align="top"/>
		</td>
		<td>
			<span style="font-size:35px; height:bold ;color:white;font-family: Times New Roman"><i>Pushpraj Private Ltd. INDORE</i></span>
		</td>
	</tr>
	</table>
	</div>
	<ul class="menu">

	<li><a href="default.php">My dashboard</a></li>
	<li><button type="button" id="add" style="background-color:black;color:white" onclick="showData('new.php','viewdata') ">ADD</button></li>
	<li><button type="button" id="view" style="background-color:black;color:white" onclick="showData('view.php','viewdata')">Views</button></li>

		

</ul> 
</center>
<div id="viewdata"> </div>

</body>

</html>
