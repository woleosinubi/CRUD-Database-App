<?php

//set connection variables
$host='localhost:3308';
$username='root';
$password='root';
$database_name= 'contact';

//connection to server & database
$connection = mysqli_connect($host, $username, $password,$database_name) ;
 
//check connection 
if (mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
endif;

?>
