<?php
include("../inc/connect.php");



if(isset($_GET['submit'])){

 $oid=$_GET['oid'];
  $status=$_GET['status'];

        $q = mysqli_query($con, "update owner set Status='$status' where Owner_id='$oid'");

          if($q){
            ?>
               <script>

                  alert("Updateed Successfully");
                   window.location = 'owner.php';

                </script>
            <?php

          }

          else{

            ?>
               <script>

                    alert('Failed');
                    window.location = 'owner.php';

               </script>



            <?php
          }



  }





	
?>
