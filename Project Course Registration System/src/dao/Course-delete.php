<?php
	require_once 'dbConnection.php';
echo"dka";
	$conn = getConnection();
if(isset($_POST['enrollId'])) {
	$enrollId=get_post($conn, 'enrollId');
echo"dddddddddddka";		
		$query="DELETE FROM enrollment WHERE ENROLL_ID ='$enrollId'";
		$result=$conn->query($query); 
		if(!$result) echo "DELETE failed: $query <br>" .
			$conn->error . "<br><br>";
	
}
	
header("Location:../Course-enroll.php");

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>