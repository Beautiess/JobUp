<?php include "connectDB/connectDB.php";?>
<?php
    $id = intval($_GET["id"]);
    $appstatus = $_GET["appstatus"];

    $sql_update = "UPDATE application SET appstatus = '".$appstatus."'
                    WHERE id = $id ;";

    $result_update = mysqli_query($conn,$sql_update);
    if($result_update){
        echo "Status is updated";
        echo "<br><a href='Applicants.php'>กลับ</a>";
    }

    else{
        echo "Status cannot updated. Please try again.".$result_update;
        echo "<br><a href='Applicants.php'>กลับ</a>";
    }
?>