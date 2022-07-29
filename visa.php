
<?php 
include "dbconn.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Visa Services</title>
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
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    <script>
        function getcat(val) {
	$.ajax({
	type: "POST",
	url: "getcategory.php",
	data:'country='+val,
	success: function(data){
		$("#category").html(data);
	}
	});
    console.log(data);
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
        
        
        <!--====================== PAGE-COVER ====================-->
        <section class="page-cover back-size" id="cover-tour-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Visa Services</h1>
                       
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="search-result-page" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 content-side">
                            <div class="page-search-form">
                                
                                <h2>Search <span>Visa Services <i class="fa fa-globe"></i></span></h2>
                                <form name="searchfrm" class="pg-search-form" method="post" action="visa.php" enctype="multipart/form-data">   
                                
                                    <div class="row">
                                       
                                        
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label><span><i class="fa fa-globe"></i></span>Country</label>
                                                <select onChange="getcat(this.value);" id="country" class="form-control" name="country" required>
             <option value="">-- Select country --</option>
             <?php
          $records = mysqli_query($conn, "SELECT country From tblcountry");
          
                  while($data = mysqli_fetch_array($records))
                  {

                      ?> 

                      <option value="<?php echo $data['country']; ?>"><?php echo $data['country']; ?></option>
                 <?php }	?>

              
</select>
                                            </div>
                                        </div><!-- end columns -->
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label><span><i class="fa fa-file"></i></span>Category</label>
                                                <select id="category" class="form-control" name="category" required>
                       
                       </select>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                       
                                        
                                    </div><!-- end row -->
                                    
                                    <button class="btn btn-orange" type="submit" name="searchbox">Search</button>
                                </form>
                                    
                            </div><!-- end page-search-form -->
                            
                            
                            
                        </div><!-- end columns -->
        
                    </div><!-- end row -->
                    <?php
                     if(isset($_REQUEST["searchbox"]))
                     { 
                        $country=$_POST['country'];
                        $category=$_POST['category'];
                        $sql = mysqli_query($conn, "SELECT * From tblvisa where category='$category' and country='$country'");
                        while($data = mysqli_fetch_array($sql))
                  {
                    $caption=$data['title'];
                    $image = 'images/'.$data['image'];
                                    

                    $descr=$data['descr'];
                
                  }  
                        ?>
                    <div class="row">
                    
                    <div class="col-12 col-md-12 col-lg-9 col-xl-9 content-side">
                        <div class="visa-detail">
                        <div class="innerpage-heading">
                                        <h2><?php echo $caption; ?></h2>
                                        
                                    </div><!-- end innerpage-heading -->
                            
                            <div class="tab-content">
    
                                <div id="tv-guide-overview" class="tab-pane in active">
                                    <img src=<?php echo $image; ?> class="img-fluid" alt="tour-guide-img" />
                                        
                                    <div class="tab-text">
                                        <br>
                                        <br>
                                       
                                        <p><?php echo $descr; ?></p>
                                        
                                    </div><!-- end tab-text -->
                                </div><!-- end tv-guide-overview -->
                                
                              
                                
   
                                
                             
                                
                            </div><!-- end tab-content -->
                        </div><!-- end detail-tabs -->
                    </div><!-- end columns -->
                    
                    <div class="col-12 col-md-12 col-lg-3 side-bar right-side-bar">
                        <div class="side-bar-block booking-form-block">
                            <div class="booking-form">
                                <h3>Contact Us</h3>
                                <p>Find your dream tour today</p>
                                
                                <form name="f1" action="visa.php" method = "POST" enctype="multipart/form-data">   
                                  
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name" id="txt_name" name="txt_name"/>
                                        </div>
                                        

                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email"  id="txt_email" name="txt_email"/>
                                        </div>
                                        <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Subject" name="txt_subject" id="txt_phone"/>
                                   
                                </div>
                                
                                <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone"  id="txt_phone" name="txt_phone"/>
                                           
                                        </div> 
                                        <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Your Message" name="txt_message" id="txt_message"></textarea>
                                    
                                </div>
                                        
                                            
                                            
                                       
                                        <div class="col-md-12 text-center" id="result_msg"></div>
                                        <button class="btn btn-block btn-orange" id="submit" name="emailsubmit">Submit</button>
                                    </form>
    
                            </div><!-- end booking-form -->
                        </div><!-- end side-bar-block -->
                        
                       
                    </div><!-- end columns -->
                   
                </div><!-- end row -->
                <?php } ?>
                </div><!-- end container -->
            </div><!-- end search-result-page -->
        </section><!-- end innerpage-wrapper -->
        

                <!--===== INNERPAGE-WRAPPER ====-->
             
                  
                
   
        
        
        <?php
            include_once("featurebanner.php");
            include_once("footer.php");
            ?>

        
        
      
    </div>
    
    
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom-navigation.js"></script>
	<script src="js/custom-date-picker.js"></script>
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
$message .= "Telephone: ".$telephone."\n";
$category="Visa service";
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


