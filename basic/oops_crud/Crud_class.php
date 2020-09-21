<?php
class Crud{
	
	public $mysqli;
	
	public $data;
	
	public function __construct($host,$username,$password,$db_name){
		
		$this->mysqli = new mysqli($host, $username, $password, $db_name);
		
		if(mysqli_connect_errno()) {
 
			echo "Error: Could not connect to database.";
 
		exit;
 
		}
	}
	
	public function __destruct(){
		$this->mysqli->close();	
	}
	
	public function read(){
		
		$query="SELECT * FROM user";
		
		$result= $this->mysqli->query($query);
		
		$num_result=$result->num_rows;
		
				
		if($num_result>0){
			while($rows=$result->fetch_assoc()){
				$this->data[]=$rows;
			}
			return $this->data;
		}
	}
	
	public function insert($name,$email,$address,$mob){
		
		$query="INSERT INTO user SET name='$name', email='$email', address='$address', mob='$mob'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			header('location:read.php');	
		}
		
		
		
	}
	
	public function update($id,$name,$email,$address,$mobile){
		
		$query="UPDATE user SET name='$name', email='$email', address='$address',mobile='$mobile' WHERE id='$id'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			header('location:read.php');	
		}
		
		
	}
	
	public function delete($id){
		
		$query="DELETE FROM user WHERE id='$id'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			header('location:read.php');	
		}
		
		
	}
	
}
$obj=new Crud("localhost","root","","meenesh");
?>