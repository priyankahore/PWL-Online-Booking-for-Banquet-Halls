<?php  

include('../inc/connect.php');



if(isset($_POST['submit'])){



    $email = $_POST['email'];
    $password = $_POST['pass'];


    $q = mysqli_query($con, "select * from owner where Email = '$email' AND Password = '$password' AND Status='Unblock'");

        $row  = mysqli_num_rows($q);

        if($row == 1){

                    $row = mysqli_fetch_array($q);

                    $fname  = $row['First_Name'];
                    $lname  = $row['Last_Name'];

                     $ownerid=$row['Owner_id'];

                   $user  =  $fname ." ". $lname;

                    
                    $_SESSION['username'] = $user;


                    $_SESSION['ownerid'] = $ownerid;


?>

    <script>

    alert('Login Successfully');
    window.location = 'viewBooking.php'; 
   

    </script>

  

  <?php 

 }
 else{
?>

   <script >

    alert('Username or password is invalid');
    window.location = 'index.php'; 

    </script>

<?php
 }


}


?>


