<!doctype html>
<html lang="en">
<head>
<!--===============================================================================================--> 
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main-login.css">
<!--===============================================================================================-->
</head>

<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-50 p-b-90">
        <form method="POST" action="user-config.php">
          <span class="login100-form-title p-b-51">
            Register
          </span>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "Nama is required">
            <input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
          </div>
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "Telepon is required">
            <input class="input100" type="text" name="telepon" placeholder="No. Telepon">
            <span class="focus-input100"></span>
          </div>

          <input type="hidden" name="user-type" value="2">


          <div class="container-login100-form-btn m-t-17">
            <input type="submit" name="submit-user" class="login100-form-btn">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>


<div id="dropDownSelect1"></div>  

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

  <script src="js/main-login.js"></script>
</html>