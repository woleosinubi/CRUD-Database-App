<?php 
include 'db.php' ;
if(!$fname = filter_input(INPUT_POST, 'fname')){
    die("First Name field is Required. Please go back and enter First Name");
}
if(!$lname = filter_input(INPUT_POST, 'lname')){
    die("Last Name field is Required. Please go back and enter Last Name");
}
if(!$city = filter_input(INPUT_POST, 'city')){
    die("City field is Required. Please go back and enter City");
}

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$city= $_POST['city'];
$groupid= $_POST['groupid'];
$sql="insert into studentsinfo (fname, lname, city, groupid)
values('$fname', '$lname', '$city', '$groupid')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>