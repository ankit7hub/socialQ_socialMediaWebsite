<?php
//This script will handle login
session_start();

// check if the user is already logged in
if (isset($_SESSION['uname'])) {
  header("location: hom.html");
  exit;
}
require_once "config.php";

$uname = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (empty(trim($_POST['uname'])) || empty(trim($_POST['password']))) {
    $err = "Please enter username + password";
  } else {
    $uname = trim($_POST['uname']);
    $password = trim($_POST['password']);
  }




  if (empty($err)) {
    $sql = "SELECT sno, uname, password FROM udata WHERE uname = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_uname);
    $param_uname = $uname;


    // Try to execute this statement
    if (mysqli_stmt_execute($stmt)) {
      mysqli_stmt_store_result($stmt);
      if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $id, $uname, $hashed_password);
        if (mysqli_stmt_fetch($stmt)) {
          if (password_verify($password, $md5_password)) {
            // this means the password is corrct. Allow user to login
            session_start();
            $_SESSION["uname"] = $uname;
            $_SESSION["sno"] = $sno;
            $_SESSION["loggedin"] = true;

            //Redirect user to welcome page
            header("location: hom.html");

          }
        }
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SOCIALQ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/login.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</head>

<body>
  <h1>SOCIALQ</h1>
  <div class="container">
    <form action="login.php" method="post">

      <input type="text" name="uname" class="em" placeholder="Username"><br>
      <input type="password" name="password" class="em" placeholder="Password"><br>

      <button type="submit" class="btn btn-dark" id="login">Log In</button><br>
      <a class="center" href="" class="center">Forgotten password?</a>
      <div class="line"></div>
      <a type="button" class="btn btn-warning" style="margin: 20px auto 10px 160px ;" href="creat_ac.php">Create new
        account</a>
    </form>
  </div>
  <!--footer-->
  <footer>
    <p>Support: <nbsp> <a href="mailto:ajaydhakad719@gmail.com">ajaydhakad719@gmail.com</a></p>
    <span class="mb-3 mb-md-0 text-muted">© 2023 website, Inc
    </span>
    <!-- footer end -->

</body>

</html>