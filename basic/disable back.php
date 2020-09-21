<html>
<head>
<title>stop back button</title>


<script type = "text/javascript" >
function disableBackButton()
{
window.history.forward();
}
setTimeout("disableBackButton()", 0);
</script>
</head>
<body>
<form onsubmit="return disableBackButton()">
<input type="submit" name="ENTER"/>
</form>
</body>
</html>