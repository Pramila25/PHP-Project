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
	include('header.php'); 
	$page_roles = array('student');
	require_once 'checksession.php';
	require_once 'pojo/student.php';
?>
	
	</header>
	<div class="jumbotron text-center article-title" style="margin-bottom: 6px !important;background-image:url('/Project/images/book.jpg');  background-repeat: no-repeat; background-attachment: fixed;background-size: cover;" >
	<p style="color:white;font-size:50px">Course Registration System</p> 
	</div>
	<!--student course registered list -->
<div class="sidenav col-md-4">
	<button class ="linkBut"  onclick="renderAddForm()">Add Details</button>
	<p class="leftPara">Select the Add Details option to add personal detail information</p>
	<button class ="linkBut"  onclick="renderAddForm()">Update Details</button>
	<p class="leftPara">Select the Add Details option to update personal detail information</p>
</div>

<!-- Page content -->
<?php //Fetch student Information
$user = $_SESSION['user'];
$username= $user->username;
$query="SELECT uid,fname,lname,dob,address,contact_no FROM studentinfo where uid = '$username'";
$result=$conn->query($query);
$rows=$result->num_rows;
if(!$result) die ($conn->error);

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
echo <<<_END

	<!-- form to add a personal information -->
	<div id="addForm" style=" margin-left: 427px;" >
	 <div class="row">
	<div class="col-md-10">
      <div  id="student_form"class="panel panel-default" style="background:#f5f5f5;marigin-left:10%">
	  
	<form action="Personal-Info.php" method="post">
	<div class="mb-3"style="padding-top: 7%;">
	<label for="firstname" class="form-label">First Name</label>
	<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name"  value=$row[fname] ></input>
	</div>
	<div class="mb-3">
	<label for="lastname" class="form-label">Last Name</label>
	<input class="form-control" id="lastname" name="lastname" placeholder="Last name"value=$row[lname]></input>
	</div>
	<div class="mb-3">
	<label for="lastname" class="form-label">Date of Birth</label>
	<input class="form-control" id="bdate" name="bdate" placeholder="mm/dd/yyyy" value=$row[dob]></input>
	</div>
	<div class="mb-3">
	<label for="lastname" class="form-label">Contact No</label>
	<input class="form-control" id="contact" name="contact" placeholder="Contact No" type="text" value=$row[contact_no]></input>
	</div>
	<div class="mb-3">
	<label for="lastname" class="form-label">Mail Address</label>
	<textarea class="form-control" id="address" name="address" placeholder="Mail Address">$row[address]</textarea>
	</div>
	<div class="mb-3" style="padding-left:23%">
	<button type="submit" class="btn btn-success">Save</button>
	<button type="submit" class="btn btn-light">Cancel</button>
	</div>

	</form>

        </div>
      </div>  
	</div>
	   
	</div>
_END;
}


$result->close();


$conn->close();
	
?>

	</body>


<script type="text/javascript">

function renderAddForm(){
alert("@@@@@");
	document.getElementById('addForm').style.display="block";
	document.getElementById('student_detail').style.display="none";
	

}
function renderdetails(){
	document.getElementById('addForm').style.display="none";
	document.getElementById('student_detail').style.display="block";
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
.article-title{
    font-size: clamp(1.2rem,calc(1rem + 3.5vw),4rem);
    text-shadow: 0 2px 2px rgb(0 0 0 / 50%);
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
	background-color:#f2f4f5;
	border-radius: 13px;
	align-content: center;
	
}
.form-control{
	    width: 80% !important;
}
body{
	background-color:#ebeef7;;
}
.jumbotron p{
	margin-bottom:0px !important;
}
</style>
</html>