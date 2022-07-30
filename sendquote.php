<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/gmail-email/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/gmail-email/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/gmail-email/vendor/phpmailer/src/SMTP.php';
include "dbconn.php";
if(isset($_REQUEST['submit1']))
{

    $mail = new PHPMailer(true);
    $subject="Request for flight details-Round trip";
    $sender=$_POST["username"];
    $sendermail=$_POST["email"];
    $phone=$_POST["phone1"];
    $from=$_POST["from1"];
    $destination=$_POST["dest1"];
    $depart=$_POST["dep1"];
    $return=$_POST["ret1"];
    $passengers=$_POST["count1"];

    $message ="Name: ".$sender."</br>";
    $message.="Telephone: ".$phone."</br>";
    $message.="Departure: ".$from."</br>";
    $message.="Destination: ".$destination."</br>";
    $message.="Depart date: ".$depart."</br>";
    $message.="Return date: ".$return."</br>";
    $message.="No of Passengers: ".$passengers."</br>";
    $message.="I want to know about the flight schedules for the above information at earliest. </br>";
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
        ?>
        <script>alert("We will contact you soon with the flight details!!"); </script>
        <?php
        header("Location:ticket.php");
    } catch (Exception $e) {
        echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
    }
  
}
if(isset($_REQUEST['submit2']))
{

    $mail = new PHPMailer(true);
    $subject="Request for flight details-One Way";
    $sender=$_POST["username2"];
    $sendermail=$_POST["email2"];
    $phone=$_POST["phone2"];
    $from=$_POST["from2"];
    $destination=$_POST["dest2"];
    $depart=$_POST["dep2"];  
    $passengers=$_POST["count2"];

    $message ="Name: ".$sender."</br>";
    $message.="Telephone: ".$phone."</br>";
    $message.="Departure: ".$from."</br>";
    $message.="Destination: ".$destination."</br>";
    $message.="Depart date: ".$depart."</br>";

    $message.="No of Passengers: ".$passengers."</br>";
    $message.="I want to know about the flight schedules for the above information at earliest. </br>";

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
        echo "Email message sent.";?>
        <script>alert("We will contact you soon with the flight details!!"); </script>
        <?php
        header("Location:ticket.php");
    } catch (Exception $e) {
        echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>