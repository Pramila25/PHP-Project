<html>
	<head>
	
	<title>Course Registration</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Project/bootstrap-files/commonstyles.css" > 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<script src="includeHTML.js"></script>
	
	<style>
	table, th, td {
  border: 1px solid #ddd;
  border-collapse: collapse;
}
</style>

	</head>
	
	<body id="course_detail" >
	<header>
	<?php 
	$page_roles = array('student');
	require_once 'checksession.php';
	include('header.php'); ?>
	</header>
	<div class="jumbotron text-center article-title" style="margin-bottom: 6px !important;background-image:url('/Project/images/book.jpg');  background-repeat: no-repeat; background-attachment: fixed;background-size: cover;" >
	<p style="color:white;font-size:50px">Course Registration System</p> 
	</div>
	<div class="panel-heading text-center" style="margin-top: 99px;background-color:#f5f5f5;margin-right: 216px;margin-left: 312px;">
        <h1>Course Enrolled Detail</h1>
    </div>
    <div class="panel-body">
	<!--student course registered list -->
	<table id="enrollTable" class="table table-striped" style="width:70%;margin-left: 297px;">
  <thead>
    <tr>
      <th scope="col">Course ID</th>
      <th scope="col">Course Title</th>
      <th scope="col">Semester</th>
	  <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
	<?php
	include_once 'dao/courseCompleted.php';
	$user = $_SESSION['user'];
	$username= $user->username;
	$courseEnroll = fetchCourseCompleted($username);
	if($courseEnroll){
	foreach($courseEnroll as $courseDet){
	  $course_id = htmlspecialchars($courseDet->course_id, ENT_QUOTES);
	   $course_title = htmlspecialchars($courseDet->course_title, ENT_QUOTES);
      $semester = htmlspecialchars($courseDet->semester, ENT_QUOTES);
     $grade = htmlspecialchars($courseDet->grade, ENT_QUOTES);
	echo '<tr>
	   <td scope="row">' . $course_id . '</td>
      <td scope="row">' . $course_title . '</td>
	  <td scope="row">' . $semester . '</td>
	  <td scope="row">' . $grade . '</td> </tr>';
	  
	}
	}else{
		echo '<tr>
	   <td scope="row"  colspan="4"> No courses completed !! 	</td></tr>';
	}
	?>
	</tbody>
	</table>
	</div>
	<?php include('footer.php'); ?>
</body>
<script>
	includeHTML();
</script>
<style>

.mb-3{
	margin-bottom:15px;
	padding-left: 10%;
}
.btn{
	width:100px;
	height:30px;
}
#student_form.container{
	width:30%;
	align:center;
	background-color:#9badbd;
	border-radius: 13px;
	align-content: center;
	
}
.form-control{
	    width: 80% !important;
}
body{
	background-color:#ebeef7;
}
.jumbotron p{
	margin-bottom:0px !important;
}
</style>
</html>