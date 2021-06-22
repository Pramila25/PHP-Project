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

    $staff_id = $_POST['staff_id'];


    $query = "DELETE FROM advisor WHERE staff_id ='$staff_id' ";

//Run the query
    $result = $conn->query($query);
    if (!$result) die($conn->error);


    header("Location: view.php");
    $conn->close();
}
?>