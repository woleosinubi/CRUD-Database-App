<?php 

    require_once("db.php");
    $sn = $_GET['Getsn'];
    $query = " select * from contact where sn='".$sn."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $sn = $row['sn'];
        $name = $row['name'];
        $message = $row['message'];
        $Time = $row['Timee'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Edit</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?sn=<?php echo $sn ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Name " name="name" value="<?php echo $name ?>">
                                <input type="email" class="form-control mb-2" placeholder=" Email " name="email" value="<?php echo $email ?>">
                                <input type="text" class="form-control mb-2" placeholder="Message " name="message" value="<?php echo $message ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>