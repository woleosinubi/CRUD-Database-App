<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $sn = $_GET['sn'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = " update contact set sn = '".$sn."', name='".$name."', email='".$email."', message='".$message."' where sn='".$sn."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:data.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:data.php");
    }


?>