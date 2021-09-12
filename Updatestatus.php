<?php include "connectDB/connectDB.php";?>
<html>
<head>
 <meta charset="UTF-8">
 <title>Status update</title>
</head>
<body>
<h3>Status update</h3>
 <?php
 $id = $_GET["id"];
 $sql = "SELECT * FROM application WHERE ID = $id";
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);

   if($num <= 0){
    echo "Not found applicant";
    echo "<br><a href='Applicants.php'>Back</a>";
   }
   else{
    while($row = mysqli_fetch_array($result)){
        echo "First name: ". $row['fname']. "<br>";
        echo "Last name: ". $row['lname']. "<br>";
        echo "Birthday: ". $row['gender']. "<br>";
        echo "Address: ". $row['address']. "<br>";
        echo "Email: ". $row['email']. "<br>";
        echo "Telephone number: ". $row['tel']. "<br>";
        echo "Age: ". $row['age']. "<br>";
        echo "ID number or passport number: ". $row['IDcard']. "<br>";
        echo "Status: ". $row['status']. " <br>";
        echo "Abilities: ". $row['abilities']. " <br>";
        echo "Application status: ". $row['appstatus']. " <br>";
    }
    }?>
    <form action ="Updateresult.php" method="get">
    <input type="radio" name="appstatus" value="passed">Passed
    <input type="radio" name="appstatus" value="notpassed">Not passed<br>
    <input type="text" name="id" value="<?php echo $id; ?>" hidden>
    <input type="submit" value="Submit">
    </form>
