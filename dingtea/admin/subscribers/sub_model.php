<?php
include("../../connection/connect.php");
class sub_model{
	public $con;
	
	public function __construct(){
		$this->con  = new connection();
		$this->con = $this->con->con;
	}
	
	public function listAllSub(){
		$query = "SELECT * FROM subscribers";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
}
?>