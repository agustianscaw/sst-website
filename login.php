<?php 
  session_start();
  if(isset($_SESSION['username']))
  {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $telepon = $_SESSION['telepon'];
    $email = $_SESSION['email'];
    $nama = $_SESSION['nama'];
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User Detail</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
  <style>
  .modal.fade .modal-dialog {
  transform: translate3d(0, 100vh, 0);
  }

  .modal.in .modal-dialog {
    transform: translate3d(0, 0, 0);
  }


  </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

          <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>S</span>urya <span>S</span>ari <span>T</span>eknik</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Team</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#blog">Project</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                  <?php
                  if(isset($_SESSION['username'])){
                    if($_SESSION['user_type'] == 2){
                      echo '<li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_SESSION['username'].'<span class="caret"></span></a>';
                      echo '<ul class="dropdown-menu" role="menu">';
                      echo '<li><a href="user-detail.php">Detail User</a></li>';
                      echo '<li><a href="http://localhost/sst/user-config.php?action=logOut">Logout</a></li>';
                      echo '</ul>'; 
                      echo '</li>';
                    }
                    else if ($_SESSION['user_type'] == 1){
                      echo '<li class="dropdown" active><a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_SESSION['username'].'<span class="caret"></span></a>';
                      echo '<ul class="dropdown-menu" role="menu">';
                      echo '<li><a href="user-detail.php">Detail User</a></li>';
                        echo '<li><a href="manage-vendor.php">Manage Vendor</a></li>';
                        echo '<li><a href="manage-product.php">Manage Product</a></li>';
                        echo '<li><a href="manage-service.php">Manage Service</a></li>';
                        echo '<li><a href="manage-testimoni.php">Manage Testimonial</a></li>';
                        echo '<li><a href="http://localhost/sst/user-config.php?action=logOut">Logout</a></li>';
                      echo '</ul>'; 
                      echo '</li>';
                    }
                  }
                  else{
                    echo '<li class="active">';
                    echo '<a class="page-scroll" href="login.php">Login</a>';
                    echo'</li>';
                  }
                  ?>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">CV. Surya Sari Teknik</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Login or Register here :) </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row" >
        <div class="col-sm-6">
          <h2 class="text-center">Login </h2>
            <form id="login-form"  method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="lemail" name="lemail" aria-describedby="emailHelp"  placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="lpassword" name="lpassword"  placeholder="Password">
                <small id="passwordHelp" class="form-text text-muted">Don't tell your password with anyone else.</small>
              </div> 
              <input type="hidden" id="l-action" name="l-action">
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-sm-6">
          <h2 class="text-center">Register </h2>
            <form id="register-form" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="rusername" name="rusername" aria-describedby="usernamehelp" placeholder="Enter Username">
                <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
              </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="remail" name="remail" aria-describedby="emailHelp"  placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password"  name="rpassword"  placeholder="Password">
              <small id="passwordHelp" class="form-text text-muted">Don't tell your password with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="rnama"  placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input type="text" class="form-control" id="telepon" name="rtelepon" placeholder="Telepon">
            </div>
            <input type="hidden" id="ruser-type" name="ruser-type">
            <input type="hidden" id="r-action" name="r-action">
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>S</span>urya <span>S</span>ari <span>T</span>eknik</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Testimoni</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal Login -->

<div class="modal fade" id="lwarning-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="alert alert-warning ">
        <strong>Warning! </strong>email or password doesn't fill correctly
      </div>           
  </div>
</div>

<div class="modal fade" id="rwarning-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="alert alert-warning ">
        <strong>Warning! </strong> please insert register form correctly  
      </div>           
  </div>
</div>

<div class="modal fade" id="ldanger-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="alert alert-danger ">
        <strong>Email or password doesn't correct !!</strong>
      </div>           
  </div>
</div>

<div class="modal fade" id="rdanger-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="alert alert-danger ">
        <strong>Register Failed !!</strong>
      </div>           
  </div>
</div>

<div class="modal fade" id="rsukses-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="alert alert-success ">
        <strong>Register success you can login now</strong>
      </div>           
  </div>
</div>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>
</html>



<script>  
$(document).ready(function(){
  $('#login-form').submit(function(event){
    event.preventDefault();
    var email = $('#lemail').val();
    var password = $('#lpassword').val();
   
    if(email == '' || password == '')
    {
      $('#lwarning-modal').modal('show');
    }
    else
    {
      $('#l-action').val('submit-login');
  
      $.ajax({
        url:"user-config.php",
        method:"POST",
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data)
        {
            if(data == 'sukses'){ 
              window.location.href = "index.php";
            }
            else if (data == 'gagal'){
              $('#rdanger-modal').modal('show');
            }
        }
      });
    }
  });

  $('#register-form').submit(function(event){
    event.preventDefault();
    var email = $('#remail').val();
    var password = $('#rpassword').val();
    var username = $('#rusername').val();
    var cpassword = $('#rconfirmpassword').val();
    var nama = $('#rnama').val();
    $('#ruser-type').val(2);
    
    if(email == '' || password == '' || username == '' || nama == '')
    {
      $('#rwarning-modal').modal('show');
    }

    else
    {
      $('#r-action').val('submit-register');
      $.ajax({
        url:"user-config.php",
        method:"POST",
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data)
        {
            if(data == 'sukses'){ 
              $('#rsukses-modal').modal('show');
              $('#lemail').focus();
              $('#register-form')[0].reset();
            }
            else if (data == 'gagal'){
              $('#rdanger-modal').modal('show');
            }
        }
      });
    }
  });
});  
</script>
