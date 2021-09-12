<?php include "connectDB/connectDB.php";?>
<html>
<head><meta charset="utf-8"></head>
<body>
 <?php
  $sql = "SELECT * FROM application";
  $result = mysqli_query($conn, $sql);
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
   echo "<a href='Updatestatus.php?id=".$row['ID']."'>Status</a><hr>";
   echo "<a href='Deleteapplicants.php?id=".$row['ID']."'>Delete</a><hr>";
  }?>
</body>
</html>