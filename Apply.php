<!DOCTYPE html>
<html>
<head>
  <title>Apply Here!</title>
  <link href="ApplyEdit.css" rel="stylesheet">
</head>
<body>
  <nav>
    <a href="index.html">Home</a>
    <a href="Info.html">Information</a>
    <a href="About.html">About</a>
    <a href="Apply.php">Apply</a>
  </nav>
  <h1>Application Form</h1>
  <div class="form">
  <?php
    echo "If you have already applied";
    echo "<br><a href='Searchapplicants.php'>Click here to check your application.</a>";
  ?>
  <br>
  <br>
  <img class="main" src="JobUp4.jpg" with="750px" height="500px" alt="APPLY">
  <form name="Application" method="POST" action="checkapply.php">
    <br>
    First name:<br><input type="text" class="name" name="fname"><br>
    <br>
    Last name:<br><input type="text" class="name" name="lname"><br>
    <br>
    Birthday:<br><input type="date" class="bd" name="bd"><br>
    <br>
    Gender:<br>
    <input type="radio" class="gender" name="gender" value="male">Male
    <input type="radio" class="gender" name="gender" value="female">Female
    <input type="radio" class="gender" name="gender" value="others">Others<br>
    <br>
    Address:<br><input class="address" type="text" name="address"><br>
    <br>
    Telephonne number:<br><input type="text" class="tel" name="tel"><br>
    <br>
    Email:<br><input type="text" class="email" name="email"><br>
    <br>
    Age:<br><input type="text" class="age" name="age"><br>
    <br>
    ID number or passport number:<br><input type="text" class="idcard" name="idcard"><br>
    <br>
    Status:<br>
    <select class="status" name="status">
        <option value="s">Single</option>
        <option value="m">Married</option>
        <option value="d">Divorced</option>
        <option value="o">Others</option>
    </select><br>
    <br>
    Abilities:<br><textarea name="abilities"></textarea><br>

    <input type="submit" class="button2" value="Submit">
    <input type="reset" class="button1" value="Reset">

</form>
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
