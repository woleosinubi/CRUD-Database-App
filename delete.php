<?php


require_once("db.php");

if(isset($_GET['Del']))
         {
             $sn = $_GET['Del'];
             $query = " delete from contact where sn='".$sn."'";
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