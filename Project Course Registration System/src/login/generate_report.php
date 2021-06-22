<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <title>generate_report</title>

  <link rel="canonical" href="https://getbo
  otstrap.com/docs/4.0/examples/pricing/">
  <link type="text/css" rel="stylesheet" href="../css/style_1.css">
  <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">


</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link margin_custom_1" href="../Personal-Info.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link margin_custom_1" href="admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link margin_custom_1" href="advisor.php">Advisor</a>
        </li>
      </ul>

    </div>
  </nav>



  <div class="container">
    <div class=" px-3 mt-4 mx-auto text-center ">
      <div class="btn-group mr-2" role="group" aria-label="First group">
        <button onclick="location.href='advisor/student_details.php';" type="button" class="btn btn-dark">Student Details</button>
        <button onclick="location.href='advisor/prerequisites.php';" type="button" class="btn btn-dark">Prerequisites</button>
        <button onclick="location.href='advisor/program.php';" type="button" class="btn btn-dark">Program</button>
        <button onclick="location.href='advisor/faculty_to_course.php';" type="button" class="btn btn-dark">Faculty to Course</button>
        <!-- <button onclick="location.href='feedback.php';" type="button" class="btn btn-dark">Feedback</button> -->
      </div>

      <div class=" px-3 mt-1 mx-auto text-center ">
        <div class="btn-group mr-2" role="group" aria-label="First group">
          <button onclick="location.href='admin/student.php';" type="button" class="btn btn-dark">Student</button>
          <button onclick="location.href='admin/advisor.php';" type="button" class="btn btn-dark">Advisor</button>
          <button onclick="location.href='admin/faculty.php';" type="button" class="btn btn-dark">Faculty</button>
          <button onclick="location.href='admin/course.php';" type="button" class="btn btn-dark">Course</button>
          <button onclick="location.href='admin/program.php';" type="button" class="btn btn-dark">semester</button>
        </div>
      </div>

      <div class="container mt-3">


      </div>

      <script>
        $(document).ready(function() {
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });

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
        $(document).ready(function() {
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
</body>

</html>
<?php
$page_roles = array('admin');
require_once '../checksession.php';
//To get the user name of logged in user
$user = $_SESSION['user'];
$username= $user->username;

require_once '../dao/dbConnection.php';

$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT studentinfo.uid, studentinfo.fname, studentinfo.lname, enrollment.grade
          FROM studentinfo
          LEFT JOIN enrollment ON studentinfo.uid = enrollment.student_id
          ORDER BY enrollment.grade DESC";

$result = $conn->query($query);

echo '<h1 class="display-4 mx-auto text-center mt-4">Report</h1>';
echo "<div class='card-deck mb-3 text-center'>";

echo "<div class='container mt-5 '>";

echo "<table class='table'>";
echo <<<_END
<tr>
            <td><b>UID</b> </td>
            <td><b>First Name</b> </td>
            <td><b>Last Name</b> </td>
            <td><b>grade</b> </td>
          </tr>
_END;

while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through result

    echo "<tr><td>" . $row['uid'] . "</td><td>" . $row['fname'] . "</td><td>". $row['lname'] . "</td><td>". $row['grade']
        . "</td></tr>";

}