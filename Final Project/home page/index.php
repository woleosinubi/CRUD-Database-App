<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>
<style>

html{
  scroll-bechaviour:smooth;
}


body{
  background-color:#A8D2EB;
   
    
      margin:0 auto;
    
    }



    section{
      width:100%;
      height:auto;
  
    }
    .gotopbtn{
      position:fixed;
      width:33px;
      height:32px;
      
      border-radius:50px;
      bottom:40px;
      right:50px;
      
  
    }


.navbar{
  background-color:#2AB2E2;
  padding: 1rem 8rem;
    position:relative;
   margin-right:10px;
    
    
}
#navbarSupportedContent > ul > li:nth-child(n) > a{

    color:white;
    font-size: 17px;
    padding: 8px 18px;
    font-family:bold;
    border:none
}

#navbarSupportedContent > ul > li:nth-child(n) > a:hover{
color:#FBC932;
font-size:17px;
transition:0.6s all;

}
#navbarSupportedContent > button{
    
    border-radius: 30px;
    padding: 0.2rem 0.8rem;
    font-weight: 600;
}
#navbarSupportedContent > form{
margin-top:8px;

}


 

li{
    color:#0457D1;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size:15px;

}


body > div > article > div:nth-child(1){
    padding-left:40px;
    padding-right:40px;
    padding-bottom:30px;
    padding-top:30px;
    color:#1C74D3;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size:14px;
 

}

body > div > article > div:nth-child(2){
    
    padding-left:40px;
    padding-right:40px;
    padding-bottom:30px;
    padding-top:30px;
    
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
   

}
body > div > article > div:nth-child(1) > div.col-sm-5 > h4{
  color: #3B2795;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
body > div > article > div:nth-child(3){

    padding-left:40px;
    padding-right:40px;
    padding-bottom:30px;
    padding-top:30px;
	  color: #1C74D3;

}

body > div > article > div:nth-child(2) > div:nth-child(2) > h5{
	position: absolute;
	width: 287px;
	height: 25px;
	z-index: 22;
	background-color:#3B2795;
	text-align:center;

	font-size: 15px;
    color:white;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}


body > div > article > div:nth-child(2) > div:nth-child(3) > h5{
   position: absolute;
	width: 287px;
	height: 25px;
	z-index: 22;
	background-color:#3B2795;
	text-align: center;
	font-weight: bold;
	font-size: 15px;
    color:white;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;

}


body > div > article > div:nth-child(2) > div:nth-child(1) > h5{
    position: absolute;
	width: 287px;
	height: 25px;
	z-index: 22;
	background-color:#3B2795;
	text-align: center;
	font-weight: bold;
	font-size: 15px;
    color:white;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
 


}

body > div > article > div:nth-child(3) > div:nth-child(3) > h5{
    position: absolute;
	width: 287px;
	height: 25px;
	z-index: 22;

	text-align:left;
	font-weight: bold;
	font-size: 20px;
    color:#3B2795;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;


}

body > div > article > div:nth-child(3) > div:nth-child(1) > h5{
    position: absolute;
	width: 287px;
	height: 25px;
	z-index: 2;
	text-align:left;
	font-weight: bold;
	font-size: 20px;
    color:#3B2795;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;

}

body > div > article > div:nth-child(3) > div:nth-child(2) > h5{
    position: absolute;
	width: 287px;
	height: 25px;
	z-index: 22;
	text-align:left;
  font-weight: bold;
	font-size: 20px;
    color:#3B2795;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;

}


body > div > article > div:nth-child(3) > p{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size:14px;
  
}
#navbarSupportedContent > form > button{
  float:right;
  padding:5px;
  margin-top:8px;
  font-size:15px;
  margin-right:6px;
  border:none;
  background-color:#1C74D3;
  cursor:pointer;
  transition:0.6s all;
}
#navbarSupportedContent > form > button:hover{
  background-color:blue;
  color:white;

}
body > div > footer{
  background-color:#2AB2E2;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;

}
.carousel-item{
  height:100vh;
  min-height:300px;
  background:no-repeat scroll center scroll;
  -webkit-background-size:cover;
  background-size:cover;

}
.carousel-item::before{
  content:"";
  display:block;
  position:absolute;
  top : 0;
  left:0;
  bottom:0;
  right:0;
  background:#000;
  opacity:0.7;


}

