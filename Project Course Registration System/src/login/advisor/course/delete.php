
<?php
$page_roles = array('advisor');
require_once '../../../checksession.php';
//To get the user name of logged in user
$user = $_SESSION['user'];
$username= $user->username;

require_once '../../../dao/dbConnection.php';

$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);

if(isset($_POST['delete'])) {

    $course_id = $_POST['course_id'];


    $query = "DELETE FROM course WHERE course_id ='$course_id' ";

//Run the query
    $result = $conn->query($query);
    if (!$result) die($conn->error);


    header("Location:view.php");
$conn->close();
}
?>
