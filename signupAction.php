<?php 
include('../inc/connect.php');
if(isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];

	$q = mysqli_query($con,"insert into owner values('','$firstname','$lastname','$mobile','$email','$pass','Unblock')");


 if($q){

$to_email = $email;
$subject = "Registration";
$body = "Hi ".$firstname. ",\nThank You for Registrating Us. You have completed your registration please login __ (http://localhost/YOLO/Login.php)\nThanks and Regards\nPlanningwithlove";
$headers = "From: planningwithlove69@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>

    <script>

    alert('Registered Successfully');
    window.location="signup.php";

    </script>

  

  <?php 

 }
 else{
?>

   <script >

    alert('Registration Failed');
    window.location="signup.php";
    </script>

<?php
 }




 
}
?>


