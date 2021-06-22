<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Add Student</title>

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
        <h1 class="display-4">Add Student</h1>
        
          <form action="add.php" method="post" class="p-4">
              <div class="form-group">
                  <label >Student ID</label>
                  <input type="text" class="form-control" name="studentID">
              </div>

              <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" name="fname" >
              </div>

              <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="lname" >
              </div>

              <div class="form-group">
                  <label>Birthday</label>
                  <input type="date" class="form-control" name="Birthday">
              </div>
              <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address">
              </div>
              <div class="form-group">
                  <label>Contact Number</label>
                  <input type="text" class="form-control" name="contactNumb">
              </div>
              <div class="form-group">
                  <label>Program Id</label>
                  <input type="text" class="form-control" name="proId">
              </div>
              <button type="submit" class="btn btn-primary"> Add</button>
              <a href="view.php" id="cancel" name="cancel" class="btn btn-dark margin_custom_1">Cancel</a>
          </form>
    </div>
_END;


if(isset($_POST['studentID']) &&
    isset($_POST['fname']) &&
    isset($_POST['lname']))
     {
    $stID= $_POST['studentID'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $address= $_POST['address'];
    $advisor= $_POST['advisor'];
    $conNum= $_POST['contactNumb'];
    $proId= $_POST['proId'];
    $dob= $_POST['Birthday'];

    $query = "INSERT INTO `studentinfo`(`uid`, `fname`, `lname`, `dob`, `address`, `contact_no`, `advisor_id`, `program_id`) VALUES ('$stID','$fname','$lname' ,'$dob','$address','$conNum' ,'$advisor','$proId')";

    $result=$conn->query($query);

    if(!$result) echo "INSERT failed <br>" .
        $conn->error . "<br><br>";

    $conn->close();
         echo <<<_END
        <script>
          if (confirm("Add Successful")) {
            window.location.href = 'view.php';
          } else {
           window.location.href = 'add.php' ;
          }
        </script>
        
        _END;



}


function get_post($conn, $var) {
    return $conn->real_escape_string($_POST[$var]);
}





?>