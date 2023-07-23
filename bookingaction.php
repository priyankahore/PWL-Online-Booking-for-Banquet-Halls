<?php 
include('inc/connect.php');
$name=$_SESSION['username'];
$ename=$_SESSION['event'];
$mode=$_GET['mode'];
echo $ename;
$date=$_SESSION['date'];
echo $date;
$slot=$_SESSION['slot'];
echo $slot;
$pname=$_SESSION['pname'];
echo $pname;
$adamt=$_GET['adamt'];
$_SESSION['adamt']=$adamt;
echo $adamt;
$ramt=$_GET['ramt'];
echo $ramt;
$pid=$_SESSION['pid'];
echo $pid;
$cid=$_SESSION['cid'];
echo $cid;
$cname=$_GET['cname'];
$_SESSION['cname']=$cname;
echo $cname;
$mobile=$_GET['mobile'];
$_SESSION['mobile']=$mobile;
echo $mobile;
$email=$_GET['email'];
$_SESSION['email']=$email;
echo $email;

$sql="INSERT INTO `reservation`( `Event_Name`, `Date`, `Slot`, `Property_name`, `Advance_Amt`, `Remaining_Amt`, `Property_id`, `Customer_id`, `Customer_name`, `mobile`, `Email`,`payment_mode`,`Status`) VALUES ('$ename','$date','$slot','$pname','$adamt','$ramt','$pid','$cid','$cname','$mobile','$email','$mode','Pending')";
 $q  = mysqli_query($con,$sql);
 if($q && $mode=="Online"){
 	echo("Success");

  $to_email = $email;
$subject = "Booking Pending";
$body = "Dear ".$cname.", \nYour scheduled Slot on ". $date." ". $slot." is  Pending by our Property Owner. If there are any changes in date or time we will let u know\n Thank you.";
$headers = "From: planningwithlove69@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>
    <script>



    window.location = 'payment.php'; 

    </script>
    <?php

 }
 else if($q && $mode=="Offline"){
  $to_email = $email;
$subject = "Booking Pending";
$body = "Dear ".$cname.", \nYour scheduled Slot on ". $date." ". $slot." is  Pending by our Property Owner. If there are any changes in date or time we will let u know\n Thank you.";
$headers = "From: planningwithlove69@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>
    <script>


    alert("Booked Successfully");
    window.location = 'viewhistory.php'; 

    </script>
    <?php
 
 }

?>
!DOCTYPE html>
<html>
<head>
  <title>HOME PAGE</title>
  <link rel="stylesheet" href="assest/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assest/css/google_releway.css">
   <link rel="stylesheet" href="assest/css/google_coiny.css">
   <link rel="stylesheet" href="css/awesomefont.css">
   <link rel="stylesheet" href="assest/css/style.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
 
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
   
    <style media="screen">
  .carousel-cell {
    margib: auto;
    width: 725px;
    height: 300px;

    }
 .carousel-cell img{
  width: 100%;
  height: 100%;
 }
    /* cell number */
    .carousel-cell:before {
      display: block;
    }

    #gallery-popup .modal-img{
      width: 70%;
    }
   
     .main {
            border-radius: 10px;
             box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            font-family: calibri;

        }
        .block {
  display: block;
  width: 100%;
  border: none;
  background-color: black;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  border-radius: 5px;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
.size{

	margin: auto;
  width: 50%;
  
  padding: 10px;
    }
  </style>

</head>


<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-rings-wedding"></i> Planing With Love</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-home-heart"></i></i> Home</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="Login.php"><i class="fas fa-users-crown"></i> <?php echo $name; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inc/logout.php"><i class="fal fa-user-plus"></i> Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-phone-alt"></i> Contact Us</a>
        </li>
        <div class="line"></div>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->




 <!-- Footer -->

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="left">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>

            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" placeholder="Email address" />
              
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">PWL Lawns</h5><br>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">PWL In Pune</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Mumbai</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In GOA</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Banglore</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">PWL Gardens</h5><br>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">PWL In Hyderabad</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Manali</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Chennai</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Kerla</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">PWL Banquets</h5><br>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">PWL In Oddisa</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Nashik</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Kolkatta</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Delhi</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">PWL Auditorium</h5><br>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">PWL In Nagpur</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Lonaval</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Lucknow</a>
            </li>
            <li>
              <a href="#!" class="text-white">PWL In Kshmr</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="">Made with <i class="fas fa-heart"></i> & <i class="fas fa-coffee"> in Pune</i> | ©Caringclaws Inc By Lokesh Jadhav & Abhijit Panicker </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- FOOTER -->





<script src="assest/js/popper.js"></script>
<script src="assest/js/jquery.js"></script>
<script src="assest/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script type='text/javascript'>
  $(document).ready(function(){
     $('#datepicker').datepicker({
  dateFormat: "dd-mm-yy",
  maxDate:'2M',
  minDate:'0M'

 });

  });
</script>
</body>
</html>