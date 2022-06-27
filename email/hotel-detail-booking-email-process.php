<?php
    
	// Edit below lines and give your email and subject
    $email_to = "kiswasolutions06@gmail.com";
    $subject = "Hotel Booking Form";
	                   
	// input fields 
	$email_from = $_POST['txt_email']; 
    $first_name = $_POST['txt_first_name']; 
	$last_name = $_POST['txt_last_name']; 
	$phone = $_POST['txt_phone']; 
	$country = $_POST['txt_country']; 
	$arriv_date = $_POST['txt_arriv_date']; 
	$dept_date = $_POST['txt_dept_date'];
	$rooms = $_POST['txt_rooms'];
	$beds = $_POST['txt_beds'];
	$adults = $_POST['txt_adults'];
	$children = $_POST['txt_children'];
	$pay_method = $_POST['txt_pay_method'];
	
	// clean message
	function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
   
   
   // email message
    $email_message .= "Name: ".clean_string($first_name)." ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
	$email_message .= "country: ".clean_string($country)."\n";
	$email_message .= "Arrival Date: ".clean_string($arriv_date)."\n";
	$email_message .= "Departure Date: ".clean_string($dept_date)."\n";
	$email_message .= "Rooms: ".clean_string($rooms)."\n";
	$email_message .= "Beds: ".clean_string($beds)."\n";
	$email_message .= "Adults: ".clean_string($adults)."\n";
	$email_message .= "Children: ".clean_string($children)."\n";
    $email_message .= "Payment Method: ".clean_string($pay_method)."\n";
	
	
	// headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
   
  // email send 
   if(@mail($email_to, $subject, $email_message, $headers))
   	echo "sent";
  else 
	echo "fail";
?>