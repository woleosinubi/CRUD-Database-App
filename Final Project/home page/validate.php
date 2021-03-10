<?php
$email=$_POST["email"];
$password=$_POST["password"];
include "db.php";
$res=mysqli_query("select email,password from login");
$flag=1;
while($val=mysqli_fetch_array($res))
{

if($email==$val[0]  and $password==$val[1])
{
	$flag=1;
	break;
}}
if($flag==1)
{
	header("location:home1.php");
}
else
{
	echo "    user id password is incorrect";
}



?>