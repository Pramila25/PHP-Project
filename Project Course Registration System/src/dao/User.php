<?php

require_once 'dbConnection.php';

$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);

class User{
	
	public $username;
	public $roles = array();
	
	
	function __construct($username){
		global $conn;
				
		$this->username = $username;
		
		$query="select role from User where user_id='$username' ";
		
		$result = $conn->query($query);
		if(!$result) die($conn->error);
			
		$rows = $result->num_rows;		
		
		for($i=0; $i<$rows; $i++){
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$role = $row['role'];
			array_push($this->roles, $role);  
		}				
		
	}

	function getRoles(){
		return $this->roles;
	}

}











?>