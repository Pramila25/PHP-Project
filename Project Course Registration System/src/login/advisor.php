<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Advisor</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="../css/style_1.css">





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
        <button onclick="location.href='advisor/student/view.php';" type="button" class="btn btn-dark">Student</button>
        <button onclick="location.href='advisor/faculty.php';" type="button" class="btn btn-dark">Faculty</button>
        <button onclick="location.href='advisor/course.php';" type="button" class="btn btn-dark">Course</button>
        <button onclick="location.href='advisor/program.php';" type="button" class="btn btn-dark">program</button>
        <button onclick="location.href='../feedback.php';" type="button" class="btn btn-dark">Feedback</button>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.7/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
</body>

</html>

<?php
$page_roles = array('advisor');

require '../dao/dbConnection.php';
require '../dao/User.php';
require '../checksession.php';

//To get the user name of logged in user
$user = $_SESSION['user'];
$username= $user->username;


$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT * FROM studentinfo";

$result = $conn->query($query);
echo "<div class='container mt-4'> Student Information";
echo "<div class='card-deck mb-3 text-center'>";

echo "<div class='container mt-5 '>";
echo "<table class='table'>"; // start a table tag in the HTML

while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through results
    echo "<tr><td>" . $row['uid'] . "</td><td>" . $row['fname'] . "</td><td>". $row['lname'] . "</td><td>". $row['dob'] . "</td><td>". $row['address'] . "</td><td>". $row['contact_no'] ."</td></tr>";
}

echo "</table>";
echo "</div>";

echo <<<_END
</div>
          <a href="generate_report.php"> <button class="btn btn-dark mx-auto text-center">Generate Report</button></a>
          <a href="login_mg.php"> <button class="btn btn-dark mx-auto text-center">Login Management</button></a>
</div>
_END;
echo "</div>";
echo "</div>";
?>
