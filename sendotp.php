<?php
$email=$_GET['email'];
echo $email;
$otps=$_GET['otps'];
echo $otps;
$to_email = $email;
$subject = "Booking Confirmation";
$body = "Hi, \nYour otp is ".$otps.".";
$headers = "From: planningwithlove69@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";

} else {
    echo "Email sending failed...";
}

?>