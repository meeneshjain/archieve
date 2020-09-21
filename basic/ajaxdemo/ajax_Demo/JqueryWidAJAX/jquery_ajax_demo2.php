<?php
/*
 * jquery_ajax_demo2.php
 * 
 * Copyright 2013 kishore <kishore@kishore>
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
	<script src="jquery_2.0.3.js"></script>
	<script>
	$(document).ready(function(){
		$.post("../suggestion_box.php",function(result)
		{
			$("#btn").click(function(){
				$("div").html(result);
				
			});
		})
		});
	
	</script>

</head>

<body>
	<div>
	Hello = Div data
	</div>
	<p id="para">Paragraph Data </p>
<button name='btn' id='btn'>Click here</button>


</body>

</html>
