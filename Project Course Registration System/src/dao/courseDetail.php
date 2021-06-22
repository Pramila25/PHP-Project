<?php
	include_once './pojo/courseEnroll.php';
	include_once './pojo/Courses.php';
	include_once 'dbConnection.php';
	
	$courseEnroll;
	function fetchCourseEnrolled($studentId){
		
	global $courseEnroll;
	$conn = getConnection();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$query="SELECT enrollment.enroll_id,enrollment.course_id, coalesce(grade,'') AS grade, date_enrolled,course_title FROM enrollment join Course WHERE student_id ='$studentId' and enrollment.course_id = Course.course_id and enrollment.grade =''";
$result=$conn->query($query);
if(!$result) die ($conn->error);

$rows=$result->num_rows;
for($i=0; $i<$rows; $i++) {
	$result->data_seek($i);
	$row=$result->fetch_array(MYSQLI_BOTH);
	   	 global $courseEnroll;
		 $enrolled = new courseEnroll($row['course_id'],
		 $row['course_title'], $row['grade'], $row['date_enrolled'],'',$row['enroll_id'] );
		 $courseEnroll[$i]=$enrolled;

}

$result->close();

	closeConnection($conn);
	//print_r($courseEnroll);
	return $courseEnroll;
	}
	
	function fetchCourseList($studentId){
	$Courses;
	$conn = getConnection();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT course_id, course_title FROM  Course WHERE COURSE_ID NOT IN (SELECT COURSE_ID FROM enrollment where student_id ='$studentId')";
	$q = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($q, $query);
                //mysqli_stmt_bind_param($q,'s', $studentId);
                mysqli_stmt_execute($q);
                $result = mysqli_stmt_get_result($q);
	//mysql_select_db('course_registration');
	//$retval = mysqli_query($sql,$conn);
   
   if(! $result ) {
      $errorstring = "System is busy, please try later";
                echo "<p class=' text-center col-sm-2'
                        style='color:red'>$errorstring</p>";
   }
   $i=0;
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	 //  echo "$row['course_title']";
	   	 global $Courses;
		 $course = new Courses($row['course_id'],
		 $row['course_title']);
		 $Courses[$i]=$course;
		 $i++;
   }
	closeConnection($conn);
	//print_r($courseEnroll);
	return $Courses;
	}
 function addCourseEnrolled($student_id,$course_id,$sem,$year){
	 
	$conn = getConnection();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$date_enrolled = date('Y-m-d');
	$sql = "INSERT INTO Enrollment (course_id, student_id,semester,year,date_enrolled)
			VALUES ('$course_id', '$student_id','$sem','$year','$date_enrolled');";
$conn->multi_query($sql);
closeConnection($conn);
return "success";;
 }  
?>