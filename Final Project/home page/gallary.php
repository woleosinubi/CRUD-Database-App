<?php

include("header.php");
?>
 

  

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/gallary.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>

<body>
    <div class="slidershow middle">
      <div class="slides">
        <input type="radio" name="r" id="r1" checked />
        <input type="radio" name="r" id="r2" />
        <input type="radio" name="r" id="r3" />
        <input type="radio" name="r" id="r4" />
        <input type="radio" name="r" id="r5" />
        <input type="radio" name="r" id="r6" />

        <div class="slide s1">
          <img src="image/one.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="image/two.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="image/three.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="image/four.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="image/school.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="image/six.jpg" alt="" />
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
        <label for="r6" class="bar"></label>
      </div>
    </div>
 





</body>
 </html>


<?php
include("footer.php");
?>







