<?php
include 'dbconnect.php';
$a = $_GET['sn'];
$query = " DELETE  FROM contact WHERE sn = '$a'";
$row= mysqli_query($connection,$query);

    if($row){
        echo "Record Deleted with sn: $a <br>";
        echo "<a href='data.php'> Check your data List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}

$connection->close();
?>
