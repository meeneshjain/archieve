<!DOCTYPE html>
<html>
<head>
<script>
function onclick1()
{
var h1 = document.getElementById('1');
h1.innerHTML="hello world ";
h1.style.color='red';
document.getElementById('11').style.display='block';
}
</script>
</head>
<body>
<h1 onclick="onclick1()" id='1'>Click on this text!</h1>
<p id='11' style='display:none'>now click me  </p>
</body>
</html>
