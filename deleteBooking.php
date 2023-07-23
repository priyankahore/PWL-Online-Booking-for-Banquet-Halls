<?php 
include('../inc/connect.php');
$delres=$_GET['delres'];
$email=$_GET['email'];
$date=$_GET['date'];
$slot=$_GET['slot'];
$cname=$_GET['cname'];

      $q  = mysqli_query($con,"delete from reservation where R_id= '$delres'");

      

          if($q){
            $to_email = $email;
$subject = "Booking Confirmation";
$body = "Dear ".$cname.", \nYour scheduled Slot on ". $date." ". $slot." is  rejected by our Property Owner.\nThank you.";
$headers = "From: planningwithlove69@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

            

?>
<script>
  alert("Deleted Successfully");
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