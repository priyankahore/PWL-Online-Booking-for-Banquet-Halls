<?php  


include('../inc/connect.php');


     $loggedin =  $_SESSION['username'];
     $ownerid=$_SESSION['ownerid'];
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add Property</title>
  
  <link rel="stylesheet" href="../assest/css/google_releway.css">
   <link rel="stylesheet" href="../assest/css/google_coiny.css">
   <link rel="stylesheet" href="css/awesomefont.css">
   <link rel="stylesheet" href="../assest/css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="../assest/css/style5.css">
 <link rel="stylesheet" href="assest/jquery/jquery-ui.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<body onload="editDetails()">
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
          <a class="nav-link" href="viewBooking.php"><i class="fab fa-accusoft"></i>Views Bookings</a>
        </li>
      
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i class="fas fa-home-heart"></i></i> Property</a>

           <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="home.php"><i class="fas fa-plus-circle"></i>  Add Property</a> </li>
          <li><a class="dropdown-item" href="viewCatering.php"><i class="fas fa-utensils"></i>  Catering Details</a> </li>
           <li> <a class="dropdown-item" href="viewProperty.php"><i class="fal fa-info-square"></i> Property Details</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="profile.php"><i class="fal fa-user-plus"></i><?php echo($loggedin); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../inc/logout.php"><i class="fas fa-bell"></i> Logout</a>
        </li>
        <div class="line"></div>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->
<br><br><br><br><br><br>
  <form action="updateprofile.php" method="get">
<div class="container">
  <div class="row">
     
    <div class="col">
    <div class="card"><br>
   <?php 
     $q = mysqli_query($con, "select * from owner where Owner_id='$ownerid'");

       if(mysqli_num_rows($q)!=0){
  while($rows=mysqli_fetch_assoc($q)){


   ?>
     <input type="hidden" name="id" value="<?php echo $rows['Owner_id'] ?>">   
       
      
      <h2><strong><center>Edit Profile <i onclick="editDetails1()" class="fas fa-pencil-alt"></i></center></strong></h2><br>
        <div class="form-group">
        <div class="content">
      <label>Full Name</label> <br>
      <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $rows['First_Name']." ".$rows['Last_Name']; ?>">
    </div>
  </div>
       <div class="form-group">
        <div class="content">
      <label>Phone Number</label> <br>
      <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $rows['Mobile_no'] ?>">
    </div>
  </div>
     <div class="form-group">
        <div class="content">
      <label>Email Address</label> <br>
      <input type="email" name="email" id="email" class="form-control" value="<?php echo $rows['Email'] ?>" >
    </div>

  </div>
  <div class="form-group">
        <div class="content">
     
      <input type="submit" name="update" id="update" class="btn btn-success" value="update">
    </div>

  </div>
    
    </div>
    </div>


 <div class="col" id="otp">
     <div class="card"><br>
      <h2><strong><center>Change Password <i onclick="editpass()" class="fas fa-pencil-alt"></i></center></strong></h2><br>
         <div class="form-group">
        <div class="content">
          <input type="hidden" name="fnames" id="fnames" class="form-control" value="<?php echo $rows['First_Name']." ".$rows['Last_Name']; ?>">
<input type="hidden" name="emails" id="emails" class="form-control" value="<?php echo $rows['Email'] ?>" >
      <input type="hidden" name="otps" id="otps" value="<?php  echo(rand(1000,3000)); ?>">
      <label>Enter OTP</label> <br>
      
      <input type="password" name="otp" id="otp" class="form-control" placeholder="****">
    </div>
  </div>
     <div class="form-group">
        <div class="content">
      <label>New Password</label> <br>
      <input type="password" name="pass" id="pass" class="form-control" placeholder="*******" ><br>
        <?php 
  if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    if($msg=='changed'){
      ?>
      <h6>Password changed Succcessfully</h6>
      <?php
    }
    else if($msg=='notmatch'){
      ?>
       <h6>OTP is invalid.</h6>

      <?php

    }
}
  ?>
    </div>
  </div>

    <div class="form-group">
        <div class="content">
     
      <input type="submit" name="updateotp" id="updateotp" class="btn btn-success" value="update"><br>
      
    </div>


  </div>
    </div>
    </div>


    <div class="col" id="passdiv">
     <div class="card"><br>
      <h2><strong><center>Change Password <i onclick="editpass()" class="fas fa-pencil-alt"></i></center></strong></h2><br>
         <div class="form-group">
        <div class="content">
      <label>Current Password</label> <br>
      <input type="hidden" name="current" value="<?php  echo $rows['Password'];  ?>">
      <input type="password" name="cpass" id="cpass" class="form-control" value="" placeholder="*******" " >
    </div>
  </div>
     <div class="form-group">
        <div class="content">
      <label>New Password</label> <br>
      <input type="text" name="npass" id="npass" class="form-control" placeholder="*******" ><br>
        <?php 
  if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    if($msg=='changed'){
      ?>
      <h6>Password changed Succcessfully</h6>
      <?php
    }
    else if($msg=='notmatch'){
      ?>
       <h6>Current Password does not match</h6>

      <?php

    }
    else if($msg=='nototp'){
      ?>
      <h6>Please enter correct OTP</h6>
      <?php 
    }
}
  ?>
    </div>
  </div>

    <div class="form-group">
        <div class="content">
     
      <input type="submit" name="updatepass" id="updatepass" class="btn btn-success" value="update"><br>
      <h6 id="fpass"><a id="otpdiv" href="#" onclick="hidediv()">Forget Password?</a></h6>
    </div>

