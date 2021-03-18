
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <title>Registration</title>
</head>
<body>

<!-- ======= Mobile Menu ======= -->
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <!-- ======= Header ======= -->
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">Tomato Store</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="index.php" class="nav-link">Home</a></li>
              <li><a href="login.php" class="nav-link">login</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>
<section class="hero-section" id="hero">
    <div class="container pt-5">
        <div class="card mx-auto w-50 my-5 border border-1 bg-transparent">
            <div class="card-header border-0 bg-transparent py-0">
                <h1 class="text-center mt-5">REGISTRATION</h1>
            </div>
            <div class="card-body my-0">
                <form action="../action/userAction.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="first_name" class="form-control p-4" placeholder="First Name" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="last_name" class="form-control p-4" placeholder="Last Name" required="required">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="address" class="form-control p-4" placeholder="address" required="required">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" name="email" class="form-control p-4" placeholder="email" required="required">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="username" class="form-control p-4" placeholder="Username" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" name="password" class="form-control p-4" placeholder="Password" required="required">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="submit" value="Register" name="registration" class="form-control btn btn-outline-white">
                        </div>
                    </div>                    

                </form>
            </div>
        </div>
    </div>
</section>

<!-- Vendor JS Files -->
 <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <!-- <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script> -->
  <!-- <script src="../assets/vendor/php-email-form/validate.js"></script> -->
  <!-- <script src="../assets/vendor/aos/aos.js"></script> -->
  <!-- <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script> -->
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>