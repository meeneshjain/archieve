<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
#div1 {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
#div3 {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
.someting
{
	background:#fff;
	box-shadow:0px 0px 5px 0px #222;
	padding:20px;
	margin:10px;
}

.error
{
	background:#b82121;
	color:#fff;
	box-shadow:0px 0px 3px 0px #222;
	border:1px #FF0000 solid;
	padding:5px;
	border-radius:3px;
	position:fixed;
	top:20px;
	right:20px;
	display:none;
	font-family:"Segoe UI", Tahoma, Geneva, Verdana;
	font-size:11px;
}
</style>
<script src="http://gocrm.in/paceresearch/scripts/jquery-1.7.1.js" type="text/javascript"></script>
<script>
function allowDrop(ev)
{
ev.preventDefault();
}


function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
if(ev.target.id == 'div1' || ev.target.id == 'div2' || ev.target.id == 'div3' || ev.target.id == 'div4')
{
ev.target.appendChild(document.getElementById(data));
}
else
{
$('#error').fadeIn('fast');
setTimeout("removeError()",3000);
}
}


function removeError()
{
$('#error').fadeOut('fast');
}





function collectDraggedValues(prefix,max,divid)
{
var temp = document.getElementById(divid).innerHTML;
var values = '';
if(temp == '')
{
alert('Nothing Selected');
}
else
{
for(j=0;j<=max;j++)
{
	if(document.getElementById(prefix+j))
	{
	//alert(document.getElementById('drag'+j).parentNode.id);
		if(document.getElementById(prefix+j).parentNode.id == divid)
		{
		values = values+","+document.getElementById(prefix+j).lang;
		//value = '1';
		}
	}
}
alert("Selected Items Are: "+values);
}
}

</script>
</head>
<body>
<div id="error" class="error">Operation Not Allowed!</div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">
<tr>
<td valign="top" style="width:25%">
<div id="div1" ondragover="allowDrop(event)" ondrop="drop(event)"   style="height:600px;position:relative;z-index:0;width:100%">

<div id="drag1" lang="1" class="someting" draggable="true" ondragstart="drag(event)" >One</div>
<div id="drag2" lang="2" class="someting" draggable="true" ondragstart="drag(event)">Two</div>
<div id="drag3" lang="3" class="someting" draggable="true" ondragstart="drag(event)">Three</div>
<div id="drag4" lang="4" class="someting" draggable="true" ondragstart="drag(event)">Four</div>
<div id="drag5" lang="5" class="someting" draggable="true" ondragstart="drag(event)">Five</div>
<div id="drag6" lang="6" class="someting" draggable="true" ondragstart="drag(event)">Six</div>

</div>
</td>
<td valign="top" style="width:25%">
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" style="height:500px;"></div>
<br/>
<input name="Button1" type="button" value="Save My Values" onclick="collectDraggedValues('drag','6','div2')" />
</td><td valign="top" style="width:25%">
<div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)" style="height:500px;"></div>
<br/>
<input name="Button1" type="button" value="Save My Values" onclick="collectDraggedValues('drag','6','div3')" />
</td><td valign="top" style="width:25%">
<div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)" style="height:500px;"></div>
<br>
<input name="Button1" type="button" value="Save My Values" onclick="collectDraggedValues('drag','6','div4')" />

</td>

</tr>
</table>


</body>
</html>
