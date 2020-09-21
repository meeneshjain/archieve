<?php
include('Crud_class.php');
if(isset($_REQUEST['id'])){
    $obj->delete($_REQUEST['id']);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Delete</title>
</head>

<body>

Deleting.....
</body>
</html>