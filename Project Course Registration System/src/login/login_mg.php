<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>login_mg</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
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
          <button onclick="location.href='admin/semester.php';" type="button" class="btn btn-dark">semester</button>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm">
            <div class="container mt-5 ">
              <table class="table" class="table table-striped" style="width:100%;">

                <tr>
                  <td><b>User ID</b> </td>
                  <td><b>Name</b> </td>
                  <td><b>Password</b> </td>
                </tr>
                <tr>
                  <td><b>1</b> </td>
                  <td><b>Taylor</b> </td>
                  <td><b>#dfhj!&</b> </td>
                </tr>
                <tr>
                  <td><b>2</b> </td>
                  <td><b>Stephen</b> </td>
                  <td><b>Curfdvry</b> </td>
                </tr>
                <tr>
                  <td><b>3</b> </td>
                  <td><b>Lady</b> </td>
                  <td><b>Gsdfaga</b> </td>
                </tr>
                <tr>
                  <td><b>4</b> </td>
                  <td><b>Bob</b> </td>
                  <td><b>sdjk3F%</b> </td>
                </tr>
                <tr>
                  <td><b>5</b> </td>
                  <td><b>Jay</b> </td>
                  <td><b>Z3hfs^s</b> </td>
                </tr>
              </table>
              <div class="container" style="marigin-top:20px;">
                <button class="btn btn-primary btn-lg login-btn mx-auto">Apply</button>
                <button class="btn btn-primary btn-lg login-btn mx-auto">Cancel</button>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <button type="submit" name="addcourse" style="    margin-top: 20px;
    margin-left: 193px;" class="btn btn-success mg-auto">Add User</button>
            <div class="modal-body" style="margin-top: 34px;">
              <form method="post" id="login_form">
                <div class="form-group">
                  <label>User Name:</label>
                  <input type="text" class="form-control" id="username" name="userName" required="required">
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" name="password" required="required">
                </div>
                <div class="form-group" style="margin-left: 197px;">
                  <button class="btn btn-primary btn-lg login-btn mx-auto">Create</button>
                </div>
              </form>
            </div>
            <div class="container">
              <a href="generate_report.php"> <button class="btn btn-primary btn-lg login-btn mx-auto">Generate Report</button></a>
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

      <style>

      </style>
</body>

</html>
