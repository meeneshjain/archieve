<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
document.write("Available Width: " + screen.availWidth,"<br>");
document.write(" Available height " + screen.availHeight);
document.write(location.href,"<br>");
document.write(location.pathname,"<br>");
var mycars=new Array();
mycars[0]="car1";
mycars[1]="car2";
mycars[2]="car3";
mycars[3]="car4";
mycars[4]="car5";

for($i=0;$i<mycars.length; $i++)
{
	document.write("&nbsp;"+mycars[$i]+"<br>")
}
var cars;

for(cars in mycars)
{
		document.write(cars + "&nbsp;")	
	
}



var x=["mj","pj","j","raj","<br>"];

var y =["mjs","pjs","js","rajs","<br>"];
var f =["mjsadds","ssadpjs","jsadsads","rsadasdajs","<br>"];

var c =x.concat(y);
document.write(c);

var d =x.concat(y,f);
document.write(d);

fruits =["a","c","d","e","b","h","g","0"]
var srt="how r u going to indore from bombay ";
document.write(fruits.join(),"<br>");
document.write(srt.split(" "),"<br>");
document.write(fruits.slice(2,4),"<br>");

document.write(fruits.sort(),"<br>");
//var res=new Array();fruit.sort();
//res.reverse();
document.write(fruits.reverse());
//document.write(fruits.sort(function(b,a){return b-a}));
</script>
</head>

<body>

</body>
</html>