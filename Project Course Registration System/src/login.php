<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-files/style.css">

</head>
<body>
<!-- Modal HTML -->
<div id="myModal">
    <div class="modal-dialog modal-login">
        <div class="modal-content" style="background: #d8f2f0;">
            <div class="modal-header">
                <div class="avatar">
                    <img src="../images/avatar.png" alt="Avatar">
                </div>
                <h4 class="modal-title">Login</h4>
                <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
            </div>
            <div class="modal-body">
			<div id="err" style="display:none" class="alert alert-danger alert-dismissible fade show">Invalid username or password
    <button type="button" class="close" data-dismiss="alert" onclick="closeError();">&times;</button>
</div>
				<div>
                <form method="post" id="login_form" action="login.php" >
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required" >
                    </div>
                    <div class="form-group">
                        <button   type ="submit" class="btn btn-primary btn-lg btn-block login-btn mx-auto">Login</button>
                    </div>
                </form>
            </div>
            <!--<div class="modal-footer">
                <a href="#">Forgot Password?</a>
            </div>-->
        </div>
    </div>
</div>

</body>
</html>
<script>
function closeError(){
	document.getElementById('err').style.display === "none" ? document.getElementById('err').style.display="block":document.getElementById('err').style.display="none";
}
</script>
<?php

//Example 12-2

require_once 'dao/dbConnection.php';
require_once 'dao/User.php';
$conn = getConnection();
if($conn->connect_error) die($conn->connect_error);

if (isset($_POST['username']) && isset($_POST['password'])) {

	//Get values from login screen
	$tmp_username = mysql_entities_fix_string($conn, $_POST['username']);
	$tmp_password = mysql_entities_fix_string($conn, $_POST['password']);

	//get password from DB w/ SQL
	$query = "SELECT password FROM USER WHERE USER_ID = '$tmp_username'";

	$result = $conn->query($query);
	if(!$result) die($conn->error);

	$rows = $result->num_rows;
	$passwordFromDB="";
	for($j=0; $j<$rows; $j++)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$passwordFromDB = $row['password'];

	}
	//Compare passwords
	if(password_verify($tmp_password,$passwordFromDB))
	{
		$user = new User($tmp_username);
		session_start();
		$_SESSION['user'] = $user;

		if($user->roles[0] == "student"){
			header("Location:Personal-Info.php");
		}else if($user->roles[0] == "admin"){
			header("Location:login/admin.php");
		}else if($user->roles[0] == "advisor"){
			header("Location:login/advisor.php");
		}

	}
	else
	{
		echo "<script type='text/javascript'>
		closeError();
		</script>";
	}

}

$conn->close();


//sanitization functions
function mysql_entities_fix_string($conn, $string){
	return htmlentities(mysql_fix_string($conn, $string));
}

function mysql_fix_string($conn, $string){
	$string = stripslashes($string);
	return $conn->real_escape_string($string);
}



?>
