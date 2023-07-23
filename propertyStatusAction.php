<?php
include("../inc/connect.php");



if(isset($_GET['submit'])){

 $cid=$_GET['pid'];
  $status=$_GET['status'];

        $q = mysqli_query($con, "update property set p_Status='$status' where Property_id='$cid'");

          if($q){
            ?>
               <script>

                  alert("Updateed Successfully");
                   window.location = 'property.php';

                </script>
            <?php

          }

          else{

            ?>
               <script>

                    alert('Failed');
                    window.location = 'property.php';

               </script>



            <?php
          }



  }





	
?>
