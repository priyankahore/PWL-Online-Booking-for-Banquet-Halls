<?php 
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$fname=$_GET['fname'];
$otps=$_GET['otps'];
echo $email;
echo $mobile;
echo $fname;
echo $otps;

$to_email = $email;
$subject = "Booking Confirmation";
$body = "Dear ".$fname.", \nYour otp is ".$otps.".";
$headers = "From: planningwithlove69@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";

} else {
    echo "Email sending failed...";
}


?>