<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            

            $query = " insert into contact (name, email, message) values('$name','$email','$message')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:data.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:contact.php");
    }



?>