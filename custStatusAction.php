<?php
include("../inc/connect.php");



if(isset($_GET['submit'])){

 $cid=$_GET['cid'];
  $status=$_GET['status'];

        $q = mysqli_query($con, "update customer set Status='$status' where Customer_id='$cid'");

          if($q){
            ?>
               <script>

                  alert("Updateed Successfully");
                   window.location = 'Customer.php';

                </script>
            <?php

          }

          else{

            ?>
               <script>

                    alert('Failed');
                    window.location = 'Customer.php';

               </script>



            <?php
          }



  }





	
?>
