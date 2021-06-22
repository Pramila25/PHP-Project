<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Add faculty</title>

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
$page_roles = array('advisor');
require_once '../../../checksession.php';
//To get the user name of logged in user
$user = $_SESSION['user'];
$username= $user->username;

require_once '../../../dao/dbConnection.php';
$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<div class="mx-auto text-center">
        <h1 class="display-4">Add Facutly</h1>

          <form action="add.php" method="post" class="p-4">
              <div class="form-group">
                  <label >Faculty ID</label>
                  <input type="text" class="form-control" name="faculty_id">
              </div>

              <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" name="first_name" >
              </div>

              <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="last_name" >
              </div>
              <button type="submit" class="btn btn-primary"> Add</button>
              <a href="view.php" id="cancel" name="cancel" class="btn btn-dark margin_custom_1">Cancel</a>
          </form>
    </div>
_END;


if(isset($_POST['faculty_id']) &&
    isset($_POST['first_name']) &&
    isset($_POST['last_name']))
{
    $faculty_id= $_POST['faculty_id'];
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];


    $query = "INSERT INTO `faculty`(`faculty_id`, `first_name`, `last_name`) VALUES ('$faculty_id','$first_name','$last_name')";

    $result=$conn->query($query);

    if(!$result) echo "INSERT failed: $query <br>" .
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
