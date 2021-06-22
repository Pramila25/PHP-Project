<html>
	<head>
	
	<title>Course Registration</title>
	
	<link rel="stylesheet" href="/Project/bootstrap-files/commonstyles.css" > 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script>
function disableButton(disButton){

	document.getElementById(disButton).disabled = true;
}
function enableButton(enButton){

	document.getElementById(enButton).disabled = false;
}
function clearFields(){
	document.getElementById("firstname").value="";
	document.getElementById("lastname").value="";
	document.getElementById("bdate").value="";
	document.getElementById("contact").value="";
	document.getElementById("address").value="";
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
	<button id="addButton" class ="linkBut" >Add Details</button>
	<p class="leftPara">Select the Add Details option to add personal detail information</p>
	<form  action="Personal-Info-update.php" method="post">
	<button  class ="linkBut"  id ="updateButton">Update Details</button>
	</form>
	<p class="leftPara">Select the Add Details option to update personal detail information</p>
</div>

<!-- Page content -->
<?php //Fetch student Information
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
		
		$query="UPDATE studentinfo SET fname= '$firstname', lname= '$lastname',dob= '$bdate' ,address='$address' ,contact_no='$contact' WHERE UID ='$username'";
		$result=$conn->query($query); 
		if(!$result) echo "UPDATE failed: $query <br>" .
			$conn->error . "<br><br>";
	
}



$query="SELECT uid,fname,lname,dob,address,contact_no FROM studentinfo where uid = '$username'";
$result=$conn->query($query);
$rows=$result->num_rows;
if(!$result) die ($conn->error);
if(!$rows){
echo <<<_END

	<!-- form to add a personal information -->
	<div id="addForm" style=" margin-left: 427px;" >
	 <div class="row">
	<div class="col-md-10">
      <div  id="student_form"class="panel panel-default" style="background:#f5f5f5;marigin-left:10%">
	  
	<form action="addStudentInfo.php" method="post">
	<div class="mb-3"style="padding-top: 7%;">
	<label for="firstname" class="form-label">First Name</label>
	<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
	</div>
	<div class="mb-3">
	<label for="lastname" class="form-label">Last Name</label>
	<input class="form-control" id="lastname" name="lastname" placeholder="Last name"></input>
	</div>
	<div class="mb-3">
	<label for="lastname" class="form-label">Date of Birth</label>
	<input class="form-control" id="bdate" name="bdate" placeholder="mm/dd/yyyy"></input>
	</div>
	<div class="mb-3">
	<label for="lastname" class="form-label">Contact No</label>
	<input class="form-control" id="contact" name="contact" placeholder="Contact No" type="text"/>
	</div>
	<div class="mb-3">
	<label for="lastname" class="form-label">Mail Address</label>
	<textarea class="form-control" id="address" name="address" placeholder="Mail Address"></textarea>
	</div>
	<div class="mb-3" style="padding-left:23%">
	<button type="submit" class="btn btn-success">Save</button>
	<button type="button" onclick= "clearFields();" class="btn btn-light">Cancel</button>
	</div>

	</form>

        </div>
      </div>  
	</div>
	   
	</div>
	
_END;
echo '<script type="text/javascript">disableButton("updateButton");</script>';
}else{
$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	
	echo <<<_END
	<div class="main col-md-8">
<div class="container" id="student_detail" style="display:block;">	
	<h2 style="padding-left: 78px;" class="form-label">Personal Information:</h3>
	<table class="table" style="margin-left: 78px;width: 60%;background:#f5f5f5;">
	<tbody>
    <tr>
      <th style="width: 211px;"><h3 for="firstname" class="form-label">First Name:</h3></th>
      <td><h4>$row[fname]</h4></td>
    </tr>
	<tr>
      <th style="width: 211px;"><h3 for="lastname" class="form-label">Last Name:</h3></th>
      <td><h4>$row[lname]</h4></td>
    </tr>
	<tr>
      <th style="width: 211px;"><h3 for="dob" class="form-label">Date of Birth:</h3></th>
      <td><h4>$row[dob]</h4></td>
    </tr>
	<tr>
      <th style="width: 211px;"><h3 for="contact" class="form-label">Contact No:</h3></th>
      <td><h4>$row[contact_no]</h4></td>
    </tr>
	<tr>
     <th style="width: 211px;"><h3 for="address" class="form-label">Mail Address:</h3></th>
	 <td><h4>$row[address]</h4></td>
	</tbody>
</table>

</div>
_END;

echo '<script type="text/javascript">disableButton("addButton");enableButton("updateButton");</script>';
}
}

$result->close();


function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}
	
$conn->close();
	
?>

	</body>



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