<?PHP

$male_status = 'unchecked';
$female_status = 'unchecked';

if (isset($_POST['Submit1'])) {

$selected_radio = $_POST['gender'];

if ($selected_radio == 'male') {

$male_status = 'checked';

}
else if ($selected_radio == 'female') {

$female_status = 'checked';

}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<FORM name ="form1" method ="post" action ="">

<Input type = 'Radio' Name ='gender' value= 'male'
<?PHP print $male_status; ?>
>Male

<Input type = 'Radio' Name ='gender' value= 'female' 
<?PHP print $female_status; ?>
>Female

<P>
<Input type = "Submit" Name = "Submit1" VALUE = "Select a Radio Button">

</FORM>
</body>
</html>