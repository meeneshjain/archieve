<?php 

$fname=$_POST['fname'];
$age=$_POST['age'];
$contact=$_POST['contact'];
echo"<div align='center'><h2>You entered details </h2></div>";
echo"<table width='40%' border='0' align='center'>
<tr>
<td>
<fieldset>
<legend>Contact form</legend>

Name : ".$_POST['fname']." <br/>
Age  : ".$_POST['age']." <br/>
Contact : ".$_POST['contact']." <br/>
</fieldset>
</td>
</tr>
</table>";
?>