<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>My Travel - my memory</title>
  <meta name="description" content="Traveller">
  <meta name="author" content="WebThemez">

  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link rel="stylesheet" href="css/style.css" />
  <!-- Font Awesome -->
  <!--animate-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="font/css/font-awesome.min.css" rel="stylesheet">


  <!-- - favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- - custom css link -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- - google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>
 <?php include('includes/header.php'); ?>
 <!--/.header-->
       <!-- signup -->
       <?php include('includes/signup.php');?>     
      <!-- //signu -->
      <!-- signin -->
      <?php include('includes/signin.php');?>   
 <div id="#top"></div>
   
 

     <!-- 
        - #BLOG
      -->

      <section class="section blog">
        <div class="container">

          <p class="section-subtitle wow fadeInLeft animated" data-wow-delay=".5s" style="padding: 7vmin 3vmin 5vmin 3vmin">From The Blog Post</p>

          <h2 class="h2 section-title wow fadeInLeft animated" data-wow-delay=".5s">Latest News & Articles</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card wow fadeInLeft animated" data-wow-delay=".5s">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/popular-1.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="12-04">04 Dec</time>
                  </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="#" class="author-name ">Vishal</a>

                        <p class="author-title">Admin</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="10:30">10:30 AM</time>

                  </div>

                  <h3 class="card-title ">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>

                  <a href="#" class="btn-link wow fadeInUp animated" data-wow-delay=".5s">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card wow fadeInUp animated" data-wow-delay=".5s">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="12-04">14 Jan</time>
                  </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="#" class="author-name">Vishal</a>

                        <p class="author-title">Admin</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="10:30">10:30 AM</time>

                  </div>

                  <h3 class="card-title">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>

                  <a href="#" class="btn-link wow fadeInUp animated" data-wow-delay=".5s">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card wow fadeInRight animated" data-wow-delay=".5s">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="12-04">08 Mar</time>
                  </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="#" class="author-name">Vishal</a>

                        <p class="author-title">Admin</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="10:30">10:30 AM</time>

                  </div>

                  <h3 class="card-title">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>

                  <a href="#" class="btn-link wow fadeInUp animated" data-wow-delay=".5s">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>


    <?php include('includes/footer.php'); ?>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
