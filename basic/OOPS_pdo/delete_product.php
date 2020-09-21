<?php
function delete(){
 
    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
 
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
 
    if($result = $stmt->execute()){
        return true;
    }else{
        return false;
    }
}
// check if value was posted
if($_POST){
 
    // include database and object file
    include_once 'config/database.php';
    include_once 'object/product.php';
 
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
 
    // prepare product object
    $product = new Product($db);
 
    // set product id to be deleted
    $product->id = $_POST['object_id'];
 
    // delete the product
    if($product->delete()){
        echo "Object was deleted.";
    }
 
    // if unable to delete the product
    else{
        echo "Unable to delete object.";
 
    }
}
?>