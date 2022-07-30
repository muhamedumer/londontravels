<!doctype html>
<html lang="en">
    <head>
        <title>Contact Us </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/th.jpg" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">
        

        <!-- Sidebar Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script>
            function validateForm() {

var login=document.getElementById("submit");
var emailID = document.f1.email.value;
       atpos = emailID.indexOf("@");
       dotpos = emailID.lastIndexOf(".");
       var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
       
     

       
   if (atpos < 1 || ( dotpos - atpos < 2 )) {
          alert("Please enter correct email ID")
          document.myForm.busemail.focus() ;
          return false;
       }
       
else  if(!document.f1.phone.value.match(phoneno))
   {
  alert("Not a valid phone no!");
     return false;
 }
 
 else{
  login.disabled=true;
  login.textContent="Your message is sending!!"
   return true;
 }

}

</script>
    </head>
    
    
    <body>
    
<div class="wrapper">
    <!--====== LOADER =====-->
    <div class="loader"></div>
        
        
    <?php
    include_once("header.php");
    include_once("sidebar.php");
    ?>  
    
    
    <!--================ PAGE-COVER ===============-->
    <section class="page-cover" id="cover-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Contact Us </h1>
                    
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->
    
    
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="contact-us" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5 no-pd-r">
                        <div class="custom-form contact-form">
                            <h3>Contact Us</h3>
                            <p>Feel free to ask us any questions, suggessions and comments.</p>
                            <form name="f1" onsubmit="return validateForm()" action = "contact-us.php" method = "POST" enctype="multipart/form-data">   
                           
                                    
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Name"  name="txt_name" id="txt_name" required/>
                                     <span><i class="fa fa-user"></i></span>
                                </div>
        
                                <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Email"  name="txt_email" id="email" required/>
                                     <span><i class="fa fa-envelope"></i></span>
                                </div>
                                
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Subject" name="txt_subject" id="txt_subject" required/>
                                     <span><i class="fa fa-question"></i></span>
                                </div>
                                <div class="form-group">
                                <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" placeholder="Phone"  id="phone" name="txt_phone" required/>
                                            <span><i class="fa fa-phone"></i></span>
                                        </div>      
                                <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Your Message" name="txt_message" id="txt_message" required></textarea>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>
                                        <div class="col-md-12 text-center" id="result_msg"></div>
                                <button type="submit" name="emailsubmit" id="submit" class="btn btn-orange btn-block">Send</button>
                            </form>
                        </div><!-- end contact-form -->
                    </div><!-- end columns -->
                    
                    <div class="col-md-12 col-lg-7 no-pd-l">
                        <div class="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.002862309276!2d76.02745056541133!3d10.734262112904375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7bedcbd89efcf%3A0x8f179240be9c0748!2sLondon%20Travel%20%26%20tourism!5e0!3m2!1sen!2smy!4v1656147155757!5m2!1sen!2smy" allowfullscreen></iframe>
                               
                        </div><!-- end map -->
                    </div><!-- end columns -->
                    
                </div><!-- end row -->
            </div><!-- end container -->   
        </div><!-- end contact-us -->
    </section><!-- end innerpage-wrapper -->
          
    <?php
            include_once("footer.php");
        ?>

</div>

        
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-4.4.1.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/custom-validation.js"></script>

        <!-- Page Scripts Ends -->
    </body>
</html>

<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/gmail-email/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/gmail-email/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/gmail-email/vendor/phpmailer/src/SMTP.php';
if(isset($_REQUEST['emailsubmit']))
{// passing true in constructor enables exceptions in PHPMailer

    include "dbconn.php";
$mail = new PHPMailer(true);

$sender=$_POST["txt_name"];
$subject=$_POST["txt_subject"];
$sendermail=$_POST["txt_email"];
$message=$_POST["txt_message"];
$msg=$message;
$telephone=$_POST["txt_phone"];
$message.="</br>";
$message .= "Telephone: ".$telephone."</br>";

$category="contact page";
date_default_timezone_set('Asia/kolkata');    
$date=date("Y-m-d");
$time=date("h:i:sa");

$sql="INSERT INTO contact(username,usermail,phone,message,category,date,time)values('$sender','$sendermail','$telephone','$msg','$category','$date','$time')";
if (mysqli_query($conn, $sql)) { ?>
	<script>alert("Your message has been sent..We will contact you soon..!!"); </script>
    <?php }
try {
    // Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'toshereefa@gmail.com'; // YOUR gmail email
    $mail->Password = 'cgfnlomyipuuddfu'; // YOUR gmail password
   
    // Sender and recipient settings
    $mail->setFrom($sendermail, $sender);
    $mail->addAddress('umertechone@gmail.com', 'London travels');
    $mail->addReplyTo($sendermail, $sender); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