.carousel-caption{
  bottom:180px;
  padding-left:100px;
  padding-right:100px;
}
.carousel-caption h5{
  font-size: 100px;
  font-weight: 700;
  color:white;

}
.carousel-caption p{
  font-size:15px;
  top: 2rem;
  font:arial;
  color:white;
}
.slider-btn{
  margin-top: 30px;
}
.slider-btn .btn{
  background-color: #e74c3c;
  color: white;
  border-radius: 0;
  padding: 1.5rem 2rem;
  font-size: 1rem;
  margin-right:15px;
}


</style>
<body>

   <header>
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-white">
         <div class="container-fluid">
            <a class="navbar-brand" href="aboutus.php"><img src="image/logo.gif" width="140" height="auto"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="result.php">Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallary.php">Gallary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
                </ul>  
                <form class="d-flex">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search . . . . . . . . " aria-label="Search">
                  <button class="btn btn-light my-sm-0" type="submit">
                    Search</button>
                </form>              
         </div>
      </nav>
</div>
  </header>
        <div class="row-md">
        <div id="carouselExampleDark" class="carousel carousel-white slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="image/li.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Visit Our School</h5>
              <p> Education is our passport to the future. For tomorrow belongs to the people who prepare it today. </p>

              <div class="slider-btn">
                <a href ="home.php" class="btn btn-lg bth-primary">Sign up Teacher</a>
                <a href ="home.php" class="btn btn-lg bth-primary">Sign up Student</a>
              </div>  
                
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="image/scl.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Visit Our School</h5>
            <p> Children should learn that reading is pleasure, not just something that teachers make you do in school. </p>

              <div class="slider-btn">
                <a href ="index.php" class="btn btn-lg bth-primary">Sign up Teacher</a>
                <a href ="#" class="btn btn-lg bth-primary">Sign up Student</a>
              </div>  
             
            
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/scho.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
            <h5>Visit Our School</h5>
            <p> Do the best you can until you know better. Then when you know better, do better. </p>

              <div class="slider-btn">
                <a href ="index.php" class="btn btn-lg bth-primary">Sign up Teacher</a>
                <a href ="#" class="btn btn-lg bth-primary">Sign up Student</a>
              </div>  

            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
       </div>

       <article>
 
        <div class="row">
            <div class =" row-md-4">
                <p>Aseman private school is one of the best, reputed, well established educational institution which is located on the center of hyvinkää nearby Helsinki. Various intellectual, head teachers, social workers, other teachers as well as members of the community and members of the school management committee highly contributed for the establishment of this educational institution. It was established in 2018. 
                  Innumerable personalities play prominent role for the establishment of this school.
                </p>
            </div>     
          <div class="col-md-4">
          <br><img src="image/scl.jpg" width="auto" height="250">
                          
          </div>

          <div class="col-sm-5"><h4><br>Scholarships Program / 4 months free monthly fee</h4>           
            <p><br>All the teachers are fully devoted to achieve the ambition of quality education. 
            They are performing outstanding performance in the class room activities and outdoor activities. 
            This institution is running towards perfection. The class room activities are running systematically 
            for the better achievement in the field of education.</p>
           
          </div>
        </div>

          <div class ="row">
            <div class =" col-md-4"><h5>Facilities and Services</h5>
                     <ul class="list"><br><br>
                        <li>Transportation Services</li>
                            <li>Attrative Computer  Laboratories</li>
                            <li>Attrative Science  Laboratories</li>
                            <li>Peaceful Library</li><li>Extra Curricular Activities</li>
                            <li>Sports and Extra Activities</li>
                            <li>Day Hostel Program</li>
                            <li>Weakly Educational Program</li>
                     </ul>
                    
               
            </div>     
          <div class="col-md-4"><h5>Download and Program</h5>
                <ul class="list"><br><br>
                    <li>Transportation Services</li>
                    <li>Attrative Computer  Laboratories</li>
                    <li>Attrative Science  Laboratories</li>
                    <li>Peaceful Library</li>
                    <li>Extra Curricular Activities</li>
                    <li>Sports and Extra Activities</li>
                    <li>Day Hostel Program</li>
                    <li>Weakly Educational Program</li>
                </ul>
             </div>
          <div class="col-md-4"><h5>Notic and News</h5>
                <ul class="list"><br><br>
                    <li>Transportation Services</li>
                    <li>Attrative Computer  Laboratories</li>
                    <li>Attrative Science  Laboratories</li>
                    <li>Peaceful Library</li>
                    <li>Extra Curricular Activities</li>
                    <li>Sports and Extra Activities</li>
                    <li>Day Hostel Program</li>
                    <li>Weakly Educational Program</li>
                </ul>
            
           
          </div>
        </div>


        <div class ="row">
            <div class =" col-md-4" text-align= "center"><h5>Computer  Laboratories</h5><br>
            <br><img src="image/cmp.jpg" width="287" height="auto">
                
                </p>
            </div>     
          <div class="col-md-4"text-align= "center"><h5>Science  Laboratories</h5><br>
          <br><img src="image/sc.jpg" width="287" height="auto">
                
             </div>
          <div class="col-md-4"><h5>Peaceful Library</h5><br>
          <br><img src="image/li.jpg" width="287" height="auto">

          </div>
          <p><br>
          All the teachers are fully devoted to achieve the ambition of quality education. 
          They are performing outstanding performance in the class room activities and outdoor activities.
           This institution is running towards perfection. The class room activities are running systematically 
           for the better achievement in the field of education.
                
                </p><br><br><br><br><br><br>

        </div>
    
      </article>




 
     <footer class="bg-2AB2E2 text-white pt-5 pb-4">
        <div class="container text-left text-md-left">
           <div class="row text-left text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Company name</h5>
              <p>Aseman private school</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Product Name</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration:none;">Theproviders</a>
              </p>
              <p>
                <a href="#" class="text-white" style="text-decoration:none;">Crativity</a>
              </p>
              <p>
                <a href="#" class="text-white" style="text-decoration:none;">SourceFiles</a>
              </p>
              <p>
                <a href="#" class="text-white" style="text-decoration:none;">bootstap5</a>
              </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration:none;">Your account</a>
              </p>
              <p>
                <a href="#" class="text-white" style="text-decoration:none;">Become an affilates</a>
              </p>
              
              <p>
                <a href="#" class="text-white" style="text-decoration:none;">Help</a>
              </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
               <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                <p>
                  <i class="fas fa-home     mr-3"></i> Tampere,RT 33530, FI
                </p>
                <p>
                  <i class="fas fa-envelope mr-3"> </i> asemanschool@gmail.com
                </p>
                <p>
                  <i class="fas fa-phone    mr-3"></i> +358-468829106
                </p>
                <p>
                  <i class="fas fa-print    mr-3"></i> +358 468 829 106
                </p>
              </div>  


            


              <hr class="mb-4">

               <div class="row align-items-center">

                  <div class="col-md-7 col-lg-8">
                      <p> Copyright @2020 All rights reserved by:
                          <a href="#" style="text-decoration: none;">
                              <strong class="text-warning" style="font-size:16px;">aseman.fi.
                          </a></p></strong>
                  </div>

                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">

                            <ul class="list-unstyled list-inline">
                              <li class="list-inline-item">
                                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class ="fa    
                                  fa-facebook"></i></a>
                              </li>
                              <li class="list-inline-item">
                                  <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab
                                  fa-twitter"></i></a>
                              </li>
                              <li class="list-inline-item">
                                  <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab 
                                  fa-google-plus"></i></a>
                              </li>
                              <li class="list-inline-item">
                                  <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-linkedin-in"></i></a>
                              </li>
                              <li class="list-inline-item">
                                  <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-youtube"></i></a>
                              </li>
                            </ul>

                          </div>

                      </div>

                </div>

          </div>

        </div>

      </footer>


      <section>


      </section>

      <a class="gotopbtn" href="#"><img src="image/next.png" height=32 width=34 border-radius=150px></a>


   

    
     





    
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    

</body>
</html>