<?php  

include('inc/connect.php');

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
   <link rel="stylesheet" href="assest/jquery/jquery-ui.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">


  
  
   
  
  
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC6BIVzOSLd1ZDkfJJL4mpi-aIyPUHuyWg"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <style >

     .fa-color{
color: #FDCC0D;
}
    
    .carousel-cell {
    width: 500px;
    height: 300px;

    }

    /* cell number */
    .carousel-cell:before {
      display: block;
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
<br><br><br><br>
<div class="container-fluid" > 
  <div class="row"  >
    <div class="col-lg-3">
      <form action="" method="GET">
      <h5>Filter</h5>

    
      <hr>
      <div class="slider-wrap">
        <div>
          <h6>Price</h6>
           <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
          <span id="price_show"></span>
        </div>
        <div id="price_range"></div>
      </div>
      <?php 
      
   

       ?>
    <h6>Location</h6>
   <input type="text" id="city" class="form-control" name="city" value="<?php 
   if(isset($_GET['search'])){
      $city=$_GET['search'];
   

   echo $city; } ?>">
 
      <h6 class="text">Select Category</h6>
      
        
          <ul class="list-group"> 
          <?php

            $sql="SELECT DISTINCT Property_type from property ORDER BY Property_type";
            $result=$con->query($sql);
            while($row=$result->fetch_assoc()){     

          ?>
          <li class="list-group-item">  
              <div class="form-check">  
                  <label class="form-check-label">  
                      <input type="checkbox" class="common_selector type" value="<?php echo $row['Property_type']; ?>">
                      <?php echo $row['Property_type']; ?> 
                  </label>  

              </div>      

          </li> 
          <?php } ?>
     </ul> 
      <h6 class="text">Select Capacity</h6>
         <ul class="list-group"> 
          <?php

            $sql="SELECT DISTINCT Capacity from property ORDER BY Capacity";
            $result=$con->query($sql);
            while($row=$result->fetch_assoc()){     
 
          ?>
          <li class="list-group-item">  
              <div class="form-check">  
                  <label class="form-check-label">  
                      <input type="checkbox" class="common_selector capacity" value="<?php echo $row['Capacity']; ?>" >
                      <?php echo $row['Capacity']; ?> 
                  </label>  

              </div>      

          </li> 
          <?php } ?>
     </ul> 
     </form>
    </div>
    <div class="col-lg-9 filter_data">
      <h5 id="textChange">All Property</h5>
      <hr>
      <div class="text-center">
        <img src="assest/img/loader.gif" id="loader" style="display: none;">
      </div>
      <div class="row"  id="result">
       <?php 

       if(isset($_GET['capacity'])){

        $capacitycheck=[];
        $capacitycheck=$_GET['capacity'];
        foreach($capacitycheck as $rowcapacity){

         //echo $rowcapacity;

          $result=mysqli_query($con,"SELECT * FROM property WHERE Capacity IN ($rowcapacity)");
    if(mysqli_num_rows($result)){

       while($fetch=mysqli_fetch_assoc($result)){
          $id=$fetch['Property_id'];

?>
 
 <div  class="container bcontent bg-light" >

 
 
 
 
 
 
        <div class="card" style="">
            <div class="row no-gutters">
                <div class="col-sm-3"  >

                 

         <!-- carousel -->           

    <div class="carousel" data-flickity='{ "wrapAround": true,"imagesLoaded":true}'>

           <?php
         $result2=mysqli_query($con,"SELECT * FROM property_image where p_id='$id'");
         
          if(mysqli_num_rows($result2)){
          
             while($fetch1=mysqli_fetch_assoc($result2)){
    
            
        
?>
      <div class="carousel-cell">
      
        <img class="" src="Owner/upload/<?php echo($fetch1['Image']);?>">

      </div>
         <?php
      }
    }
    ?>
    </div>
   <!-- carousel  -->


                    
                </div>
               
                <div class="col-sm-7 ">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $id;?></h5>
                        
                        <p> sdj kjsd kgsd</p>
                         <p>asd,jh kjfdhkjasdf kjfh</p>
                         <p><i class="far fa-rupee-sign"></i> Consultation fee at clinic</p>
                        <p class="card-text"><?php echo $fetch['Capacity'];?></p>
                         <a href="" class="btn btn-primary">View Details</a>
                        <a href="" class="btn btn-success">Book Appointment</a>
                    </div>
                </div>
              
            </div>
          
        </div>
        </div>
<br>
        <?php
}
}


        }
       }
       else{
  
    $result=mysqli_query($con,"SELECT * FROM property");
    if(mysqli_num_rows($result)){

       while($fetch=mysqli_fetch_assoc($result)){
          $id=$fetch['Property_id'];

?>
 
 <div  class="container bcontent bg-light" >

 
 
 
 
 
 
        <div class="card" style="">
            <div class="row no-gutters">
                <span class="col-sm-5" >

                 

         <!-- carousel -->           

    <div class="carousel" data-flickity='{ "wrapAround": true,"imagesLoaded":true}'>";

           <?php
         $result2=mysqli_query($con,"SELECT * FROM property_image where p_id='$id'");
         
          if(mysqli_num_rows($result2)){
          
             while($fetch1=mysqli_fetch_assoc($result2)){
    
            
        
?>
      <div class="carousel-cell">
      
        <img class="w3-image" width="500px" height="300px" src="Owner/upload/<?php echo($fetch1['Image']);?>">

      </div>
         <?php
      }
    }
    ?>
    </div>
   <!-- carousel  -->


                    
                </span>
               
                <div class="col-sm-7 ">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $fetch['Property_name'];?></h5>
                           <?php
$total=0;
$count=0;
  $result3=mysqli_query($con,"select * from feedback where Property_id='$id'");
       if(mysqli_num_rows($result3)!=0){
        while($rows1=mysqli_fetch_assoc($result3)){
          $total+=$rows1['Rating'];
          $count=$count+1;
        }}
        if($count!=0){
        $average=intval($total/$count);


?>
<?php echo $average; ?>/5

            <?php
              if($average==5){

            ?>
                <i class="fas fa-star fa-1x fa-color "></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="fas fa-star fa-1x fa-color"></i><br>
               
            <?php
          }

            ?>



              <?php
              if($average==4){

            ?>
                <i class="fas fa-star fa-1x fa-color "></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="far fa-star fa-1x fa-color""></i><br>
               
            <?php
          }

            ?>


            <?php
              if($average==3){

            ?>
                <i class="fas fa-star fa-1x fa-color "></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="far fa-star fa-1x fa-color""></i>
                <i class="far fa-star fa-1x fa-color""></i><br>
                
            <?php
          }

            ?>
              <?php
              if($average==2){

            ?>
                <i class="fas fa-star fa-1x fa-color "></i>
                <i class="fas fa-star fa-1x fa-color"></i>
                <i class="far fa-star fa-1x fa-color""></i>
                <i class="far fa-star fa-1x fa-color""></i>
                <i class="far fa-star fa-1x fa-color""></i><br>
               
            <?php
          }

            ?>
              <?php
              if($average==1){

            ?>
                <i class="fas fa-star fa-1x fa-color "></i>
                <i class="far fa-star fa-1x fa-color""></i>
                <i class="far fa-star fa-1x fa-color""></i>
                <i class="far fa-star fa-1x fa-color""></i>
                <i class="far fa-star fa-1x fa-color""></i><br>
               
            <?php
          }
}

            ?>


                        
                        <p> <?php echo $fetch['Address'];?></p>
                         <p><?php echo $fetch['Property_type'];?></p>
                         <p><i class="far fa-rupee-sign"></i> <?php echo $fetch['Property_rate'];?></p>
                        <p class="card-text">Capacity <?php echo $fetch['Capacity'];?></p>
                         <a href="viewDetails.php?id=<?php echo $fetch['Property_id']?>" class="btn btn-primary">View Details</a>
                        <a href="listLogin.php?id=<?php echo $fetch['Property_id']?>" class="btn btn-success">Book Now</a>
                    </div>
                </div>
              
            </div>
          
        </div>
        </div>
      
<br>
        <?php
}
}
}
 ?>
    
</div>



</div>
</div>

  </div>

</div>

</div>

 


<br><br><br><br><br><br>









   




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



<script src="assest/js/popper.js"></script>
<script src="assest/js/jquery.js"></script>
<script src="assest/js/bootstrap.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$(document).ready(function(){

   

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        //var city=$('#city').val();
       // var slot=$('#slot').val();
        //alert(date);
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var type = get_filter('type');
        var capacity = get_filter('capacity');
        
        $.ajax({
            url:"listaction.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price,type:type, capacity:capacity},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

      $('#city').keyup(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:75000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
 filter_data();
</script>
 <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){ 

                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table div').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script> 
</body>
</html>