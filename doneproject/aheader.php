<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
 
    <title>Project</title>

</head>
<style>



</style>

<body>
<header>
  
      <nav class="navbar navbar-expand-lg navbar-white">
         <div class="container-fluid">
            <a class="navbar-brand" href="aboutus.php"><img src="photo\logo.gif" width="140" height="auto"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="data.php">See Message</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="upload.php">Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="changepassword.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php" onclick="session_destroy();">Logout</a>
                </li>
                
                </ul>  
                <form class="d-flex">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search . . . . . . . . " aria-label="Search">
                  <button class="btn btn-light my-sm-0" type="submit">
                    Search</button>
                </form>              
            </div>
      </nav>

    </header>
</body>
</html>
