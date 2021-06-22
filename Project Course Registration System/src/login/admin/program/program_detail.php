<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Program Detail</title>

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

$passedUID = $_POST['program_id'];

$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT * FROM program WHERE program_id = '$passedUID' ";

$result = $conn->query($query);


echo '<h1 class="display-4 mx-auto text-center mt-4">Program Information</h1>';
echo "<div class='card-deck mb-3 text-center'>";

echo "<div class='container mt-5 '>";

echo "<table class='table'>"; // start a table tag in the HTML
echo <<<_END
<tr>
            <td><b>ID</b> </td>
            <td><b>Type</b> </td>
            <td><b>Program Name</b> </td>
            
          </tr>
_END;

while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through result

    echo "<tr><td>" . $row['program_id'] . "</td><td>" . $row['type'] . "</td><td>". $row['program_name'] ."</td></tr>";
}


echo "</table>";

echo "</div>";
echo <<<_END
<form action="delete.php"  method="post" class="d-flex justify-content-center">
	<input type="hidden" name="delete" value="yes">
    <input type='hidden' name='program_id' value='$passedUID'>
    <input type='submit' value='DELETE'>	
	</form>
	
	<form action='update.php' method='post' class="d-flex justify-content-center">
		<input type='hidden' name='delete' value='yes'>
		<input type='hidden' name='program_id' value='$passedUID'>
		<input type='submit' value='UPDATE'>	
	</form>
_END;
echo "</div>";
echo "</div>";

$conn->close()

?>

