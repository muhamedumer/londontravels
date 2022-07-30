<?php
include "dbconn.php";
session_start();
$id=$_SESSION['pkgid'];
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

$category="package";
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
    header("Location:packagedetail.php?id=".$id);
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}

?>
