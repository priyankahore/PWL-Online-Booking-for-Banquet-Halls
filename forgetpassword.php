<html>
<head>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assest/css/bootstrap.css">
  <link rel="stylesheet" href="../assest/css/google_releway.css">
   <link rel="stylesheet" href="../assest/css/google_coiny.css">
   <link rel="stylesheet" href="css/awesomefont.css">
   <link rel="stylesheet" href="assest/css/style.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="../assest/css/style5.css">
 <link rel="stylesheet" href="../assest/jquery/jquery-ui.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <style>

        .main {
            margin: 400px;
            margin-bottom: 40px;
            margin-top: 60px;
            padding: 100px;
            padding-top: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            font-family: calibri;

        }

        h3 {

            text-align: center;
            font-family: lucida handwriting;
        }

        input {

            padding: 3px;
            padding-left:30px;
        }

        pre {

            font-size: 14px;
            font-family: calibri;
        }

        .sub{

           /* background: -webkit-linear-gradient(70deg, blue 10%, deepskyblue 90%);*/
            background-color: white;
            width: 300px;
            padding: 10px;
            border: 1px solid black;
        }
        .sub:hover{

            background-color: black;
            border: 1px solid white;
            color: white;


        }


    </style>
</head>
<body>
<div class="main">

<form method="GET" action="forgetpasswordaction.php">
<h3>Set a new password</h3>
<br>

 <div class="md-form md-outline">
    <input type="hidden" name="otp" id="otp"  value="<?php  echo(rand(1000,3000)); ?>">
      <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
      <label data-error="wrong" data-success="center" for="email"></label>
    </div>
    <br>
<div class="md-form md-outline">
      <input type="password" name="otps" class="form-control" placeholder="Enter OTP">
      <label data-error="wrong" data-success="right" for="newpassword"></label>
    </div>
      <br>
    <div class="md-form md-outline">
      <input type="password" name="confirmpass" class="form-control" placeholder="Enter New Password">
      <label data-error="wrong" data-success="right" for="confirmpass"></label>
    </div>
      <br>

<center><input type="submit" class="sub" value="Change password" name="submit"></center>
<br><br>
 <div class="text-center mb-2">
              Click here to- 
              <a href="index.php" class="register-link">
                Login
              </a>
              <?php
                if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    if($msg=='changed'){
      ?>
      <h6>Password changed Succcessfully</h6>
      <?php
    }
    else if($msg=='nototp'){
      ?>
       <h6>OTP is invalid.</h6>

      <?php

    }
}
  ?>



</form>
</div>
<!--Section: Block Content-->
<section class="mb-5 text-center">

  

</section>
<!--Section: Block Content-->
<script src="../assest/js/popper.js"></script>
<script src="../assest/js/jquery.js"></script>
<script src="../assest/js/bootstrap.js"></script>
<script type='text/javascript'>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(document).ready(function(){

   $("#email").change(function(){
    alert("OTP has been send to your email.")
  getdata();

});  

  });

  function getdata(){

    var email=$('#email').val();
   
    var otps=$('#otp').val();
   
    $.ajax({
      type:"GET",
      url:"sendotp.php",
      data:{email:email,otps:otps},
      success:function(response){
          console.log(response);
            //$('.Slot').html(response);
        }
    })
  }
</script>
</body>
</html>