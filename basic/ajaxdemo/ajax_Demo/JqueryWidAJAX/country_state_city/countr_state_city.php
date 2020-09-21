<?php
	include('config.php');
	$select_continent="SELECT * FROM loccontinents";
	$result_contient=mysql_query($select_continent) or die(mysql_error());
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Select to use </title>
	<script src="jquery_2.0.3.js"></script>
	<script>
	$(document).ready(function(){
		$("#select_continent").change(function(){
				var continentid = $("#select_continent").val();
				$.ajax({
					url:'country_helper.php?country='+continentid,
					type:'POST',
					async:true,
					success:function(result){
					
						$("#select_contries").html(result);
					
						}
					});
				});
		
		$("#select_contries").change(function(){
			
			var contryid = $("#select_contries").val();
			
			$.ajax({
				type:'POST',
				url:'country_helper.php?region='+contryid,
				async:true,
				success:function(result){
					$("#select_region").html(result);
					}
				});
			});
			
		$("#select_region").change(function(){
			var regoinid =$("#select_region").val();
			$.ajax({
				type:'POST',
				aync:true,
				url:'country_helper.php?city='+regoinid,
				success:function(result){
					$("#select_city").html(result);
				  }
				});
			});
			
			$("#select_city").change(function(){
				$("#btn").css({"display":"block"});
				});
		});		
		
	</script>
	
	
	
</head>

<body>
	<h2> Tell us in Where do you live</h2>
	<select name="select_continent" id="select_continent">
		<option value="">Select a continent</option>
	<?php while($row=mysql_fetch_array($result_contient)) {?>
	<option value="<?php echo $row['continentID']?>"><?php echo $row['continentName']?></option>
	<?php } ?>
	</select><br>
	
	<select name="select_contries" id="select_contries">
	<option value="">Select a country</option>

	
	</select><br>
	
	<select name="select_region" id="select_region">
	<option value="">Select a region</option>
	
	<option value=""></option>
	
	</select>
	
	<br>
	<select name="select_city" id="select_city">
	<option value="">Select a city</option>
	
	<option value=""></option>
	
	</select>
	<button id='btn' style="display:none;">Click me to check</button>
	<p id="para1"></p>

<script>

$(document).ready(function(){
	$("#btn").click(function(){
		$("#para1").text("you SELECTED /n Country --"+ $("#select_contries").val() +" region " + $("#select_region").val() +"Region"+ $("#select_city").val());
		
		});
	
	});
</script>

</body>

</html>

