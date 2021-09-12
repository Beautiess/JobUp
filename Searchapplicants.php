<!DOCTYPE html>
<html>
<head>
  <title>Check Status</title>
  <link href="SearchEdit.css" rel="stylesheet">
</head>
<body>
  <nav>
    <a href="index.html">Home</a>
    <a href="Info.html">Information</a>
    <a href="About.html">About</a>
    <a href="Apply.php">Apply</a>
  </nav>
  <h1>Application status</h1>
<?php include "connectDB/connectDB.php";?>
<html>
<head><meta charset="utf-8"></head>
<body>
<img class="main" src="JobUp11.jpg" with="800px" height="503px" alt="SEARCH">
<br>
<br>
<div class="search">
Search your application
<form action="Searchapplicants.php" action="get">
    ID number or passport number:<br><br><input type = "text" class="textarea" name = "keyword">
    <br>
    <br>
    <input type = "submit" class="button" value="Search">
</form>
<br>
    <?php
        if (!empty($_GET)){
            $keyword = $_GET["keyword"];
            $sql = "SELECT * FROM application where IDcard = '".$keyword."'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            
            if($num <= 0){
                echo "<font color='#92171E'>*** Not found your application ***</font>";

            }
            else {
                echo '<table border = "1" align="center">
                    <tr>
                       <th>First name</th>
                       <th>LAst name</th>
                       <th>ID number or passport number</th>
                       <th>Application status</th>
                    </tr>' ;

                    while($row = mysqli_fetch_array($result)){
                        echo "<tr><td>".$row['fname']."</td>";
                        echo "<td>".$row['lname']."</td>";
                        echo "<td>".$row['IDcard']."</td>";
                        echo "<td>".$row['appstatus']."</td></tr>";
                    }
                    echo'</table>    </div>
                    <br>
                    <br>
                    <br>
                    <footer>
                        <a href="index.html">Home</a>
                        <a href="Active.html">Activity</a>
                    </footer>
                    <p class="c">Copyright © 2021 Suwapat Sankwa All rights reserved.</p>
                    </body>
                    </html>';
                }
            }
        if (empty($_GET)){
        echo'    </div>
                <br>
                <br>
                <br>
                <footer>
                    <a href="index.html">Home</a>
                    <a href="Active.html">Activity</a>
                </footer>
                <p class="c">Copyright © 2021 Suwapat Sankwa All rights reserved.</p>
                </body>
                </html>';
        }
    ?>