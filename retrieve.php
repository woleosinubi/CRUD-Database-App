<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    text-align: center;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #6f4e37;
    color: #ffffff;
    text-align: center;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #6f4e37;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #6f4e37;
}
</style>
<table class="styled-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>FISRT NAME</th>
            <th>LAST NAME</th>
            <th>CITY</th>
            <th>GROUP ID</th>
            <th>CREATE DATE</th>
        </tr>
    </thead>
    <tbody>
        <tr>

<?php
include 'db.php'; 
$sql = "select * from studentsinfo";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
    while($row = $result ->fetch_assoc()){
       /* echo "id:- " . $row["id"] . "First Name:- ". $row["fname"]."Last Name:- ". $row["lname"] 
        
        ."City:- ". $row["city"]. "Group ID:- ". $row["groupid"]. "Create Date:- ". $row["createdate"]
        ."<br>";*/

        echo "<tr><td>" . $row["id"] . "</td><td>". $row["fname"]."</td> <td>". $row["lname"] 
        
        ."</td><td>". $row["city"]. "</td><td>". $row["groupid"]. "</td><td>". $row["createdate"]
        ."</td></tr>";
    }
echo "</table>";
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}
 
$conn->close();
?>

