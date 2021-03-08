							<?php
$email=$_POST["username"];
$password=$_POST["pw"];


include 'dbconnection.php';
		
$del="delete from login"; 
if(!(mysql_query($del)))
{
	echo"password cant be changed";
}
else
{
	$ins="insert into login values('$email','$password')";
if(!(mysql_query($ins)))
{
echo " unsucessful";
}
else	
{
	
	header("location:index.php");
}
	
}
	
?>