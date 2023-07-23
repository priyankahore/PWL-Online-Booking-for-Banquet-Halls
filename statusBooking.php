<?php 
include('../inc/connect.php');

$did=$_GET['did'];
$email=$_GET['email'];
$date=$_GET['date'];
$slot=$_GET['slot'];
$cname=$_GET['cname'];
      $q  = mysqli_query($con,"update reservation set Status='Approved' where R_id  = '$did'");

      

          if($q){
 $to_email = $email;
$subject = "Booking Confirmation";
$body = "Dear ".$cname.", \nYour scheduled Slot on ". $date." ". $slot." is  confirmed by our Property Owner.\nThank you.";
$headers = "From: planningwithlove69@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

            

?>
<script>
  alert("Approved Successfully");
  window.location   =  'viewBooking.php';
</script>

<?php
    }

    else{

?>
<script>
  alert("Updation Failed");
  window.location   =  'viewBooking.php';
</script>

<?php


    }




?>