<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<script type="text/javascript" src="scripts/save.js"></script>
</head>

<body>
<div id="loading" style="display:none">Loding Please Wait....</div>
<div id="response"></div>
<div align="center" style="background-color:#99FF66;width:300px;margin-top: 250px;margin-left: 500px;box-shadow: 10px 10px 5px #888888;border-radius:25px;">
<table align="center">
	<tr>
		<td>
			Name : 
		</td>
		<td>
			<input type="text" id="name"/><br/>
		</td>
	</tr>
	<tr>
		<td>
			Lastname :
		</td>
		<td>
			<input type="text" id="lastname"/><br/>
		</td>
	</tr>
	<tr>
		<td>
			Email : 
		</td>
		<td>
			<input type="text" id="email"/><br/>

		</td>
	</tr>
	<tr>
	<td>
		Mobile : 
	</td>
	<td>
		<input type="text" id="mobile"/><br/>
	</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button name="button" type="button" onclick="save('save.php','viewdata')"> Save</button>
		</td>
	</tr>
</table>
</div>
</body>

</html>
