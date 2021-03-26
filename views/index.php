<?php
include "../action/itemAction.php";

if(empty($_SESSION)){
  session_unset();
  session_destroy();
}

$item = new Item();
  //number of items in cart
  $cart_num = 0;
  if(isset($_SESSION['username'])){
    $cart_num = $item->countCart($_SESSION['username']);
  }
  $num_format = 10101;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tomato Store</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="../assets/css/style.css">


  <!-- =======================================================
  * Template Name: SoftLand - v2.2.1
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
              <li>
              <?php
                if(!isset($_SESSION['username'])){
              ?>
                  <a href="login.php" class="nav-link">login</a>
              <?php                   
                }else{
                  if($_SESSION['status'] == 'A'){
              ?>
                    <a href="addItem.php" class="nav-link">addItem</a></li>
              <?php 
                  }
                  ?>
                  <a href="logout.php" class="nav-link">logout</a></li>
                  <?php if($cart_num > 0){ ?><li><a href="showCart.php" class="nav-link">cart <?php echo '&#'. ($num_format + $cart_num); ?></a></li><?php }; ?>
              <?php
                } ?> 
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

  <!-- ======= Hero Section ======= -->
  <section class="hero-section h-75" id="hero">

    <!-- <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div> -->

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-7 text-center text-lg-left">
              <h1 data-aos="fade-right">Furniture Is Waiting For You</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">A favorite item for your favorite furniture. What to do next off.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <!-- <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">カテゴリで選ぶ</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="cursor">
                <img src="../assets/img/room3-chair.png" alt="Image" width="300px" hight="100%">
              </div>
              <h3 class="mb-3">椅子・チェアー</h3>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
            <div class="cursor">
                <img src="../assets/img/room3-desk.png" alt="Image" width="300px" hight="100%">
              </div>
              <h3 class="mb-3">机</h3>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="cursor">
                <img src="../assets/img/room3-bed.png" alt="Image" width="300px" hight="100%">
              </div>
              <h3 class="mb-3">ベッド</h3>
            </div>
          </div>
        </div>

      </div>
    </section> -->

    <section class="section pt-5">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">コーディネート</h2>
          </div>
        </div>

        <div class="row align-items-center feature-2">
          <div class="col-md-5 mr-auto">
            <h2 class="mb-4">在宅ワークと家事を両立するダイニングキッチンコーディネート</h2>
            <p class="mb-4">新しい生活様式が少しずつ定着しつつある今、オフィスワークから在宅ワークへと
            勤務形態が切り替わった方も多いかと思います。もともとOFFの空間である自宅をONの職場として快適に
            過ごすためには、仕事と家事をスムーズに両立できることがポイントではないでしょうか。
            そこで在宅ワークのスペースをつくりつつ休憩時間や終業後の家事などを無理なく両立しやすいコーディネートをご紹介します。</p>
            
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="../assets/img/room1.jpg" alt="Image" class="img-fluid" onclick="location.href='./showRoom.php?room=1'">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center feature-2">
          <div class="col-md-5 ml-auto order-2">
            <h2 class="mb-4">一人暮らしを満喫する1LDK北欧スタイルコーディネート</h2>
            <p class="mb-4">1人暮らしの方にも人気の高い1LDKの北欧スタイルコーディネートです。
            こちらは30代女性の1人暮らしを想定。平日は忙しく働いているため、
            休日は自宅でゆったり過ごしたり趣味を楽しめるようにインテリアを工夫しています。
            コンパクトなLDKはくつろげるスペースがメインになるように家具をセレクトしています。</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="../assets/img/room2.jpg" alt="Image" class="img-fluid" onclick="location.href='./showRoom.php?room=2'">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center feature-2">
          <div class="col-md-5 mr-auto">
            <h2 class="mb-4">個人のスペースも大切にした2人の寝室コーディネート</h2>
            <p class="mb-4">夫婦やカップルの方におすすめの、個人のスペースも大切にした寝室コーディネートです。
            2人一緒に眠る寝室でも、空いたスペースにそれぞれが使いやすい家具や家電をレイアウトすることで、
            ゆるやかに個人スペースを確保することができます。6畳ほどのスペースがあれば、
            ダブルサイズのベッドを置いてもベッドの両サイドにデスク1台分ずつの空間が残ります。
            その空いたスペースにお互いが過ごしやすいアイテムを置くことで、ベッドが間仕切りとなったレイアウトです。</p>
            
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="../assets/img/room3.jpg" alt="Image" class="img-fluid" onclick="location.href='./showRoom.php?room=3'">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center feature-2">
          <div class="col-md-5 ml-auto order-2">
            <h2 class="mb-4">ダイニング兼リビングで省スペースが叶うモダンなラウンジスタイル</h2>
            <p class="mb-4">リビングとダイニングをひとつにまとめたラウンジスタイルは、
              2つのスペースが集約されるのでレイアウトする家具が少なくなります。
              そのため、同じ空間でもゆとりが生まれるのでお部屋を広く見せることができたり、
              空いたスペースを別の用途としてレイアウトすることができるようになります。
              省スペースでくつろぎの空間をコーディネートすることができるので、限られたスペースにもおすすめです。</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="../assets/img/room4.jpg" alt="Image" class="img-fluid" onclick="location.href='./showRoom.php?room=4'">
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <!-- <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Review From Our Users</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="owl-carousel testimonial-carousel">
              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>Excellent App!</h3>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                    aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                    provident voluptates consectetur maiores quos.</p>
                </blockquote>

                <p class="review-user">
                  <img src="../assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Jean Doe</span>, &mdash; App User
                  </span>
                </p>

              </div>

              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>This App is easy to use!</h3>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                    aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                    provident voluptates consectetur maiores quos.</p>
                </blockquote>

                <p class="review-user">
                  <img src="../assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Johan Smith</span>, &mdash; App User
                  </span>
                </p>

              </div>

              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>Awesome functionality!</h3>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                    aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                    provident voluptates consectetur maiores quos.</p>
                </blockquote>

                <p class="review-user">
                  <img src="../assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Jean Thunberg</span>, &mdash; App User
                  </span>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>End Testimonials Section -->

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
            <h2>Starts Publishing Your Apps</h2>
          </div>
          <div class="col-md-5 text-center text-md-right">
            <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About SoftLand</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
            dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
          <p class="social">
            <a href="#"><span class="icofont-twitter"></span></a>
            <a href="#"><span class="icofont-facebook"></span></a>
            <a href="#"><span class="icofont-dribbble"></span></a>
            <a href="#"><span class="icofont-behance"></span></a>
          </p>
        </div>
        <div class="col-md-7 ml-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Downloads</h3>
              <ul class="list-unstyled">
                <li><a href="#">Get from the App Store</a></li>
                <li><a href="#">Get from the Play Store</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>