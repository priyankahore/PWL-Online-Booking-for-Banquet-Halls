<?php 

include('inc/connect.php');
$name=$_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
  <title>HOME PAGE</title>
  <link rel="stylesheet" href="assest/css/bootstrap.css">
  <link rel="stylesheet" href="assest/css/google_releway.css">
   <link rel="stylesheet" href="assest/css/google_coiny.css">
   <link rel="stylesheet" href="css/awesomefont.css">
   <link rel="stylesheet" href="assest/css/style.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC6BIVzOSLd1ZDkfJJL4mpi-aIyPUHuyWg"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i class="fas fa-users-crown"></i> <?php echo $name; ?> </a>

           <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="viewHistory.php"><i class="fal fa-history"></i>  My Bookings</a> </li>
          <li><a class="dropdown-item" href="profile.php"><i class="fas fa-users"></i>  Profile</a> </li>
           <li> <a class="dropdown-item" href="inc/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          </ul>
        </li>
        <li class="nav-item">
        

          
         
          
           
         
         <!--   -->
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




 <!-- carousel -->


 
 <div id="carouselExampleControls" class="carousel slide"  data-ride="carousel">

  <div class="carousel-inner">

      <div class="carousel-item active">

        <img src="assest/img/wed.jpg"    class="d-block w-100" alt="F">
        <div class="carousel-caption">
            <h1>Find Best <span>Destination</span> To Plan <span> Perfect Event</span></h1>
            <form action="list.php" method="get" >
             
         
            <div class="form-box">
            
            <input type="hidden" id="loc_lat" />
            <input type="hidden" id="loc_long" />
                
            
             
                <input type="submit" name="submit" value="View All Property" class="search-btn btn" >   
            </div>
               </form>
          </div>
          <h2 style="color: white"></h5>
          <p style="color: white"></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="assest/img/goa.jpg"   class="d-block w-100" alt="F">
        <div class="carousel-caption">
          <h5 style="color: white"></h5>
          <p style="color: white"></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assest/img/beach.jpg"   class="d-block w-100" alt="F">
        <div class="carousel-caption">
          <p style="color: white"></p>
          <p style="color: white"></p>
        </div>
      </div>
    </div>
    </div>
   <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" ></span>
      <span class="sr-only">Next</span>
    </a>

 <!-- carousel  -->


<br><br>

<!-- BRIEF -->

<div class="section-2 bg-dark">
     <div class="container">
       <div class="row">
         <div class="col-md-7">
           <img src="assest\img\zz.jpg" alt="..." width="590">
         </div>
         <div class="col-md-5">
           <h1 class="text-white"><i class="fas fa-rings-wedding"></i> Planing With Love</h1>
           
           <p class="para-1 text-info">Sometimes family funds and pet care needs don’t align. We believe pet care should be on your terms, so we have several options from which to choose. Early risk of detection gives you comfort that your pets will live longer, healthier lives. Budget-friendly payment plans allow you to spread the costs of care out over time to alleviate financial stress. We have plans for every stage of your canine or feline friends life, from puppy/kitten, to adult and senior. If you have questions, feel free to call or email us for more information.</p>
           <a href="Puppy, Canine Adult and Senior Canine
                    , Feline Adult and Senior Feline">
                    </a>
         </div>
       </div>
     </div>
</div>

<!-- BRIEF -->



<!-- heading & Cards -->

<div class="section-1">
  <div class="container">
      <h1 class="heading-1 text-center">FEATURED SERVICES</h1><br><br>
   <div class="row">


      <div class="col-md-4 card-padding">
       <div class="card services" style="width: 100%;">
        <!-- <div class="inner"> -->
              <img class="card-img-top" src="assest/img/de.jpg"  style="height: 200px"  alt="card image cap">
        <!-- /div> -->
          <div class="card=body">
             <h4 class="card-title ">Garden</h4>
            <p class="card-text">Your pet can benefit greatly from regular wellness examinations or checkups. Whether your pet is a youngster, a “senior citizen,” or any age in between</p>
            <a href="#" class="text-info">Read  More</a>
          </div>
      </div> 
     </div>


     <div class="col-sm-4 card-padding">
        <div class="card services" style="width: 100%;">
                <img class="card-img-top" src="assest/img/lo.jpg" style="height: 200px"    alt="card image cap">
          <div class="card body">
            <h4 class="card-title">Lawns</h4>
            <p class="card-text">Despite what many pet owners may believe, “dog breath” is not just a nuisance – it’s a sign of an unhealthy mouth. Bad breath is caused by</p>
            <a href="#" class="text-info">Read  More</a>
          </div>
        </div> 
     </div>


     <div class="col-sm-4 card-padding">
         <div class="card services" style="width: 100%;">
              <img class="card-img-top" src="assest/img/ce.jpg" style="height: 200px"   alt="card image cap">
          <div class="card body">
            <h4 class="card-title">Halls</h4>
            <p class="card-text">I drive from Vancouver for Dr. Kristina Morris and the wonderful staff at Heartfelt. They treat our animals as we do, our children. </p>
            <a href="#" class="text-info">Read  More</a>
          </div>
        </div>
     </div>

   </div>
  </div>
</div> -->
 
<!-- cards -->
   


<!-- footer -->

<!-- <footer class="footer">
      
      <div class="container">
        <div class="row">
          
          <div class="col-lg-4">
            <h2 class="modify ">CARING CLAWS</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.</p>
          </div>
          <div class="col-lg-4">

            <h6 class="subscribe">SOCIAL LINKS</h3>
              <br>
              <i class="fab fa-facebook-f social"></i>
              <span class="fab fa-twitter social"></span>
              <span class="fab fa-instagram social"></span>
              <span class="fab fa-google social"></span>
          </div>
          <div class="col-lg-4">
            <h6 class="subscribe">SUBSCRIBE TO OUR WEBSITE</h3>
              <br>
            <form>
              <div class="form-group">  
                <input type="email" class="form-control" id="exampleInputEmail1"
                placeholder="Enter email">
              </div>
              
              <button type="submit" class="btn btn-primary submit ">Submit</button>
            </form>
          </div>
        </div>
      </div>
<br><br>
      <div class="container-fluid copy">
        <div class="container">
          
          <span class="text-center">Made with <i class="fas fa-heart"></i> & <i class="fas fa-coffee"> in Pune</i> | ©Caringclaws Inc By Lokesh Jadhav & Abhijit Panicker </span>
        </div>

      </div>

    </footer> -->


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

<!-- FOOTER -->





<script src="assest/js/popper.js"></script>
<script src="assest/js/jquery.js"></script>
<script src="assest/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    
    var searchInput = 'search_input';

  $(document).ready(function () {

    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
  
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
    
        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});

$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude_input').value = '';
    document.getElementById('longitude_input').value = '';
  
    document.getElementById('latitude_view').innerHTML = '';
    document.getElementById('longitude_view').innerHTML = '';
});
  </script>
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

<?php
if(isset($_GET['submit'])){
$city=$_GET['search'];
$date=$_GET['dates'];
$query="select * from reservation,property where reservation.Property_id=property.Property_id  Date='$date' and City='$city'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count!=0){

?>  

 <script>

    alert("No slot available on give date");

   

    </script>

    <?php
  }
  else{

?>
 <script>

    

    window.location = 'list.php'; 

    </script>

<?php
  }
  }
  ?>