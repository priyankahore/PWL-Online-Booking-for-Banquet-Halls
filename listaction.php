  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<style >
 .fa-color{
color: #FDCC0D;
}
</style>

<?php  
include('inc/connect.php');



 

if(isset($_POST["action"]))
{
  //$city=$_POST['city'];
 
 
 $query = "
  SELECT * FROM property WHERE Property_type!=''";
 if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
 {
  $query .= "
   AND Property_rate BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
  ";
 }
 if(isset($_POST["type"]))
 {
  $brand_filter = implode("','", $_POST["type"]);
  $query .= "
   AND Property_type IN('".$brand_filter."')
  ";
 }
 if(isset($_POST["capacity"]))
 {
  $ram_filter = implode("','", $_POST["capacity"]);
  $query .= "
   AND Capacity IN('".$ram_filter."')
  ";
 }
 

 $result=mysqli_query($con,$query);
$output='';
if(mysqli_num_rows($result)!=0){
  while($rows=mysqli_fetch_assoc($result)){
     $id=$rows['Property_id'];
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
                        <h5 class="card-title"><?php echo $rows['Property_name'];?></h5>
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


                        
                        <p> <?php echo $rows['Address'];?></p>
                         <p><?php echo $rows['Property_type'];?></p>
                         <p><i class="far fa-rupee-sign"></i> <?php echo $rows['Property_rate'];?></p>
                        <p class="card-text">Capacity <?php echo $rows['Capacity'];?></p>
                         <a href="viewDetails.php?id=<?php echo $rows['Property_id']?>" class="btn btn-primary">View Details</a>
                        <a href="listLogin.php?id=<?php echo $rows['Property_id']?>" class="btn btn-success">Book Now</a>
                    </div>
                </div>
              
            </div>
          
        </div>
        </div>
      
<br>
        <?php
  }
} 


else{
  echo "<h3>No records Found</h3>";
}


 echo "$output";
}
 ?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>