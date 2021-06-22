<html>
	<head>
	
	<title>Course Registration</title>
	
	<link rel="stylesheet" href="/Project/bootstrap-files/commonstyles.css" > 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<script type="text/javascript">
function closeError(){
	document.getElementById('sucessmessage').style.display === "none" ? document.getElementById('sucessmessage').style.display="block":document.getElementById('sucessmessage').style.display="none";
}
	</script>

	<style>
	table, th, td {
	border: 1px solid #ddd;
	border-collapse: collapse;
	}
</style>

	</head>
		<body id="course-enroll" >
	<header>
	<?php 
	$page_roles = array('student');
	require_once 'checksession.php';

	include('header.php'); ?>
	</header>
	<div class="jumbotron text-center article-title" style="margin-bottom: 6px !important;background-image:url('/Project/images/book.jpg');  background-repeat: no-repeat; background-attachment: fixed;background-size: cover;" >
	<p style="color:white;font-size:50px">Course Registration System</p> 
	</div>
	<?php
	require_once 'dao/courseDetail.php';
	$user = $_SESSION['user'];
	$username= $user->username;
	function uniquePost($posted) {
		if(isset($_POST['addcourse'])){
    // take some form values
    $description = $posted['course'].$posted['sem'].$posted['year']; 
    // check if session hash matches current form hash
    if (isset($_SESSION['form_hash']) && $_SESSION['form_hash'] == md5($description) ) {
       // form was re-submitted return false
       return false;
    }
    // set the session value to prevent re-submit
    $_SESSION['form_hash'] = md5($description);
    return true;
		}
}

	 if(isset($_POST['addcourse']) && uniquePost($_POST)) { 
	 if(isset($_POST['course']) && isset($_POST['sem']) && isset($_POST['year'])){
       $res = addCourseEnrolled($username,$_POST['course'],$_POST['sem'],$_POST['year']);
			/*if($res=="success"){
			echo "<script type='text/javascript'>
				closeError();
				</script>";
			}*/
	 }
      } 
	  	 if(isset($_POST['delete']) ) {
			 echo"insdie";
			 if (isset($_SESSION['courseList'])){
				 echo "set";
			 }
		}
		?>
	<!--student course registered list -->
<div class="sidenav col-md-4">
	<button class ="linkBut"  onclick="renderAddForm()">Add Course</button>
	<p class="leftPara">Select the Add course option to include more courses for the semester.</p>
</div>

<!-- Page content -->
<div class="main col-md-8">

<!--<div id="sucessmessage" style="display:none;margin-left: 97px;"  class="alert alert-success"> Course Enrolled Successfully!!
    <button type="button" class="close" data-dismiss="alert" onclick="closeError();">&times;</button>
