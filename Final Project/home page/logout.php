<?php
session_start();
if(session_destroy()) // Destroying All Sessions {
header("Location: data.php"); // Redirecting To Home Page

?>