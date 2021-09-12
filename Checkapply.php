<!DOCTYPE html>
<html>
<head>
  <title>Apply Here!</title>
  <link href="CheckEdit.css" rel="stylesheet">
</head>
<body>
  <nav>
    <a href="index.html">Home</a>
    <a href="Info.html">Information</a>
    <a href="About.html">About</a>
    <a href="Apply.php">Apply</a>
  </nav>
  <h1>Application Form</h1>
<div class="check">
<?php
    echo"Name: ".$_POST['fname']." ".$_POST['lname']."<br>";
    echo"Birthday: ".$_POST['bd'];
?><br>
<?php
    switch($_POST['gender']){
        case"male": echo"Gender: Male"; break;
        case"female": echo"Gender: Female"; break;
        case"male": echo"Gender: Others"; break;
    }
?><br>
<?php
    echo"Address: ".$_POST['address'];
?><br>
<?php
    echo"Telephone number: ".$_POST['tel'];
?><br>
<?php
    echo"Email: ".$_POST['email']."<br>";
    echo"Age: ".$_POST['age'];
?><br>
<?php
    echo"ID number or passport number: ".$_POST['idcard'];
?><br>
<?php
    switch($_POST['status']){
        case"s": echo"Status: Single"; break;
        case"m": echo"Status: Married"; break;
        case"d": echo"Status: Divorced"; break;
        case"o": echo"Status: Others"; break;
    }
?><br>
<?php
    echo"Abilities: ".$_POST['abilities'];
?><br>
<br>
<form action=Confirmapply.php method="post">
    <input type="text" name="fname" value="<?php echo $_POST['fname'];?>" hidden>
    <input type="text" name="lname" value="<?php echo $_POST['lname'];?>" hidden>
    <input type="date" name="bd" value="<?php echo $_POST['bd'];?>" hidden>
    <input type="text" name="gender" value="<?php echo $_POST['gender'];?>" hidden>
    <input type="text" name="address" value="<?php echo $_POST['address'];?>" hidden>
    <input type="text" name="tel" value="<?php echo $_POST['tel'];?>" hidden>
    <input type="text" name="email" value="<?php echo $_POST['email'];?>" hidden>
    <input type="text" name="age" value="<?php echo $_POST['age'];?>" hidden>
    <input type="text" name="idcard" value="<?php echo $_POST['idcard'];?>" hidden>
    <input type="text" name="status" value="<?php echo $_POST['status'];?>" hidden>
    <input type="text" name="abilities" value="<?php echo $_POST['abilities'];?>" hidden>
    <input type="submit" class="button1" value="Confirm">
    <a href="javascript:history.back()"><button type="button" class="button2">Back</button></a>
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