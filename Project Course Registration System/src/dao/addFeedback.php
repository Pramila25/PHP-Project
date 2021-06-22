<?php

	include_once 'dbConnection.php';
	
	
	function addFeedback($userId,$feedback){
		
	
	$conn = getConnection();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$date_enrolled = date('Y-m-d');
	$sql = "INSERT INTO feedback (user_id, content,date_submitted)
			VALUES ('$userId', '$feedback','$date_enrolled');";
$conn->multi_query($sql);
closeConnection($conn);
return "success";;
 }  
?>