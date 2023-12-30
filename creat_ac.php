<?php
if (isset($_POST['fname'])) {


    $insert = false;
    //connection veriables
    $server = "localhost";
    $username = "root";
    $password = "";
    //database connection
    $con = mysqli_connect($server, $username, $password);
    //chack the connection
    if (!$con) {
        die("connection to database is failed due to" . mysqli_connect_error());
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "INSERT INTO 
`newuserdata`.`udata`(`fname`,`lname`,`gender`,`age`,`email`,`mobile`,`uname`,`password`,`time`)VAlUES('$fname','$lname','$gender','$age','$email','$mobile','$uname','$password',current_timestamp())";
    if ($con->query($sql) == true) {
        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR:$sql <br> $con->error";
    }
    // close the connection
    $con->close();
    header("Location:hom.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="./css/creat_ac.css">
</head>

<body>
    <div class="container" style="overflow: hidden;">
        <form action="creat_ac.php" method="post">
            <div id="form1" class="setform">
                <h3>PERSONAL INFO</h3>
                <input type="text" name="fname" id="" placeholder="First name">
                <input type="text" name="lname" id="" placeholder="Last name">
                <input type="text" name="gender" id="" placeholder="Gender">
                <input type="number" name="age" id="" placeholder="Age">
                <div class="btn-box">
                    <button type="button" id="next1">Next</button>
                </div>
            </div>
            <div id="form2" class="setform">
                <h3>CONTECT INFO</h3>
                <input type="email" name="email" id="" placeholder="Email">
                <input type="tel" name="mobile" id="" placeholder="Mobile">
                <div class="btn-box">
                    <button type="button" id="back1">Back</button>
                    <button type="button" id="next2">Next</button>
                </div>
            </div>
            <div id="form3" class="setform">
                <h3>SET PASSWORD</h3>
                <input type="user" name="uname" id="" required placeholder="Uniqe username">
                <span class="formerror"></span>
                <input type="password" name="password" id="" required placeholder="Password">
                <span class="formerror"></span>
                <input type="password" name="cpassword" id="" required placeholder="Confirm password">
                <div class="btn-box">
                    <button type="button" id="back2">Back</button>
                    <button type="submit">submit</button>
                </div>
            </div>
        </form>
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step1</small></div>
            <div class="step-col"><small>Step2</small></div>
            <div class="step-col"><small>Step3</small></div>
        </div>
    </div>
    <script src="./js/creat_ac.js"></script>
    <footer>
        <p>Support: <nbsp> <a href="mailto:ajaydhakad719@gmail.com">ajaydhakad719@gmail.com</a></p>
        <span class="mb-3 mb-md-0 text-muted">
            © 2023 website, Inc
        </span>
    </footer>
</body>

</html>