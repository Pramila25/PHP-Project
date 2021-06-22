<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Update course</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <link type="text/css" rel="stylesheet" href="../../../css/style_1.css">
    <link type="text/css" rel="stylesheet" href="../../../css/bootstrap.min.css">


</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item">
                <a class="nav-link margin_custom_1" href="../../../Personal-Info.php">Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link margin_custom_1" href="../../admin.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link margin_custom_1" href="../../advisor.php">Advisor</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    <div class=" px-3 mt-4 mx-auto text-center ">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <button onclick="location.href='../student.php';" type="button" class="btn btn-dark">student</button>
            <button onclick="location.href='../advisor.php';" type="button" class="btn btn-dark">advisor</button>
            <button onclick="location.href='../faculty.php';" type="button" class="btn btn-dark">faculty</button>
            <button onclick="location.href='../course.php';" type="button" class="btn btn-dark">course</button>
            <button onclick="location.href='../program.php';" type="button" class="btn btn-dark">program</button>
        </div>
    </div>
    <div class="container">
        <div class=" px-3 mt-1 mx-auto text-center ">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <button onclick="location.href='add.php';" type="button" class="btn btn-dark">Add</button>
                <button onclick="location.href='view.php';" type="button" class="btn btn-dark">View</button>
                <button onclick="location.href='update.php';" type="button" class="btn btn-dark">Update</button>
            </div>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

</html>
<?php
$page_roles = array('admin');
require_once '../../../checksession.php';
//To get the user name of logged in user
$user = $_SESSION['user'];
$username= $user->username;

require_once '../../../dao/dbConnection.php';
$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);


echo <<<_END
<div class="mx-auto text-center">
   
        
          <form action="add.php" method="post" class="p-4">
              <div class="form-group">
                  <label >Course ID:</label>
                  <input type="text"  class="form-control" name="course_id">
              </div>

              <div class="form-group">
                  <label>Course title</label>
                  <input type="text" class="form-control" name="course_title" >
              </div>

              <div class="form-group">
                  <label>Credit</label>
                  <input type="text" class="form-control" name="credit"  >
              </div>

              <div class="form-group">
                  <label>Semester</label>
                  <input type="text" class="form-control" name="program" >
              </div>
              <div class="form-group">
                  <label>Year</label>
                  <input type="text" class="form-control" name="year" >
              </div>
              <div class="form-group">
                  <label>Open for enrollment</label>
                  <input type="text" class="form-control" name="open_for_enrollment">
              </div>
              <div class="form-group">
                  <label>prereq id</label>
                  <input type="text" class="form-control" name="prereq_id">
              </div>
              
              <button type="submit" class="btn btn-primary"> Add</button>
              <a href="view.php" id="cancel" name="cancel" class="btn btn-dark margin_custom_1">Cancel</a>
              
          </form>
    </div>
_END;

if(isset($_POST['course_id']))
{

    $course_id = $_POST['course_id'];
    $course_title = $_POST['course_title'];
    $credit = $_POST['credit'];
    $semester = $_POST['program'];
    $year = $_POST['year'];
    $open_for_enrollment = $_POST['open_for_enrollment'];
    $prereq_id = $_POST['prereq_id'];



    $query = "INSERT INTO `course`(`course_id`, `course_title`, `credit`, `program`, `year`, `open_for_enrollment`, `prereq_id`) VALUES ('$course_id','$course_title','$credit','$semester','$year','$open_for_enrollment','$prereq_id')";

    $result = $conn->query($query);

    if (!$result) echo "INSERT failed: $query <br>" .
        $conn->error . "<br><br>";

    header("Location: view.php");

    $conn->close();
}

