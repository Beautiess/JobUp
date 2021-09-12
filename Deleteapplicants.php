<?php include "connectDB/connectDB.php";?>
<?php
 $id = $_GET["id"];

 $sql_del = "DELETE FROM application WHERE id = $id;";
 $result_del = mysqli_query($conn, $sql_del);

 if($result_del){
  echo "This application is deleted.";
  echo "<br><a href='Applicants.php'>Back</a>";
 }
 else{
  echo "This application cannot deleted. Please try again.";
  echo "<br><a href='Applicants.php'>Back</a>";
 }
?>