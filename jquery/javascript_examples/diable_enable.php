<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
function disable(){
  var remember = document.getElementById('check');
  if (remember.checked){
   // alert("checked") ;
	document.getElementById("drop").disabled=true;
	
  }else{
   // alert("You didn't check it! Let me check it for you.");
	document.getElementById("drop").disabled=false;
  }
}

function dis()
{
	var chas=document.getElementById("drop").value;
	if(chas=="disable")
	{
		document.getElementById("check").disabled=true;
	}
	else
	{
		document.getElementById("check").disabled=false;
	}
}

</script>
</head>

<body>
<input type="checkbox" name="check" id="check" onClick="disable()" >


<select name="selects" id="drop" onChange="dis()"> 
<option value=""></option>
<option value="disable">disable</option>
<option value="enable">enable</option>
</select>
</body>
</html>