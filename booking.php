<?php
include('inc/connect.php');
$name=$_SESSION['username'];
$pid=$_SESSION['pid'];
$pname=$_SESSION['pname'];
$ptype=$_SESSION['ptype'];
$ename=$_GET['ename'];
$_SESSION['event']=$ename;
$date=$_GET['dates'];
$_SESSION['date']=$date;
$noguest=$_GET['noofguest'];
$cservice=$_GET['cservice'];
$foodtype=$_GET['foodtype'];
$dservice=$_GET['dservice'];
$slot=$_GET['slot1'];
$_SESSION['slot']=$slot;
$mob=$_SESSION['Mobile']; 
$email=$_SESSION['Email'];
  if($dservice=="yes"){
        $drate=$_SESSION['dsrate'];
      }
      else{
        $drate=0;
      }


$prate=$_SESSION['prate'];
?>

<!DOCTYPE html>
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
      height: 480px;
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
          <a class="nav-link active" href="user.php"><i class="fas fa-home-heart"></i></i> Home</a>
        </li> 
        <?php
          if(isset($_SESSION['username'])){
         $name=$_SESSION['username'];
      
         ?>

           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i class="fas fa-users-crown"></i> <?php echo $name; ?> </a>

           <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="viewHistory.php"><i class="fal fa-history"></i>  My Bookings</a> </li>
          <li><a class="dropdown-item" href="login.jsp"><i class="fas fa-users"></i>  Profile</a> </li>
           <li> <a class="dropdown-item" href="inc/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          </ul>
        </li>
        <?php 
      }
      else{
        ?>
      
        <li class="nav-item">
          <a class="nav-link" href="Login.php"><i class="fas fa-users-crown"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fal fa-user-plus"></i> Sign up</a>
        </li>
        <?php
      }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-phone-alt"></i> Contact Us</a>
        </li>
        <div class="line"></div>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->
<br><br><br><br><br>
<?php
//echo $date;
//echo $nguest;
//echo $slot;
?>
<form action="bookingaction.php" method="get" >
    
 

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <div class="card">
      <div class="card-header"><h3>Your Details</h3></div>
      <div class="card-body">
       <div> We will use these details to share your booking information </div> <br>
        <div class="form-group">
          <div class="content">
          <div class="row">
          <div class="col"><strong>Full Name</strong><br><input type="text" class="form-control"  name="cname" value="<?php echo $name; ?>" placeholder="Full Name" ></div>
          <div class="col"><Strong>Mobile No.</Strong><br><input type="number" class="form-control" name="mobile" value="<?php echo $mob; ?>" placeholder="Mobile No." ></div>
        </div>   
       </div>
        </div>
        <div class="form-group">
          <div class="content">
          <strong>Email Address</strong>   <input type="email" class="form-control" id="mobile" name="email" value="<?php echo $email; ?>"placeholder="Email Address" >

        </div>
      </div>
      </div>
    </div>
<br>
<?php         $food1=0;
            if($cservice=="yes"){
                 if($foodtype=="Veg"){
                    $veg1=$_SESSION['veg'];
                    $food1=$veg1*$noguest;
   
                  }
                else if($foodtype=="Non Veg"){
                  $nonveg1=$_SESSION['nonveg'];
                  $food1=$nonveg1*$noguest;
                }
                else{
                  $food1=0;
                  echo $food1;
                }
            }
              $total1=$prate+$drate+$food1;
              $aamt=($total1*10)/100;
          ?>
      <div class="card">
      <div class="card-header"><h3>Complete your booking</h3></div>
      <div class="card-body">
            <div class="form-group">
          <div class="content">
          <div class="row">
          <div class="col"><strong>Advance Amount</strong><br><input type="number" class="form-control"  name="" placeholder="Enter Amount" value="<?php echo($aamt);?>" disabled></div>
           <div class="col"><Strong>Remaining Amount</Strong><br><input type="number" class="form-control" name="" placeholder="Mobile No." value="<?php echo($total1-$aamt);?>" disabled></div>
          <div class="col"><input type="hidden" class="form-control"  name="adamt" placeholder="Enter Amount" value="<?php echo($aamt);?>" ></div>
          <div class="col"><input type="hidden" class="form-control" name="ramt" placeholder="Mobile No." value="<?php echo($total1-$aamt);?>" ></div>
         
        </div>   
       </div>
        </div>
        <strong>Mode of Payment</strong><br>
        <input type="radio" name="mode" value="Online"> Online &nbsp;&nbsp;&nbsp;<input type="radio" name="mode" value="Offline" onclick="offline()"> Offline<br><br>
        <input type="submit" class="btn btn-dark" name="Online"> 
      </div>
      </div>
    </div>
    <div class="col-lg-4 main size">
      <div>
        <h4><strong><?php echo $pname; ?></strong></h4><h6><?php echo $ptype; ?></h6>
        <?php
         $result2=mysqli_query($con,"SELECT * FROM property_image where p_id='$pid' LIMIT 1");
         
          if(mysqli_num_rows($result2)){
          
             while($fetch1=mysqli_fetch_assoc($result2)){
    
            
        
?>
        <img src="Owner/upload/<?php echo($fetch1['Image']);?>" width="70px" height="70px" alt=""class="rounded" style="float:right; margin-top: -70px">

        </div>
         <?php
      }
    }
    ?>
        <hr>
     
          Type of Event:          <?php echo $ename; ?><br>
          Number of Guest:        <?php echo $noguest; ?><br>
          Time Slot:              <?php echo $slot; ?><br>
          Date of Event:          <?php echo $date;?><br>
          Catering Services:      <?php echo $cservice; ?><br>
          Food Type:              <?php echo $foodtype; ?><br>
          Decoration Services:    <?php echo $dservice; ?><br>

          <hr>
          <?php 
          $food=0;
            if($cservice=="yes"){
                 if($foodtype=="Veg"){
                    $veg=$_SESSION['veg'];
                    $food=$veg*$noguest;
                    ?>

                    <script>
                      alert("<?php echo $veg; ?>")
                    </script>

                    <?php
                  }
                else if($foodtype=="Non Veg"){
                  $nonveg=$_SESSION['nonveg'];
                  $food=$nonveg*$noguest;
                }
                else{
                  $food=0;
                  echo $food;
                }
            }
          ?>
          Catering Charges :<?php  if($cservice=="yes"){if($foodtype=="Veg"){ echo "(".$veg." X ".$noguest.") "; echo ($food); }
          else if($foodtype=="Non Veg"){ echo $nonveg." X ".$noguest.") "; echo ($food);}
          else{
            echo "None";
          }
          }
          else{
            echo "None";
          }
          ?><br>
          Decoration Charges:<?php if($dservice=="yes"){echo $drate; }

          else{echo "None";} ?><br>
          <?php echo $ptype; ?>Charges:<?php echo $prate; ?>
          <hr>
         
         <h3> Payable Amount: <?php 
          
       
         $total=$prate+$drate+$food;
          echo ($total); 
       
        
         ?></h3>
      </div>
    </div>
  </div>
</form>
</div>
</div>

<br><br><br><br><br>
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
<script>

function offline(){

var del  =  confirm("Offline payment should be done within 8 hours");

if (del  == true){
  
   
    
}

else{

    event.preventDefault();
}

}
</script>
</body>
</html>