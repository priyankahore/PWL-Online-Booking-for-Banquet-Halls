 
<?php  
include('inc/connect.php');

$pid=$_GET['id'];
$_SESSION['pid']=$pid;


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
    .size{
      height: 350px;

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
.fa-color{
color: #FDCC0D;
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
       
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-phone-alt"></i> Contact Us</a>
        </li>
        <div class="line"></div>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->
<br><br><br>
 <!-- carousel -->           

    <div class="carousel" data-flickity='{ "wrapAround": true,"imagesLoaded":true}'>

           <?php
         $result2=mysqli_query($con,"SELECT * FROM property_image where p_id='$pid'");
         
          if(mysqli_num_rows($result2)){
          
             while($fetch1=mysqli_fetch_assoc($result2)){
    
            
        
?>
      <div class="carousel-cell" >
      
        <a href="Owner/upload/<?php echo($fetch1['Image']);?>"><img class="w3-image"  src="Owner/upload/<?php echo($fetch1['Image']);?>"></a>

      </div>
         <?php
      }
    }
    ?>
    </div>
   <!-- carousel  -->
   <br><br>

   <div class="container">
     <div class="row">
       <div class="col-lg-8">
        <?php

         $result=mysqli_query($con,"select * from property where Property_id='$pid'");
        if(mysqli_num_rows($result)!=0){
        while($rows=mysqli_fetch_assoc($result)){

        ?>

         <h1 style="color:black;text-align:left; font-weight: bold; "><?php echo $rows['Property_name']; ?></h1>

         <h5><?php echo $rows['Address']." "; echo $rows['City']." "; echo $rows['State']." "; echo $rows['pincode']; ?></h5>
         <?php $_SESSION['Address']=$rows['Address']." ".$rows['City']." ".$rows['State']." ".$rows['pincode'];  ?>
         <h3 style="color:black;text-align:left; font-weight: bold; ">Description</h3>
         <h4><?php echo $rows['Description']; ?></h4>
          <h3 style="color:black;text-align:left; font-weight: bold; ">Timing</h3>
          <h4>Morning : 10 a.m. To 4 p.m.</h4>
          <h4>Evening :  06 p.m. To 10 p.m.</h4>
          <h3 style="color:black;text-align:left; font-weight: bold; "><?php echo $rows['Property_type']; ?> Charges</h3>
          <h4><i class="far fa-rupee-sign"></i><?php echo $rows['Property_rate']; ?></h4>
           <h3 style="color:black;text-align:left; font-weight: bold; ">Decoration Charges</h3>
           <h4><i class="far fa-rupee-sign"></i><?php echo $rows['Decoration_rate']; ?></h4>
           <h3 style="color:black;text-align:left; font-weight: bold; ">Catering Services</h3>
           <img src="Owner/<?php echo $rows['Veg_menu']; ?>" width="100px" class="gallery-item" height="100px" alt=""><h4>Veg Menu <i class="far fa-rupee-sign"></i><?php echo $rows['Veg_plate']; ?> per plate</h4> <img src="Owner/<?php echo $rows['Non_veg_menu']; ?>" class="gallery-item" width="100px" height="100px" alt=""><h4>Non veg Menu <i class="far fa-rupee-sign"></i><?php echo $rows['Non_veg_plate']; ?> per plate</h4> 


        
         <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="gallery-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="Owner/<?php echo $rows['Veg_menu']; ?>" class="modal-img" alt="Modal Image"/>
      </div>
      
    </div>
  </div>
</div>
 <h3 style="color:black;text-align:left; font-weight: bold; "><?php echo $rows['Property_type']; ?> Policies</h3>
 <h4>
   <ul>
     <li>Certain destinations may have different travel guidelines for specific times during the year. Please abide by all laws and guidelines as applicable.</li>
     <li>Policies are booking specific and would be informed to the guest at the time of booking or upon Check-In.</li>
     <li>Reference to YOLO includes its affiliates, employees and officers. “Hotel” refers to the hotel or home in which you have made a valid booking through YOLO.</li>
     <li>Please check travel advisory issued by the concerned state government /local authorities before booking, as some places may have COVID-19 related travel/lodging restrictions.</li>
     <li>As a complimentary benefit, your stay is now insured by Acko.</li>
     <li>This propert is serviced under the trade name of Hotel Swagat Lodging as per quality standards of YOLO</li>
   </ul>

 </h4><br>

 <h1 style="color: black;">Customer Reviews</h1>
<center>
<?php
$total=0;
$count=0;
  $result=mysqli_query($con,"select * from feedback where Property_id='$pid'");
       if(mysqli_num_rows($result)!=0){
        while($rows=mysqli_fetch_assoc($result)){
          $total+=$rows['Rating'];
          $count=$count+1;
        }}
        if($count!=0){
        $average=intval($total/$count);

?>

            <?php
              if($average==5){

            ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i><br>
                <h5> <?php echo $average; ?> out of 5</h5>
            <?php
          }

            ?>



              <?php
              if($average==4){

            ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="far fa-star fa-2x fa-color""></i><br>
                <h5> <?php echo $average; ?> out of 5</h5>
            <?php
          }

            ?>


            <?php
              if($average==3){

            ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i><br>
                <h5> <?php echo $average; ?> out of 5</h5>
            <?php
          }

            ?>
              <?php
              if($average==2){

            ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i><br>
                <h5> <?php echo $average; ?> out of 5</h5>
            <?php
          }

            ?>
              <?php
              if($average==1){

            ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i><br>
                <h5> <?php echo $average; ?> out of 5</h5>
            <?php
          }
        }
        else{

          echo "No Reviews";
        }

            ?>

  </center><br>
 <?php

        $result=mysqli_query($con,"select * from feedback where Property_id='$pid'");
       if(mysqli_num_rows($result)!=0){
        while($rows=mysqli_fetch_assoc($result)){



 ?>

 <div class="card" >
     <!--  <div class="card-header"><h5>Reviewed By:</h5></div> -->
      <div class="card-body">
       <div>  </div> <br>
        <div class="form-group">
          <div class="content">
          <div class="row">
        

         <div class="col-sm-8">
           
      <h4>  By: <?php  echo $rows['Customer_name'];  ?> <br> </h4>

         <strong>Review:</strong>
         <?php
              $rating=$rows['Rating'];
              if($rating==5){
                ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
            <?php
              }

              if($rating==4){
                ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="far fa-star fa-2x fa-color""></i>
            <?php
              }
               if($rating==3){
                ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
            <?php
              }

                 if($rating==2){
                ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                <i class="fas fa-star fa-2x fa-color"></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
            <?php
              }

               if($rating==1){
                ?>
                <i class="fas fa-star fa-2x fa-color "></i>
                 <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
                <i class="far fa-star fa-2x fa-color""></i>
            <?php
              }

            ?>
            <br> 
           <h5><?php echo $rows['Description'] ?></h5>
 </div>
 <div class="col-sm-4">
   <a href="Owner/upload/<?php echo $rows['Image']; ?>"><img src="Owner/upload/<?php echo $rows['Image']; ?>" width="200px" height="200px" alt=""> </a>
 </div>
          </div>
        
       </div>
        </div>
       <!--  <div class="form-group" style="margin-top: -100px; margin-left: 220px"> -->
        <div class="col">
          <div class="content">
          
        </div>
        
          
        </div>
      <!-- </div> -->
      </div>
    </div>

    <?php

  }
      }
    ?>

 <h4 class="text-center mt-2 mb-4">
             
            </h4>
       </div>


 <?php
       }
     }

         ?>
       
        <div class="col-lg-4 border border-white size main">
          <div>
             <h2><strong>Booking Details</strong></h2>
          </div>
        <hr>
       

         <div class="md-form md-outline">

      <form action="Login.php" method="post">
        
      
      <input id="datepicker" type="text" class="form-control" placeholder="Booking Date" name="dates">
      <label data-error="wrong" data-success="right" for="name"></label>
    </div>
     <div class="md-form md-outline">
      
      <input  type="number" id="guest" class="form-control" placeholder="Enter number of Guest" name="noofguest">
      <label data-error="wrong" data-success="right" for="name"></label>
    </div>
   <input type="hidden" name="pid" id="pid" value="<?php echo $pid;?>">
      <div class="Slot">
        
       

    </div>
    

    <input type="submit" id="submit"  class="block" value="Login to Continue">
  </form>
       </div>
     </div>
   </div>


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





<script src="assest/js/popper.js"></script>
<script src="assest/js/jquery.js"></script>
<script src="assest/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript">
    document.addEventListener("click",function(e){
      if(e.target.classList.contains("gallery-item")){
        const src=e.target.getAttribute("src");
        document.querySelector(".modal-img").src=src;
        const myModal=new bootstrap.Modal(document.getElementById('gallery-popup'));
        myModal.show();
      }
    })
  </script>

<script type='text/javascript'>

  $(document).ready(function(){
     $('#datepicker').datepicker({
  dateFormat: "yy-mm-dd",
  maxDate:'2M',
  minDate:'0M'

 });
  $("#guest").change(function(){
  getdata();
});   

    $("#datepicker").change(function(){
  getdata();
    $('#submit').hide();
});  

  });

  function getdata(){

    var date=$('#datepicker').val();
    var guest=$('#guest').val();
    var pid=$('#pid').val();
   
    $.ajax({
      type:"GET",
      url:"fetch.php",
      data:{date:date,guest:guest,pid:pid},
      success:function(response){
          //console.log(response);
            $('.Slot').html(response);
        }
    })
  }
</script>

</body>
</html>