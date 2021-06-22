<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>View course</title>

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
  <body>



  <div class="container">
      <div class=" px-3 mt-4 mx-auto text-center ">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              <button onclick="location.href='../student.php';" type="button" class="btn btn-dark">student</button>
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

  </body>

</html>

<?php
$page_roles = array('advisor');
require_once '../../../checksession.php';
//To get the user name of logged in user
$user = $_SESSION['user'];
$username= $user->username;

require_once '../../../dao/dbConnection.php';

$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT * FROM course";

$result = $conn->query($query);
echo '<h1 class="display-4 mx-auto text-center mt-4">Course Information</h1>';
echo "<div class='card-deck mb-3 text-center'>";

echo "<div class='container mt-5 '>";

echo "<table class='table'>"; // start a table tag in the HTML
echo <<<_END
<tr>
            <td><b>Course ID</b> </td>
            <td><b>Course</b> </td>
            <td><b>Semester</b> </td>
            <td><b>Year</b></td>
            <td><b>Open for enrollment</b> </td>
            <!--<td><b>Type</b></td>-->
            <td><b>prereq_id</b></td>
          </tr>
_END;

while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through result

    echo "<form  method='POST' action='course_detail.php'>"."<tr><td>" . $row['course_id'] . "</td><td>" . $row['course_title'] . "</td><td>". $row['semester'] . "</td><td>". $row['year'] .
        "</td><td>". $row['open_for_enrollment'] . "</td><td>". $row['prereq_id'] . "</td><td>". "<input type='hidden' name='course_id'
    value='$row[course_id]'>"."</td><td>"."<input type='submit' value='View Detail'>"."</td></tr>"."</form>";

}

echo "</table>";

echo "</div>";

echo "</div>";
echo "</div>";
