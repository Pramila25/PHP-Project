<?php
require_once 'dao/User.php';

session_start();
$user = $_SESSION['user'];
$username= $user->username;
if(isset($_POST['firstname']) &&
	isset($_POST['lastname']) &&
	isset($_POST['bdate']) &&
	isset($_POST['address']) &&
	isset($_POST['contact'])) {
		$firstname=get_post($conn, 'firstname');
		$lastname=get_post($conn, 'lastname');
		$bdate=get_post($conn, 'bdate');
		$address=get_post($conn, 'address');
		$contact=get_post($conn, 'contact');
		
		$query="INSERT INTO studentinfo(uid,fname,lname,dob,address,contact_no) VALUES ('$username','$firstname','$lastname','$bdate','$address',
		'$contact' )";
		$result=$conn->query($query); 
		if(!$result) echo "insert failed: $query <br>" .
			$conn->error . "<br><br>";
	
}

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}
	
header("Location:Personal-Info.php");
?>