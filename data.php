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
require 'db.php'; 
$sql = "select * from contact";
$result = $conn->query($sql);?>
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
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){

        
?>
<tr>
<td><?php echo $row["sn"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["message"]; ?></td>

<td><?php echo $row["Time"]; ?></td>
<td><a href="contact.php?sn=<?php echo $row['sn']; ?>">Update</a></td>
<td><a href="data.php?sn=<?php echo $row['sn']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
</body>
</html>




<?php
include("footer.php");
?>