<?php


function getConnection(){
	$servername = "localhost:3306";
	$username = "root";
	$password = "7UpZ085Z3mhiXevmaPgI";
	$dbname = "course_registration";
	// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

	return $conn;
}

function closeConnection($conn){
	$conn->close();
}
?>