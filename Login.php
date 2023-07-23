<?php  

include('inc/connect.php');


?>

<html>
<head>
    <title>Login And Registration</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<style>
    
*{
    margin: 0;
    padding: 0;
    font-family: 'Roboto' , sans-serif;
}
.hero{
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/bg.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
}
.form-box{
    width: 380px;
    height: 480px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    padding: 5px;
    overflow: hidden;
}
.button-box{
    width: 220px;
    margin: 35px auto;
    position: relative;
    /*box-shadow: 0 0 50px 9px */;
    border-radius: 30px;
}
.toggle-btn{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;       
}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background: linear-gradient(to right, #e62e2e,#e62e2e);
    border-radius: 30px;
    transition: .5s;
}
.social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-icons img{
   width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
}
.input-group{
    top: 120px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}
.submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #e62e2e,#e62e2e);
    border: 0;
    outline: none;
    border-radius: 30px;
}
.chech-box{
    margin: 30px 10px 30px 0;
}
span{
    color: #777;
    font-size: 12px;
    bottom: 68px;
    position: absolute;
}
#login{
    left: 50px;
}
#register{
    left: 450px;
}

</style>


<body>
    <div class="hero">
<div class="form-box">
    <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>
    </div>
   
    <form id="login" method="post" class="input-group">
        <span class="fas fa-envelope"></span>
        <input type="text" name="id" class="input-field" placeholder="Email Id" required>
         <span class="fas fa-key"></span>
        <input type="password" name="pass" class="input-field" placeholder="Enter Password" required>
        <input type="checkbox" class="chech-box"><span>Remember Password</span>
        <input type="submit" value="submit" name="submit1" class="submit-btn">
    </form>
    
    <form id="register" method="post" class="input-group">
      
        <input type="text" class="input-field" name="fname" placeholder="First name" required>
         <input type="text" class="input-field" name="lname" placeholder="Last name" required>
          <input type="number" class="input-field" name="phone" placeholder="Mobile No." required>
        <input type="email" class="input-field" name="email" placeholder="Email Id" required>
        <input type="password" class="input-field"  name="password" placeholder="Enter Password" required>
        <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions</span>

 
        <input type="submit" value="submit" name="submit2" class="submit-btn">
    </form>
  
   <!--  <div class="social-icons">
        <img src="fb.png">
        <img src="tw.png">
        <img src="gp.png">
    </div>  -->

   

</div>
        
    </div>


    
    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
    
    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }

    
    
    </script>
    
</body>
</html>
<?php  

if(  isset($_POST['submit2'])){



$fname =  $_POST['fname'];
$lname =  $_POST['lname'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$password=  $_POST['password'];




 

  

 $q = mysqli_query($con,"insert into customer(First_name,Last_name,Mobile,Email,Password) values('$fname','$lname','$phone','$email','$password')");


 if($q){

$to_email = $email;
$subject = "Registration Successfully";
$body = "Hi, You have successfully registered into YOLO.";
$headers = "From: caringclaws8@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>

    <script>

    alert('Registered Successfully');

    </script>

  

  <?php 


 }
 else{
?>
  
   <script >

    alert('Registration Failed');

    </script>

<?php
 }




 
}
 

if(isset($_POST['submit1'])){



    $email = $_POST['id'];
    $password = $_POST['pass'];


    $q = mysqli_query($con, "select * from customer where Email = '$email' AND Password = '$password'");

        $row  = mysqli_num_rows($q);

        if($row == 1){

                    $row = mysqli_fetch_array($q);

                    $fname  = $row['firstname'];
                    $lname  = $row['lastname'];

                    //$mobileNo  = $row['mobile'];

                   // $user  =  $fname ." ". $lname;


                    //$_SESSION['username'] = $user;


                // $_SESSION['email'] = $email;


?>

    <script>

    alert('Login Successfully');

    window.location = 'index.php'; 

    </script>

  

  <?php 

 }
 else{
?>

   <script >

    alert('Username or password is invalid');
    window.location = 'Login.php'; 

    </script>

<?php
 }


}


?>


