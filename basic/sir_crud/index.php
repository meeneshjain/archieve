<!doctype html>


<h1>Welcome In Admin Panel.</h1>
<p>Restorant admin panel Please click below ...</p>
<a href="index.php?page=Forminsert"> click here to update items..</a>

<?php
if (isset($_REQUEST['page'])){
  $page = $_REQUEST['page'];
}

include($page.'.php');

?>