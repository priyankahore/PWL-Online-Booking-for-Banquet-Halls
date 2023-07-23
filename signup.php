
<!DOCTYPE html>
<html>
<head>

  <title>Sign Up Form</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assest/css/google_releway.css">
     <link rel="stylesheet" href="assest/css/google_coiny.css">
     <link rel="stylesheet" href="css/awesomefont.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
     <link rel="stylesheet" href="assest/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
 <style>
       /**{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
  }

  body{
    background: rgb(199, 79, 4);*/


  body{
  height: 100vh;
  background: rgb(37,41,28);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.card{
  overflow: hidden;
  border: 0 !important;
  border-radius: 20px !important;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.img-left{
  width: 45%;
  background-image: url('..\assest\img\abcd.jpg');
  background-size: cover;
}

.card-body{
  padding: 2rem;
}

.title{
  margin-bottom: 2rem;
}

.form-input{
  position: relative;
}

.form-input input{
  width: 100%;
  height: 45px;
  padding-left: 40px;
  margin-bottom: 20px;
  box-sizing: border-box;
  box-shadow: none;
  border: 1px solid #00000020;
  border-radius: 50px;
  outline: none;
  background: transparent;
}

.form-input span{
  position: absolute;
  top: 10px;
  padding-left: 15px;
  color: #557846;
}

.form-input input::placeholder{
  color: black;
  padding-left: 0px;
}

.form-input input:focus, .form-input input:valid{
  border: 2px solid #c74f04;
}

.form-input input:focus::placeholder{
  color: #454b69;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before{
  background-color: #c74f04 !important;
  border: 0px;
}

.form-box button[type="submit"]{
  margin-top: 10px;
  border: none;
  cursor: pointer;
  border-radius: 50px;
  background: #bf0a04;
  color: #fff;
  font-size: 90%;
  font-weight: bold;
  letter-spacing: .1rem;
  transition: 0.5s;
  padding: 12px;
}

.form-box button[type="submit"]:hover{
  background: #25291C;
}

.forget-link, .register-link{
  color: #25291C;
  font-weight: bold;
}

.forget-link:hover, .register-link:hover{
  color: #25291C;
  text-decoration: none;
}

.form-box .btn-social{
  color: white !important;
  border: 0;
  font-weight: bold;
}

/*.form-box .btn-facebook{
  background: #4866a8;
}

.form-box .btn-google{
  background: #da3f34;
}

.form-box .btn-twitter{
  background: #33ccff;
}

.form-box .btn-facebook:hover{
  background: #3d578f;
}

.form-box .btn-google:hover{
  background: #bf3b31;
}

.form-box .btn-twitter:hover{
  background: #2eb7e5;
}*/


    </style>
     
</head>
<body>


<div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">

 <!-- left image code -->
        <div class="img-left d-none d-md-flex">
          <img src="..\assest\img\signup.jpg" height="700" width="400">
        </div>

<!-- inside card -->
        <div class="card-body">
          <h4 class="title text-center mt-4">Welcome To Our Family</h4>
          <form  method="post" action="signupAction.php" class="form-box px-3" id="registration">
<br>
<!-- First Name Last Name -->
           <div class="row">
        <div class="col"><input type="text" class="form-control" name="firstname" placeholder="First Name"  ></div>
        <div class="col"><input type="text" class="form-control" name="lastname" placeholder="Last Name"  ></div>
      </div> 

<!-- Contact No -->
<br>
      <b><div class="col"><input type="number" class="form-control" name="mobile" placeholder="Contact No "  ></div></b>  

  <!-- Email id -->
<br>
      <div class="col"><input type="email" class="form-control" name="email" placeholder="Email I'd"  ></div>

<!-- Password -->
<br>
  <div class="col-auto"><input type="password" class="form-control" name="pass" id="password" placeholder="Password*"  ></div>

  <!-- Confirm Password -->
<br>
  <div class="col-auto"><input type="password" class="form-control" name="cpass" placeholder="Confirm Password*" ></div>


<br>
            <div class="mb-3">
              <button type="submit" name="submit" value="submit" class="btn btn-block text-uppercase">Sign Up</button>
            </div>

           

            <!-- <div class="text-center mb-3">
              or login with
            </div> -->
            <!-- <div class="row mb-3">
              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-facebook">facebook</a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-google">google</a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-twitter">twitter</a>
              </div>
            </div> -->
<!-- line on the have an account -->
            <hr class="my-4">

<!-- have an account -->
            <div class="text-center mb-2">
              Already have An Account?
              <a href="index.php" class="register-link">
                Sign In
              </a>
            </div>
            
            
              <script type="text/javascript">
              //alert("User has been blocked.");
              </script>
            
           
              <div> </div>
            

          </form>
        </div>
      </div>
    </div>
  </div>


<script src="../assest/js/popper.js"></script>
<script src="../assest/js/jquery.js"></script>
<script src="../assest/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="assest/js/register.js"></script>

</body>
</html>