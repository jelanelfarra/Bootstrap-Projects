<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <!--    INTERNET META-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--FIRST MOBILE META    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>TransWeb| Join Us</title>
    <link rel="shortcut Icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/default-theme.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>

    
</head>
<body>
<!-- Start Our Navbar-->
   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
        <span class="sr-only toggle">Toggle navigation</span>
        <span class="icon-bar toggle"></span>
        <span class="icon-bar toggle"></span>
        <span class="icon-bar toggle"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="logo" src="img/logo.png"alt="logo">
        <span class="brand" style="color: #ff4557;">Trans</span><span class="brand" style="color: #3e5b62;" >Web</span>
    </a>
    </div>
    
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="ournavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Our Services <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="lang.php">Translation</a></li>
                            <li><a href="web.php">Website Development</a></li>
                        </ul>
                    </li>
        <li><a href="contact.php">Contact Us</a></li>
        <li class="active"><a href="join.php">Join Us</a></li>
        <li>
        <a href="index-rtl.php" class="languages"><i class="fas fa-globe-europe"></i> 
          <span>Arabic</span>
          </a>
          </li>
      </ul>
    </div>
  </div> <!-- End Of Container-->
</nav>
   <!-- End Our Navbar-->
   
<!-- Start Header-->
<header class="join-head">
<div class="container">
<div class="row">
<div class="col-lg-7">

<h1 style="color:#fff;">Join Us Now!</h1>
<p class="wow zoomIn" style="color:#fff;">
Ready to partner with the digital services agency in Palestine?</p>
<a href="contact.php"><button class="btn btn-danger one">Contact Us</button></a>
<a href="order.php"><button class="btn btn-danger two">Make Order</button></a>
</div>
<div class="col-lg-5"></div>

</div>

</div>

</header>
   <!-----------------Start Section Join Us------------------------>
   <section class="join text-center wow bounceInOut">
       <div class="container">
           <h1 class="head-after"> TransWeb Solutions! </h1>
           <div class="row">
      <div class="col-lg-6 text-left wow fadeInLeft"data-wow-duration="0.5s"><img src="img/join.png"></div>
      <div class="col-lg-6 text-left wow zoomIn"data-wow-duration="1s">
          <p class="lead"> We are a dynamic team that is passionate about transferring information from one source to another, breaking down various communication barriers. Our dedicated customer service specialists are easily accessible to assist you with progress and quality assurance updates.
If you want to be part of our team, fill in your details bellow.</p>
<a href="https://docs.google.com/forms/d/e/1FAIpQLSchAldvSXh7iGQWkWx-kioTPNG_IIWZUSQoFB-rVBKfIkGM3A/viewform " target="-blank"><button class="btn btn-danger one">Website Development</button></a>
<a href="https://docs.google.com/forms/d/e/1FAIpQLSeBnBp1LQVfimr188mqSMwHbMOv5Py6-VwmAsYU5iJYta7zMg/viewform" target="_blank"><button class="btn btn-danger two">Translation</button></a>
      </div>
    </div>
       </div>
   </section>
    <div class="inverse">
<div class="progress">
    <div class="progress-bar progress-bar-success"
        role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="20"
        style="width: 30%">
    </div>
</div>
</div>
<!---------------------Section contact form-------------------->
<?php
include("contact_ltr.php");
?>
<!---------------------Start Footer-------------------->
<footer>
    <div class="container ">
        <div class="row text-left">
            <div class="col-sm-3">
              <h4>About Company:</h4>
              <p>TransWeb is a company that has been chosen by many translation and web development firms around the world. We handle various types of services in both translation and web development.</p>
            </div>
            <div class="col-sm-3">
            <h4>Useful Links:</h4>
            <ul>
            <li><a href="about.php">About company</a></li>
            <li><a href="#">Our Services:</a></li>
            <ul>
            <li><a href="lang.php">Translation</a></li>
            <li><a href="web.php">Website Development</a></li>
            </ul>
            <li><a href="join.php">join Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="order.php">Make Order</a></li>
            <li> <a href="index-rtl.php" class="global">
              <i class="fas fa-globe-europe"></i>  
              <span>Arabic</span>
              </a></li>
            </ul>
            </div>

            <div class="col-sm-3 cont">
          <h4>Contact Us Via:</h4>
          <span><i class="far fa-envelope"></i>
          transweb.0056@gmail.com
        </span> <br>
         <span><i class="fab fa-whatsapp"></i> +972567841422</span> <br><br><br>

         <div class="social">
            <a href="https://www.facebook.com/Transweb.Soultions/?modal=admin_todo_tour"
                            target="_blank">
                <i class="fab fa-facebook-square face"></i>
            </a>
            <a href="https://twitter.com/TransWeb4" target="_blank">
            <i class="fab fa-twitter-square tw"></i>
            </a>
            <a href="https://www.linkedin.com/company/transwebsolutions" target="_blank">
            <i class="fab fa-linkedin linked"></i>
            </a>
            <a href="https://www.instagram.com/trans.web/" target="_blank">
            <i class="fab fa-instagram insta"></i>
            </a>
</div>
</div>
            
      <div class="col-lg-3">
        <h4>Our Services:</h4>
        <ul>
            <li><a href="web.php">Website Development:</a></li>
            <ul>
            <li><a href="web.php">Web Designing</a></li>
            <li><a href="web.php">Web Development</a></li>
</ul>
          
            <li><a href="lang.php">Translation:</a></li>
            <ul>
            <li><a href="lang.php">Subtitle</a></li>
            <li><a href="lang.php">Transcription</a></li>
            <li><a href="lang.php">Content Writing</a></li>
            <li><a href="lang.php">interpretation</a></li>
            <li><a href="lang.php">Voice Over</a></li>
            </ul>
            </ul>
</div>
        
        </div>
    </div>
    <div class="copy-right">
            <p class="text-center"><i class="far fa-copyright"></i> 
            2020 <span style="color:#fff;">TransWeb Solutions</span> All Rights Reserved.
        </p>
        </div>
</footer>

<!-------------------Start Section Loading------------------------->
<section class="loading-overlay">
  <div class="sk-folding-cube">
  <div class="sk-cube1 sk-cube"></div>
  <div class="sk-cube2 sk-cube"></div>
  <div class="sk-cube4 sk-cube"></div>
  <div class="sk-cube3 sk-cube"></div>
</div>
</section>
<!-------------------Start Scroll To Top------------------------->
 <div id="scroll-top">
 <i class="fa fa-chevron-up fa-3x"></i>
 	
 </div>
  
  
  
   <!-- End Carousel-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="js/script.js"></script>

</body>
</html>