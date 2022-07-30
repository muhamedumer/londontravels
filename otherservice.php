<!doctype html>
<html lang="en">
<head>
    <title>Services </title>
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
    <link href="css/mystyle.css" rel="stylesheet">
    <script>
            function validateForm() {

var login=document.getElementById("submit");
var emailID = document.f1.txt_email.value;
       atpos = emailID.indexOf("@");
       dotpos = emailID.lastIndexOf(".");
       var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
       
     

       
   if (atpos < 1 || ( dotpos - atpos < 2 )) {
          alert("Please enter correct email ID")
          document.myForm.busemail.focus() ;
          return false;
       }
       
else  if(!document.f1.txt_phone.value.match(phoneno))
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
        
        
        <!--=============== PAGE-COVER ==============-->
        <section class="page-cover" id="cover-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Services </h1>
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="services-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-heading">
                                <h2>Our Services</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                            <?php 
						    include "dbconn.php";
						    ?>
                            <div class="row">
                            <?php
                            $sql=mysqli_query($conn,"select * from tblservice;");
								while($rows = mysqli_fetch_array($sql))
								{ ?>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="service-block-1">
                                        <div class="service-icon-1">
                                            <span><i class="fa fa-globe"></i></span>
                                        </div><!-- end service-icon-1 -->
                                        
								
                                        <div class="service-text-1">
                                            <h3><?php echo $rows['title']; ?></h3>
                                            <p><?php echo $rows['descr']; ?></p>
                                        </div><!-- end service-text-1 -->
                                       
                                    </div><!-- end service-block-1 -->
                                </div><!-- end columns -->
                                <?php } ?> 
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end services-section -->
            
            <div id="search-banner" class="innerpage-103-pd-tb back-size"> 
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                            <p>A perfect place for searching your</p>
                            <h2>Desired Tour & Flight</h2>
                            <p>London tours and travel has expertise of 10+ years in the Tourism Industry. we stay in line with travel trends & connect consumers, businesses worldwide.</p>
                            
                        </div><!-- end columns -->
                        <div class="col-12 col-md-12 col-lg-7 col-xl-7">
                        <div class="page-heading white-heading">
                        	<h2>Contact Us</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        <form name="f1"  onsubmit="return validateForm()" action = "otherservice.php"  method = "POST" enctype="multipart/form-data">   
                                	<div class="row"> 
                                    	<div class="col-12 col-md-6"> 
                                            <div class="form-group">
                                                 <input type="text" class="form-control" placeholder="Your Name"  name="txt_name" required/>
                                                
                                            </div>
        								</div>
                                       
                                        <div class="col-12 col-md-6"> 
                                            <div class="form-group">
                                            <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" placeholder="Phone Number" name="txt_phone" id="txt_phone" required/>
                                                
                                            </div>
        								</div>
                                    </div>
                                    
                                    <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Email"  name="txt_email" id="txt_email" required/>
                                      
                                    </div>
                                        
                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Subject" name="txt_subject" required/>
                                         
                                    </div>
    
                                    <div class="form-group">
                                        <textarea class="form-control" rows="7" placeholder="Your Message" name="txt_message" required></textarea>
                                        
                                    </div>
    								
                                    <button type="submit" name="emailsubmit" id="submit" class="btn btn-orange btn-block">Send</button>
                                </form>
                            </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-banner -->
            
           
        
        </section><!-- end innerpage-wrapper -->
        
        
        
        
        <?php
            include_once("featurebanner.php");
            include_once("footer.php");
        ?>

    </div>
    
    
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/custom-navigation.js"></script>
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
$mail = new PHPMailer(true);

$sender=$_POST["txt_name"];
$subject=$_POST["txt_subject"];
$sendermail=$_POST["txt_email"];
$message=$_POST["txt_message"];
$msg=$message;
$telephone=$_POST["txt_phone"];
$message.="</br>";
$message .= "Telephone: ".$telephone."</br>";

$category="services";
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

