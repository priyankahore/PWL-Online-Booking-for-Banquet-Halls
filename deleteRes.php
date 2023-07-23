<?php  

include('inc/connect.php');
   $delres  =  $_GET['delres'];
   //$delevent  =  $_GET['delid'];

?>


<!-- Delete User -->



<?php   

  if(isset($delres)){

        $q = mysqli_query($con, "delete from reservation where R_id= '$delres'");

          if($q){
            ?>
               <script>

                   alert('Booking Cancelled Successfully');
                   window.location = 'viewHistory.php';

                </script>
            <?php

          }

          else{

            ?>
               <script>

                    alert('Failed');
                    window.location = 'allsuers.php';

               </script>



            <?php
          }



  }




?>


<!-- Delete Event  -->

<?php   

 /* if(isset($delevent)){

        $q = mysqli_query($con, "delete from add_events where id= $delevent");

          if($q){
            ?>
               <script>

                   alert('Event Deleted Successfully');
                   window.location = 'display_events.php';

                </script>
            <?php

          }

          else{

            ?>
               <script>

                    alert('Failed');
                    window.location = 'display_events.php';

               </script>



            <?php
          }



  }*/




?>