<input type="text" list="browsers"  name="suggest" id="box">
<?php
require_once('config.php');
$str=$_GET['str'];
$select ="SELECT * FROM myTable WHERE name LIKE '".$str."%' ";
$result=mysql_query($select);
echo '	<datalist id="browsers">';
while($row=mysql_fetch_array($result))
{	

	if(mysql_num_rows($result))	
	{
			echo "<option value='".$row['Name']."'>";
	}
	
	else
	{
		echo 'no suggestion';
	}
	
}
echo '</datalist>';
?>
<head>
<script src="jquery_2.0.3.js"></script>
<script> 
	$(document).ready(function(){
				$("#box").keyup(function(){
				var value = $("#box").val();
				// alert(value);
				if(value=="")
				{
				$("#para").text("");
				return false;	
				}
				$.ajax({
				type:'POST',
				async:true,
				url:"suggestion.php?str="+value,
			//	data:input,
				success:function(result){
				$("#para").html(result);
			
				}});
				
			});
		});
</script>
</head>
<body>
	<p id="para"></p>

</body>
