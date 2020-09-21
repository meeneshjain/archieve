<?php
	require_once("ajax_table.class.php");
	$obj = new ajax_table();
	$records = $obj->getRecords();
	//echo phpinfo();
?>

<html>
 <head>
  <title>Ajax Table Inline Edit</title>
  <script type="text/javascript">
	 // Column names must be identical to the actual column names in the database, if you dont want to reveal the column names, you can map them with the different names at the server side.
	 var columns = new Array("fname","lname","tech","email","city","address");
	 var placeholder = new Array("Enter First Name","Enter Last Name","Enter Technology","Enter Email","","EnterAddress");
	 var inputType = new Array("text","text","text","text","select","textarea");
	 var table = "tableDemo";
	 var selectOpt = new Array("Pune","Karad","Kolhapur","Satara","Sangli");


	 // Set button class names 
	 var savebutton = "ajaxSave";
	 var deletebutton = "ajaxDelete";
	 var editbutton = "ajaxEdit";
	 var updatebutton = "ajaxUpdate";
	 var cancelbutton = "cancel";
	 
	 var saveImage = "images/save.png"
	 var editImage = "images/edit.png"
	 var deleteImage = "images/remove.png"
	 var cancelImage = "images/back.png"
	 var updateImage = "images/save.png"

	 // Set highlight animation delay (higher the value longer will be the animation)
	 var saveAnimationDelay = 3000; 
	 var deleteAnimationDelay = 1000;
	  
	 // 2 effects available available 1) slide 2) flash
	 var effect = "flash"; 
  
  </script>
  <script src="js/jquery-1.11.0.min.js"></script>	
  <script src="js/jquery-ui.js"></script>	
  <script src="js/script.js"></script>	
  <link rel="stylesheet" href="css/style.css">
<style type="text/css">
a{
  color: #900;
  text-decoration: none;
}

a:hover {
  color: red;
  position: relative;
}

a[data]:hover:after {
  content: attr(data);
  padding: 4px 8px;
  //color: rgba(0,0,0,0.5);
  color:white;
  position: absolute;
  left: 0;
  top: 100%;
  white-space: wrap;
  z-index: 2;
  border-radius: 5px ;
  background: rgba(0,0,0,0.5);
}

</style> </head>
 <body>
  <center>
	<table border="0" class="tableDemo bordered">
		<tr class="ajaxTitle">
			<th width="2%">Sr</th>
			<th width="14%">First Name</th>
			<th width="14%">Last Name</th>
			<th width="14%">Technology</th>
			<th width="14%">Email</th>
			<th width="14%">City</th>
			<th width="14%">Address</th>
			<th width="16%">Action</th>
		</tr>
		<?php
		if(count($records)){
		 $i = 1;	
		 $eachRecord= 0;
		 foreach($records as $key=>$eachRecord){
		?>
		<tr id="<?php echo $eachRecord['id'];?>">
			<td><?php echo $i++;?></td>
			<td class="fname"><?php echo $eachRecord['fname'];?></td>
			<td class="lname"><?php echo $eachRecord['lname'];?></td>
			<td class="tech"><?php echo $eachRecord['tech'];?></td>
			<td class="email"><?php echo $eachRecord['email'];?></td>
			<td class="city"><?php echo $eachRecord['city'];?></td>
			<td class="address"><?php echo $eachRecord['address'];?></td>
			<td>
				<a href="javascript:;" id="<?php echo $eachRecord['id'];?>" class="ajaxEdit" data="EDIT"><img src="" class="eimage"  ></a>
				<a href="javascript:;" id="<?php echo $eachRecord['id'];?>" class="ajaxDelete" data="DELETE"><img src="" class="dimage"></a>
			</td>
		</tr>
		<?php }
		}
		?>
	</table> 
  </center>
  <center>
  <!--  
	<script type="text/javascript">
	  ( function() {
		if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
		var unit = {"calltype":"async[2]","publisher":"amitpatil","width":550,"height":250,"sid":"Chitika Default"};
		var placement_id = window.CHITIKA.units.length;
		window.CHITIKA.units.push(unit);
		document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
	}());
	</script>
	<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>-->
  </center>
 </body>
</html>
<!-- <script type="text/javascript">  
var _gaq = _gaq || [];  
_gaq.push(['_setAccount', 'UA-19096935-1']);  
_gaq.push(['_trackPageview']);  
(function() {    
	var ga = document.createElement('script'); 
	ga.type = 'text/javascript'; 
	ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  
})();
</script> -->
