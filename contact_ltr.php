<?php

    // Email configration
    $mail_to = 'lfarra65@gmail.com';
    $subject = 'Contact Information';
    

if(isset($_POST['sendmsg'])){
    if(isset($_POST['first']) && $_POST['first'] !="" &&
        isset($_POST['email']) && $_POST['email'] !="" &&
        isset($_POST['number']) && $_POST['number'] !="" &&
        isset($_POST['msg']) && $_POST['msg'] !=""  ){


    $first = $_POST['first'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $msg = $_POST['msg'];
        
    $message = "Name : " . $first."\r\n";
    $message .= "Email : " . $email."\r\n";
    $message .= "Contact Number : " . $number."\r\n";
    $message .= "Message : " . $msg."\r\n";
        
        
  if(mail($mail_to,$subject ,$message)){
      $alert="Thanks, we'll be in touch";
  }else{
        $alert="Email failed";
    }
   
    }else{
        $alert="All Fields must be filled &#128543; ";
    }
}

?>






 <section class="contact text-center get-touch">
  <div class="container wow fadeInUp"data-wow-duration="1s" data-wow-offset="270">
      
    
       <h2 class="head-after">Feel Free To Contact With Us!</h2>
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
      
      <form name="form" method="POST">
        <div class="col-lg-6 wow fadeInLeft"data-wow-duration="1.5s" data-wow-offset="270">
         <div class="form-group">
             <input class="form-control input-lg" type="text" placeholder="Your Name*" name="first" required>
         </div>
           <div class="form-group">
             <input <?= $invalid_class_name ?? "" ?> class="form-control input-lg"placeholder="Email*" type="text" name="email" required>
         </div>
         <div class="form-group">
             <input class="form-control input-lg" type="text"placeholder="Contact Number"name="number">
         </div>
         <div class="form-group">
           <textarea class="form-control input-lg" placeholder="Your Message*"name="msg" required></textarea>
             </div>
             <button type="submit" class="btn btn-danger"name="sendmsg">Send Message</button>
             </div>
         <div class="col-lg-6 wow zoomIn cont"data-wow-duration="1s" data-wow-offset="270">
         <img src="img/cont.png" alt="img">
         </div>

     </form>
</div>
   
  </div>
  
</section>