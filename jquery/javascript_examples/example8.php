<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
function fun()
{
	var y=document.getElementById("para");
	//y=y.innerHTMl="";
	
	try
	{
		var x = document.getElementById("field").value;
		if(x=="") throw "field Empty";
		if(isNaN(x)) throw "Its a number";
		if((x.length)>=10) throw  "Too High";
		if(x.length<=6) throw "Too Low ";
	}
	catch(err)
	{
		y.innerHTML="Errors : " + err;
		y.style.color="red";
		
	}
}
</script>
</head>

<body>
<p id="para">ENter something</p>
<input type="text" name="name" value="" id="field" />
<button type="button" onClick="fun()">Click Me</button>
</body>
</html>
