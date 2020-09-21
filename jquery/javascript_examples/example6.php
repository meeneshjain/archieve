<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>object example
</title>
<script>
var person= new Object();
person.firstname="Meenesh";
person.lastname="Jain";
person.age=50;
person.salary=0;

document.write(person.firstname," has salary ",person.salary ," INR ");

var msg="Hello World";
var x = msg.length;

document.write("<br>","length - ",x);
var y = msg.toUpperCase();
document.write("<br>","upper case - ",y);




function fun(name,job)
{
	document.write(name ," - ",job )
}

var x=10,y=2;
var z = x/y;
var r= x%y;
document.write(z,"<br>",r);
</script>
</head>

<body>

<button onclick="fun('Meenesh Jain','Developer')" >Button Click</button>



</body>
</html>