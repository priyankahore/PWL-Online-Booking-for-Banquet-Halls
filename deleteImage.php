<?php
include('../inc/connect.php');
$id=$_GET['id'];
$pid=$_GET['pid'];
$q = mysqli_query($con, "delete from property_image where Id= '$id'");

          if($q){
            ?>
               <script>

                 
                   window.location = 'viewImage.php?id=<?php echo $pid ?>';

                </script>
            <?php

          }

?>