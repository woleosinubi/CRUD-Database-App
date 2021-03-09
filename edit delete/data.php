<?php
include("header.php");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data from SQL</title>
    <style type = "text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        color : black;
        font-family: monospace;
        font-size: 16px;
        text-align: center;
        margin-top:90px;
    }

    th{
        background-color: #2ab2e2;
        color:white;
    }
    tr:nth-child(odd){
        background-color:#2ab2e2
    }
      
    
    </style>
</head>

    
  
  



<?php 

    require_once("connection.php");
    $query = " select * from contact";
    $result = mysqli_query($con,$query);

?>






<html>
<head>
    <style>
        a.top {
            margin-right:20px;
            margin-top:40px;
            font-size:20px;
            color:red;
        }
        </style>
<title> Update Data</title>
</head>
<body>
   

<table border="1" cellpadding="5">
<tr>
<th>SN</th><th> Name</th><th> Email</th>
<th>message</th><th>Create Date</th><th>Edit</th>
<th>Delete</th>
</tr>
<?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $sn = $row['sn'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $message = $row['message'];
                                        $Time = $row['Time'];
                            ?>
                                    <tr>
                                        <td><?php echo $sn ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $message ?></td>
                                        <td><?php echo $Time ?></td>
                                        <td><a href="edit.php?Getsn=<?php echo $sn ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $sn ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?> 
</table>
</body>
</html>




<?php
include("footer.php");
?>