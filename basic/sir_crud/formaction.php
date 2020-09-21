<?php
require_once "Forminserthelper.php" ;

//if(isset($_REQUEST['action'])){
	//$action = $_REQUEST['action'] ;
//}
$action = $_REQUEST['action'] ;
echo "$action";
echo $ename = $_POST['ename'];
echo $age = $_POST['age'];
echo $marks = $_POST['marks'];
 echo    $id = $_REQUEST['id'];

if($action == 'save') {
//addPerson($ename,$age,$marks);
savePerson($id,$ename,$age,$marks);
header('Location:indesx.php?page=FormGrid');

}
if($action == 'delete'){
deletePerson($id);
echo $id ;
header('Location:indesx.php?page=FormGrid');
}




?>