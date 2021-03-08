<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
    <link rel="stylesheet" type="text/css" href="css/header.css">
 
    <title>Project</title>

</head>
<style>
@import url("https://fonts.googleapis.com/css?family=Exo+2|Yatra+One");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Exo 2", sans-serif;
  
  
}

body {
  background-color: #8b8897;
  margin-bottom: 50px;
  margin-top: 30%;
  background-image :url("image/nine.jpg")
 background-repeat: no-repeat;
}

.wrapper {
  margin-top: 60px;
  text-align: center;
  margin-bottom: 30%;
  
}

.wrapper h1 {
  font-family: "Yatra One", cursive;
  font-size: 48px;
  color: rgb(5, 5, 5);
  margin-bottom: 25px;
}

.our_team {
  width: auto;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.our_team .team_member {
  width: 250px;
  margin: 5px;
  background: rgb(88, 184, 201);
  padding: 20px 10px;
}

.our_team .team_member .member_img {
  background: #e9e5fa;
  max-width: 190px;
  width: 100%;
  height: 190px;
  margin: 0 auto;
  border-radius: 50%;
  padding: 5px;
  position: relative;
  cursor: pointer;
}

.our_team .team_member .member_img img {
  width: 100%;
  height: 100%;
}

.our_team .team_member h3 {
  text-transform: uppercase;
  font-size: 18px;
  line-height: 18px;
  letter-spacing: 2px;
  margin: 15px 0 0px;
}

.our_team .team_member span {
  font-size: 10px;
}

.our_team .team_member p {
  margin-top: 20px;
  font-size: 14px;
  line-height: 20px;
}

.our_team .team_member .member_img .social_media {
  position: absolute;
  top: 5px;
  left: 5px;
  background: rgba(0, 0, 0, 0.65);
  width: 95%;
  height: 95%;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: scale(0);
  transition: all 0.5s ease;
}

.our_team .team_member .member_img .social_media .item {
  margin: 0 10px;
}

.our_team .team_member .member_img .social_media .fab {
  color: #8c7ae6;
  font-size: 20px;
}

.our_team .team_member .member_img:hover .social_media {
  transform: scale(1);
}



</style>

<body>
<header>
  
      <nav class="navbar navbar-expand-lg navbar-white">
         <div class="container-fluid">
            <a class="navbar-brand" href="aboutus.php"><img src="image/logo.gif" width="140" height="auto"></a>
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
                    <a class="nav-link" href="index.php" onclick="destroy();">Logout</a>
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

    
    <div class="wrapper">
      <h1>Our Team</h1>
      <div class="our_team">
        <div class="team_member">
          <div class="member_img">
            <img src="image/shantosh.png" alt="our_team" />
            <div class="social_media">
              <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
              <div class="twitter item"><i class="fab fa-twitter"></i></div>
              <div class="instagram item"><i class="fab fa-instagram"></i></div>
            </div>
          </div>
          <h3>Shantosh Kshetri</h3>
          <span>Developer</span>
          <p>
            As a programmer, it is your job to put yourself out of business. What you do today can be automated tomorrow.
          </p>
        </div>
        <div class="team_member">
          <div class="member_img">
            <img src="image/shiva.png" alt="our_team" />
            <div class="social_media">
              <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
              <div class="twitter item"><i class="fab fa-twitter"></i></div>
              <div class="instagram item"><i class="fab fa-instagram"></i></div>
            </div>
          </div>
          <h3>Shiva Raj Acharya</h3>
          <span>Developer</span>
          <p>
            Most good programmers do programming not because they expect to get paid or get adulation by the public, 
            but because it is fun to program. 
          </p>
        </div>
        <div class="team_member">
          <div class="member_img">
            <img src="image/bawan.png" alt="our_team" />
            <div class="social_media">
              <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
              <div class="twitter item"><i class="fab fa-twitter"></i></div>
              <div class="instagram item"><i class="fab fa-instagram"></i></div>
            </div>
          </div>
          <h3>Bawan Gunadasa</h3>
          <span>Developer</span>
          <p>
           Always code as if the guy who ends up maintaning your code will be a violent psychopath who knows where you live.
          </p>
        </div>
        <div class="team_member">
          <div class="member_img">
            <img src="image/oluwole.png" alt="our_team" />
            <div class="social_media">
              <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
              <div class="twitter item"><i class="fab fa-twitter"></i></div>
              <div class="instagram item"><i class="fab fa-instagram"></i></div>
            </div>
          </div>
        
          <h3>  Oluwole Osinubi</h3>
          <span>Developer</span>
          <p>
             Debugging is twice as hard as writing the code in the first place.Therfore, 
             if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it.
          </p>
        </div>
      </div>
    </div>











<?php 

include 'footer.php';
?>


     
    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  

</body>
</html>

        