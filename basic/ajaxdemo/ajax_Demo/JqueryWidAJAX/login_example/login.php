<?php
/*
 * login.php
 * 
 * Copyright 2013 Anil <anil@anil>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#form1").submit(function(e){
			var loginid = $("#form1 input[name='loginid']").val();
			var password = $("#form1 input[name='password']").val();
			e.preventDefault();
		});
		
		$("#name").blur(function(){
				var loginid = $("#name").val();
				alert(loginid);
		});	
		$("#pass").blur(function(){
				var loginid = $("#pass").val();
				alert(loginid);
		});	
	});
	
	</script>
</head>

<body>
	<div>
	<form method="post" id="form1">
	Login- id : <input type="text" name="loginid" id="name" ><br>
	password : <input type="password" name="password" id="pass"><br>
	<input type="submit" name="submit" id="pass">
	
	
	
	</form>
	
	</div>
</body>

</html>