</div>-->
<table id="enrollTable" class="table table-striped" style="width:100%;margin-left:100px;">
  <thead>
    <tr>
      <th scope="col">Delete course</th>
      <th scope="col">Course ID</th>
      <th scope="col">Course Title</th>
      <th scope="col">Date Enrolled</th>
    </tr>
  </thead>
  <tbody>
	<?php
		include_once 'dao/courseDetail.php';
		$user = $_SESSION['user'];
		$username= $user->username;
	$courseEnroll = fetchCourseEnrolled($username);	
	if($courseEnroll){
	foreach($courseEnroll as $courseDet){
	  $course_id = htmlspecialchars($courseDet->course_id, ENT_QUOTES);
      $course_title = htmlspecialchars($courseDet->course_title, ENT_QUOTES);
     $enroll_id = htmlspecialchars($courseDet->enroll_id, ENT_QUOTES);
	echo '<tr>
			<td scope="row"><form method="post" action="dao/Course-delete.php">
			<input type="hidden" name="enrollId" value='. $enroll_id .' /> 
			<input type="submit" name="courseSelect" value="Delete Enrolled" class="btn btn-light" style="width:150px;border: solid 1px;"> </input>
			</form></td>
      <td scope="row">' . $course_id . '</td>
      <td scope="row">' . $course_title . '</td>
	  <td scope="row">' . $courseDet->date_enrolled . '</td> </tr>';
	  
	} 
	}else{
		echo"<tr>
			<td scope='row' colspan='4'>No courses enrolled currently!!</td></tr>";
	}?>
	</tbody>
	</table>

	<!-- form to add a course -->
	<div id="addForm" style="display:none;margin-left:100px;" >
	 <div class="row">
	<div class="col-md-10">
      <div class="panel panel-default" style="marigin-left:10%">
	   <form  action="Course-enroll.php" method="post">
	     <div class="panel-heading text-center">
          <h1>New Course Enrollment</h1>
        </div>
        <div class="panel-body">
           <div class="row">
				<div class="col-sm-6 form-group">
				<label style="font-size: 20px;">Course Id:</label>
				</div>
				<div class="col-sm-6 form-group">
				<select class="coursesDropdown" name="course" size="1">
				<?php
				include_once 'dao/courseDetail.php';
				$user = $_SESSION['user'];
				$username= $user->username;
				$courses = fetchCourseList($username);
			
				foreach($courses as $course){
				echo "<option value=$course->course_id> $course->course_id - $course->course_title</option>";
				}
				?>
				</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 form-group">
				<label style="font-size: 20px;">Semester:</label>
				</div>
				<div class="col-sm-6 form-group">
				<select class="semesterDropdown" name="sem" size="1">
				<option value="spring">Spring</option>
				<option value="Summer">Summer</option>
				<option value="Fall">Fall</option>
				</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 form-group">
				<label style="font-size: 20px;">Year:</label>
				</div>
				<div class="col-sm-6 form-group">
				<select class="semesterDropdown" id="year" name="year"></select>
			</div>
			</div>
        </div>
        <div class="panel-footer text-center">

		 <button type="submit" name="addcourse"  class="btn btn-success">Add</button>

		  </div>
		  </form>
        </div>
      </div>  
	</div>
	   
	</div>
</div>
	
	<?php include('footer.php'); ?>
	</body>


<script type="text/javascript">

function getCourseSelected(){

var table = document.getElementById('enrollTable');
for (let i in table.rows) {
   let row = table.rows[i];
   let col = row.cells['0'];
  	// string courseList[] = null;
	/* var courseList = new Array();
	  if(col.input.checked){
		alert("@@@@@@@@@@"+col.input.value);
		courseList.push(col.input.value);
	  }*/
	  courseList.push("5110");
      Session["courseList"]= courseList;
     
}
}
	includeHTML();
	$(document).ready(function(){
      var date_input=$('input[name="bdate"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    });
function yearGenerator() {
    var year_start = (new Date).getFullYear();
    var year_end = (new Date).getFullYear()+1; //current year
    var selected_year = (new Date).getFullYear(); // 0 first option

    var option ;  //first option

    for (var i = 0; i <= (year_end - year_start); i++) {
        var year = (year_start+i);
        var selected = (year == selected_year) ? ' selected' : '';
        option += '<option value="' + year + '"'+selected+'>' + year + '</option>';
    }
    document.getElementById('year').innerHTML = option;
}

function renderAddForm(){

	document.getElementById('addForm').style.display === "none" ? document.getElementById('addForm').style.display="block":document.getElementById('addForm').style.display="none";
	yearGenerator();
}
</script>

<style>
/* The sidebar menu */
.sidenav {
  height: 59%; /* Full-height: remove this if you want "auto" height */
  width:220px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  left: 0;
  background-color: #f5f5f5; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
  marigin-bottom:10px;
}

.linkBut{
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  border:none;
  background-color: transparent;
}
/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #4c586;
}

/* Style page content */
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
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
	overflow-y:
}
.jumbotron p{
	margin-bottom:0px !important;
}
.leftPara{
	margin-top:5px;
	margin-bottom:40px;
	margin-left:1px;
	margin-right:1px;
	color:red;
}
.semesterDropdown{
	height: 30px !important;
    width: 100px;
    background: #f5f5f5;
    border: transparent;
}
.coursesDropdown{
	height: 30px !important;
    background: #f5f5f5;
    border: transparent;
}

</style>
</html>