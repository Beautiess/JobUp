<!DOCTYPE html>
<html>
<head>
  <title>Apply Here!</title>
  <link href="ConfirmEdit.css" rel="stylesheet">
</head>
<body>
  <nav>
    <a href="index.html">Home</a>
    <a href="Info.html">Information</a>
    <a href="About.html">About</a>
    <a href="Apply.php">Apply</a>
  </nav>
  <h1>Application Form</h1>
<img class="main" src="JobUp10.jpg" with="618px" height="598px" alt="SUBMITTED"><br>
<div class="confirm">
<?php include "connectDB/connectDB.php"?>
<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$bd=$_POST["bd"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$age=intval($_POST["age"]);
$idcard=$_POST["idcard"];
$status=$_POST["status"];
$abilities=$_POST["abilities"];
    $sql = "INSERT INTO application(fname, lname, birthday, gender, address, email, tel, age, idcard, status, abilities, appstatus)
    VALUES('".$fname."','".$lname."','".$bd."','".$gender."','".$address."','".$email."','".$tel."',".$age.",'".$idcard."','".$status."','".$abilities."','waiting');";
    $result = mysqli_query($conn, $sql);

    if($result){
    echo "<br><a href='Searchapplicants.php'>Click here to check your application.</a>";
    }

    else{
    echo "Your form cannot submit. Please try again.: ".$result;
    echo "<br><a href='Application.php'>Back to application form</a>";
    }
?>
</div>
<br>
<br>
<br>
<footer>
    <a href="index.html">Home</a>
    <a href="Active.html">Activity</a>
</footer>
<p class="c">Copyright © 2021 Suwapat Sankwa All rights reserved.</p>
</body>
</html>