<?php 
}
}

?>
  </div>
    </div>
    </div>
       
  </div>
</div>
</form>
<br><br><br><br><br><br>
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
    <section class="">
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
          <div class="">
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
</body>
<script  src="../assest/js/function.js"></script>
<script src="../assest/js/popper.js"></script>
<script src="../assest/js/jquery.js"></script>
<script src="../assest/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

  function editDetails(){
     document.getElementById("fname").disabled = true;
     document.getElementById("mobile").disabled = true;
     document.getElementById("email").disabled = true;
     document.getElementById("update").style.display="none"
     document.getElementById("cpass").disabled = true;
     document.getElementById("npass").disabled = true;
     document.getElementById("updatepass").style.display="none"
     document.getElementById("fpass").style.display="none"
     document.getElementById("otp").style.display="none"
  }

    function editDetails1(){
    
     var a=document.getElementById("fname")
     var b=document.getElementById("mobile")
     var c=document.getElementById("email")
     var d=document.getElementById("update")

     if(a.disabled==true){
      a.disabled=false;
     }
     else if(a.disabled==false){
      a.disabled=true;
     }

       if(b.disabled==true){
      b.disabled=false;
     }
     else if(b.disabled==false){
      b.disabled=true;
     }

       if(c.disabled==true){
      c.disabled=false;
     }
     else if(c.disabled==false){
      c.disabled=true;
     }

       if(d.style.display=="none"){
      d.style.display="block"
     }
     else if(d.style.display=="block"){
     d.style.display="none";
     }
  }
function editpass(){
    var a=document.getElementById("cpass");
    var b=document.getElementById("npass");
    var d=document.getElementById("updatepass");
    var c=document.getElementById("fpass");
     if(a.disabled==true){
      a.disabled=false;
     }
     else if(a.disabled==false){
      a.disabled=true;
     }

       if(b.disabled==true){
      b.disabled=false;
     }
     else if(b.disabled==false){
      b.disabled=true;
     }
       if(d.style.display=="none"){
      d.style.display="block"
     }
     else if(d.style.display=="block"){
     d.style.display="none";
     }
      if(c.style.display=="none"){
      c.style.display="block"
     }
     else if(c.style.display=="block"){
     c.style.display="none";
     }
}
function hidediv(){
  document.getElementById("passdiv").style.display="none";
  document.getElementById("otp").style.display="block";

}
</script>
<script type='text/javascript'>

  $(document).ready(function(){

   $("#otpdiv").click(function(){
  getdata();

});  

  });

  function getdata(){

    var email=$('#email').val();
    var mobile=$('#mobile').val();
    var fname=$('#fname').val();
    var otps=$('#otps').val();
   
    $.ajax({
      type:"GET",
      url:"fetch.php",
      data:{email:email,mobile:mobile,fname:fname,otps:otps},
      success:function(response){
          console.log(response);
            //$('.Slot').html(response);
        }
    })
  }
</script>

</html>

