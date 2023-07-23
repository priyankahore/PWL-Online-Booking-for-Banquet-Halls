<?php  
include('../inc/connect.php');
$loggedin =  $_SESSION['username'];
$ownerid=$_SESSION['ownerid'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>HOME PAGE</title>
  <link rel="stylesheet" href="../assest/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assest/css/google_releway.css">
   <link rel="stylesheet" href="../assest/css/google_coiny.css">
   <link rel="stylesheet" href="../css/awesomefont.css">
   <link rel="stylesheet" href="../assest/css/style.css">
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
    .size{
      height: 600px;
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
span{
  color: black;
}
h2{
text-align:center;
 text-decoration: underline;
}

  </style>
}
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

<br><br><br>


<h2>Catering Details</h2>


<table id="example" class="table table-bordered table-hover ">

  <thead class="table-dark">
    <tr>
      <th>Sr No </th>
      <th>Veg Menu</th>
      <th>Veg Per Plate Rate</th>
      <th>Non Veg Menu</th>
      <th>Veg Per Plate Rate</th>
     
      
      <th> Action</th>
      
    </tr>
  </thead>
  <tbody>
<form method="post"   enctype="multipart/form-data">
  <?php
  $pid=$_GET['pid'];
 $result2=mysqli_query($con,"select * from property where Property_id='$pid'");

 if(mysqli_num_rows($result2)!=0){

while($row=mysqli_fetch_assoc($result2)){
  $pid=$row['Property_id'];

?>

  <tr>
      
      
      <td><?php echo $row['Property_id']; ?></td>
      <td><pre><img src="<?php echo $row['Veg_menu']; ?>" width="50px" height="50px"> <input type="file"  name="veg"></pre></td>
      <td><input type="text" name="vegr" class="form-control" value="<?php echo $row['Veg_plate']; ?>"></td>
      <td><pre><img src="<?php echo $row['Non_veg_menu']; ?>" width="50px" height="50px"> <input type="file" name="nonveg"></pre></td>
     
      <td><input type="text" name="nonvegr" class="form-control" value="<?php echo $row['Non_veg_plate']; ?>"></td>

   
      <td> <input type="submit" name="update" value="Update" class="btn btn-info">

       </form>

        </td>

  </tr>


  <?php  
}
}

  if(isset($_POST['update'])){


      $img1   =  $_FILES['veg']['name'];
      $tmp_name1   = $_FILES['veg']['tmp_name'];
      $location1  =  'upload/';


      $img2   =  $_FILES['nonveg']['name'];
      $tmp_name2   = $_FILES['nonveg']['tmp_name'];
      $location2  =  'upload/';
      

      $veg_rate  = $_POST['vegr'];
      $non_veg_rate  = $_POST['nonvegr'];
    
      $vegimg=$location1.$img1;
      $nonimg=$location2.$img2;

if(!empty($img1) && !empty($img2)){



      $q  = mysqli_query($con,"update property set Veg_menu = '$vegimg', Veg_plate = '$veg_rate', Non_veg_menu= '$nonimg',Non_veg_plate = '$non_veg_rate' where  Property_id  = '$pid'");

      

}

else if(!empty($img1)){

  $q  = mysqli_query($con,"update property set Veg_menu = '$vegimg', Veg_plate = '$veg_rate',Non_veg_plate = '$non_veg_rate' where  Property_id  = '$pid'");

}
else if(!empty($img2)){

  $q  = mysqli_query($con,"update property set Veg_plate = '$veg_rate', Non_veg_menu= '$nonimg',Non_veg_plate = '$non_veg_rate' where  Property_id  = '$pid'");

}

else{

    $q  = mysqli_query($con,"update property set  Veg_plate = '$veg_rate', Non_veg_plate = '$non_veg_rate' where  Property_id  = '$pid' ");


}



        if($q){

            move_uploaded_file($tmp_name1,  $location1.$img1);
            move_uploaded_file($tmp_name2,  $location2.$img2);

?>
<script>
  alert("Updated Successfully");
  window.location   =  'viewCatering.php';
</script>

<?php
    }

    else{

?>
<script>
  alert("Updation Failed");
  window.location   =  'viewCatering.php';
</script>

<?php


    }





  }


  ?>





  
  </tbody>

</table>









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





<script src="../assest/js/popper.js"></script>
<script src="../assest/js/jquery.js"></script>
<script src="../assest/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



</body>
</html>