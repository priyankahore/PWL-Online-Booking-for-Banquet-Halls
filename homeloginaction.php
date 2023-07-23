<?php  

include('inc/connect.php');



if(isset($_POST['submit'])){



    $email = $_POST['email'];
    $password = $_POST['pass'];


    $q = mysqli_query($con, "select * from customer where Email = '$email' AND Password = '$password' AND Status='Unblock'");

        $row  = mysqli_num_rows($q);

        if($row == 1){

                    $row = mysqli_fetch_array($q);

                    $fname  = $row['First_name'];
                    $lname  = $row['Last_name'];
                    $mob=$row['Mobile'];
                    $email=$row['Email'];
                    $cid=$row['Customer_id'];
                    //$mobileNo  = $row['mobile'];

                    $user  =  $fname ." ". $lname;


                    $_SESSION['username'] = $user;
                    $_SESSION['Mobile'] = $mob;
                    $_SESSION['Email'] = $email;
                     $_SESSION['cid'] = $cid;

               // $_SESSION['email'] = $email;


?>

    <script>

    alert('Login Successfully');

    window.location = 'user.php'; 

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


