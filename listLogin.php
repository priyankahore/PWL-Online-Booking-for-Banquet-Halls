<?php
include('inc/connect.php');
$pid=$_GET['id'];
$_SESSION['pid']=$pid

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assest/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assest/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assest/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assest/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assest/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assest/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assest/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assest/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assest/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assest/css/util.css">
	<link rel="stylesheet" type="text/css" href="assest/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="loginaction.php" method="post">
					<span class="login100-form-title p-b-43">
						Login 
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="forgetpassword.php" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" value="Submit" class="login100-form-btn">
						
					</div>
					<br>

					            <hr class="my-4">

					<div class="text-center mb-2">
                               Don't have an account?
                           <a href="register.jsp" class="register-link">
                                   Register here
                                </a>
                     </div>
 
				</form>

				<div class="login100-more" style="background-image: url('assest/img/W.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="assest/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assest/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assest/vendor/bootstrap/js/popper.js"></script>
	<script src="assest/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assest/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assest/vendor/daterangepicker/moment.min.js"></script>
	<script src="assest/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assest/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assest/js/main.js"></script>

</body>
</html>