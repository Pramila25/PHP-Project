<?php
	include_once './pojo/courseEnroll.php';
	include_once 'dbConnection.php';
		$courseEnroll;
	function fetchCourseCompleted($studentId){
global 	$courseEnroll;;
	$conn = getConnection();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT enrollment.course_id, grade, enrollment.semester,Course.course_title FROM enrollment join Course WHERE student_id ='$studentId' and enrollment.course_id = Course.course_id and grade not in('')";
	$result=$conn->query($query);
	if(!$result) die ($conn->error);

	$rows=$result->num_rows;
	for($i=0; $i<$rows; $i++) {
	$result->data_seek($i);
	$row=$result->fetch_array(MYSQLI_BOTH);
	   	global $courseEnroll;
		 $enrolled = new courseEnroll($row['course_id'],
		 $row['course_title'], $row['grade'], '',$row['semester'],'');
		 $courseEnroll[$i]=$enrolled;

}

$result->close();
closeConnection($conn);
return $courseEnroll;

}
	
  
?>