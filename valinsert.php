
<?php



require_once('dbconnect.php');

if($_POST['submit'])
{


$email=$_POST['email'];
$pwd=$_POST['pwd'];


$my_query="";

		
$my_query= " UPDATE  login SET pwd ='$pwd' where email ='$email'";
$data =mysqli_query($connection,$my_query);

echo "<script>alert('Password Changed Back to homepage')</script>";
exit;


}
else	
{
	echo "<script>alert('Password Not Changed')</script>";

}
	

	
?>