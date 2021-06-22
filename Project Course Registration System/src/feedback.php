<html>
	<head>
	
	<title>Course Registration</title>
	
	<link rel="stylesheet" href="/Project/bootstrap-files/commonstyles.css" > 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	
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
	require_once 'dao/addFeedback.php';
	
	function uniquePost($posted) {
		if(isset($_POST['addfeedback'])){
    // take some form values
    $description = $posted['feedback']; 
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

	 if(isset($_POST['addfeedback']) && uniquePost($_POST)) { 
	 if(isset($_POST['feedback'])){
       $res = addFeedback($username,$_POST['feedback']);
			if($res=="success"){
				  echo "<p class=' text-center col-sm-2'
                        style='color:red'>Feedback submitted Successfully!!</p>";
			}
	 }
      } 
	  
		?>
<!-- Page content -->
<div class="main col-md-8">

	<!-- form to submit feedback -->
	<div id="addForm" style="margin:100px;margin-left: 273px" >
	 <div class="row">
	<div class="col-md-10">
      <div class="panel panel-default" style="marigin-left:10%">
	   <form  method="post" action="feedback.php">
        <div class="panel-body">
           <div class="row">
				<div class="col-sm-6 form-group">
				<label style="font-size: 20px;">Feedback :</label>
				</div>
				<div class="col-sm-6 form-group">
				<textarea style="height: 227px;" class="form-control" id="feedback" name="feedback" ></textarea>
				</div>
			</div>
			
        </div>
        <div class="panel-footer text-center">

		 <button type="submit" name="addfeedback"  class="btn btn-success">Submit</button>

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