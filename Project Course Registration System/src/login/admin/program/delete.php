<?php
$page_roles = array('admin');
require_once '../../../checksession.php';
//To get the user name of logged in user
$user = $_SESSION['user'];
$username= $user->username;

require_once '../../../dao/dbConnection.php';

$conn = getConnection();
if ($conn->connect_error) die($conn->connect_error);

if(isset($_POST['delete'])) {

    $program_id = $_POST['program_id'];


    $query = "DELETE FROM program WHERE program_id ='$program_id' ";

//Run the query
    $result = $conn->query($query);
    if (!$result) die($conn->error);


    header("Location: view.php");
    $conn->close();
}
?>