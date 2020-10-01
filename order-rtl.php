<?php

    // Email configration
    $mail_to = 'lfarra65@gmail.com';
    $subject = 'Contact Information';
    

if(isset($_POST['sendmsg'])){
    if(isset($_POST['first']) && $_POST['first'] !="" &&
        isset($_POST['email']) && $_POST['email'] !="" &&
        isset($_POST['number']) && $_POST['number'] !="" &&
        isset($_POST['order']) && $_POST['order'] !="" &&
        isset($_POST['msg']) && $_POST['msg'] !=""  ){


    $first = $_POST['first'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $order = $_POST['order'];
    $msg = $_POST['msg'];
        
    $message = "Name : " . $first."\r\n";
    $message .= "Email : " . $email."\r\n";
    $message .= "Contact Number : " . $number."\r\n";
    $message .= "Contact Number : " . $order."\r\n";
    $message .= "Message : " . $msg."\r\n";
        
        
  if(mail($mail_to,$subject ,$message)){
      $alert="شكراً لتواصلك معنا ";
  }else{
        $alert="Email failed";
    }
   
    }else{
        $alert="All Fields must be filled &#128543; ";
    }
}

?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
      <!--    INTERNET META-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--FIRST MOBILE META    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>ترانزويب| أُطلب الآن</title>
    <link rel="shortcut Icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/arabic.css">
    <link rel="stylesheet" href="css/default-theme.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>

    
</head>
<body class="Ar">
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
      
      <a class="navbar-brand text-left" href="#">
        <img class="logo" src="img/logo.png"alt="logo"style="float:left">
        <span class="brand" style="color: #ff4557;">ترانز</span><span class="brand" style="color: #3e5b62;" >ويب</span>
    </a>
    </div>
   
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="ournavbar">
      <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="index.php" class="languages"><i class="fas fa-globe-europe"></i> 
          <span>الإنجليزية</span>
          </a>
          </li>
      <li><a href="join-rtl.php">إنضم إلينا</a></li>
      <li><a href="contact-rtl.php">تواصل معنا</a></li>
      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">خدماتنا <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="lang-rtl.php">الترجمة</a></li>
                            <li><a href="web-rtl.php">برمجة المواقع الإلكترونية</a></li>
                        </ul>
                    </li>
                    <li><a href="about-rtl.php">حول</a></li>
        <li><a href="index-rtl.php">الرئيسية <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </div> <!-- End Of Container-->
</nav>
   <!-- End Our Navbar-->
   
<!-- Start Header-->
<header class="order wow zoomIn">
<div class="container">
<?php
         if(isset($alert) && $alert!=""){
            ?>


            <div class="alert alert-primary btn-lg " role="alert">
                    <?php  echo $alert; ?>
            </div>




            <?php
                }
            ?>
<div class="row">
<div class="col-lg-7">
    <h1>أخبرنا ما هو طلبك!</h1>
<p class="wow zoomIn text-right" style="color:#3e5b62;">
إذا كنت تبحث عن أفضل مزود <span>لخدمات الترجمة وخدمات برمجة وتصميم المواقع</span> وبجودة عالية تلبي كافة رغباتك ومتطلباتك رجاءاً املئ بيانات طلبك هنا.</p>
<img src="img/order-head.png">
</div>


<div class="col-lg-5 form">

<form name="form" method="POST">
        <div class="form-group">
             <input class="form-control input-lg" type="text" placeholder="الإسم*" name="first" required>
         </div>
         <div class="form-group">
             <input <?= $invalid_class_name ?? "" ?> class="form-control input-lg"placeholder="البريد الإلكتروني*" type="text" name="email" required>
         </div>
         <div class="form-group">
             <input class="form-control input-lg" type="text"placeholder="رقم التواصل"name="number">
         </div>
         <div class="form-group">
             <input class="form-control input-lg" type="text"placeholder="الطلب*"name="order">
         </div>
         <div class="form-group">
           <textarea class="form-control input-lg" placeholder="تفاصيل الطلب*"name="msg" required></textarea>
             </div>
 
             <button type="submit" class="btn btn-danger"name="sendmsg">إرسال</button>

     </form>
</div>


</div>
</div>
</header>
<!---------------------Start Footer-------------------->
<footer>
    <div class="container ">
        <div class="row text-right">
            <div class="col-sm-3">
              <h4>عن الشركة:</h4>
              <p><span class="transweb">TransWeb</span> هي شركة مختارة من قبل العديد من العملاء في مجال خدمات الترجمة وبرمجة المواقع الإلكترونية.</p>
            </div>
            <div class="col-sm-3 text-right">
            <h4>روابط سريعة:</h4>
            <ul>
            <li><a href="about-rtl.php">من نحن</a></li>
            <li><a href="#">خدماتنا:</a></li>
            <ul>
            <li><a href="lang-rtl.php">الترجمة</a></li>
            <li><a href="web-rtl.php">برمجة المواقع الإلكترونية</a></li>
            </ul>
            <li><a href="join-rtl.php">إنضم إلينا</a></li>
            <li><a href="contact-rtl.php">تواصل معنا</a></li>
            <li><a href="order-rtl.php">قدٍم طلب</a></li>
            <li> <a href="index.php" class="global">
              <i class="fas fa-globe-europe"></i>  
              <span>الإنجليزية</span>
              </a></li>
            </ul>
            </div>

            <div class="col-sm-3 cont text-right">
          <h4>تواصل معا عبر:</h4>
          <span class="transweb"><i class="far fa-envelope"></i>
          transweb.0056@gmail.com
        </span> <br>
         <span class="transweb"><i class="fab fa-whatsapp"></i> +972567841422</span> <br><br><br>

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
            
      <div class="col-lg-3 text-right">
        <h4>خدماتنا:</h4>
        <ul>
            <li><a href="web-rtl.php">برمجة المواقع الإلكترونية:</a></li>
            <ul>
            <li><a href="web-rtl.php">تصميم المواقع</a></li>
            <li><a href="web-rtl.php">تطوير المواقع</a></li>
</ul>
          
            <li><a href="lang-rtl.php">الترجمة:</a></li>
            <ul>
            <li><a href="lang-rtl.php">السبتايتل</a></li>
            <li><a href="lang-rtl.php">التفريغ السمعي</a></li>
            <li><a href="lang-rtl.php">كتابة المحتوى</a></li>
            <li><a href="lang-rtl.php">الترجمة الفورية</a></li>
            <li><a href="lang-rtl.php">التعليق الصوتي</a></li>
            </ul>
            </ul>
</div>
        
        </div>
    </div>
    <div class="copy-right">
            <p class="text-center"><i class="far fa-copyright"></i> 
            جميع الحقوق محفوظة لدى <span style="color:#fff;"> <span class="transweb">TransWeb Solutions 2020</span> </span>
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