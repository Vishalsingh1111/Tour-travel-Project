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

  <title>Travii - Create Memories</title>
  <meta name="description" content="Traveller">

<link rel="stylesheet" href="css/bootstrap.min.css" />


<link href="font/css/font-awesome.min.css" rel="stylesheet">


<!-- - favicon-->
<link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">


  <link rel="stylesheet" href="./css/style.css" />
  
  <!-- Font Awesome -->
  <!--animate-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="font/css/font-awesome.min.css" rel="stylesheet">


  <!-- - favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>
 <?php include('includes/header.php'); ?>  

 <div id="#top"></div>

      <!-- - #HERO -->
 <section class="section hero" style="padding: 7vmin 0 0 0;margin-top:12vmin;">
        <div class="container">
          <img src="./assets/images/shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">

          <img src="./assets/images/shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2">

          <img src="./assets/images/shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">

          <div class="hero-content">

            <p class="section-subtitle wow fadeInLeft animated" data-wow-delay=".5s" style="padding: 7vmin 3vmin 5vmin 3vmin">Explore Your Travel</p>

            <h2 class="hero-title wow fadeInLeft animated" data-wow-delay=".5s">Trusted Travel Agency</h2>

            <p class="hero-text wow fadeInUp animated" data-wow-delay=".5s">
              I travel not to go anywhere, but to go. I travel for travel's sake the great affair is to move.
            </p>

            <div class="btn-group wow fadeInUp animated" data-wow-delay=".5s">
              <a href="contact.php" class="btn btn-primary">Contact Us</a>

              <a href="About.php" class="btn btn-outline">Learn More</a>
            </div>

          </div>

          <figure class="hero-banner wow fadeInRight animated" data-wow-delay=".5s">

            <img src="./assets/images/mainimg.png" width="486" height="412" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>
          <div class="background-circle-yellow"></div>
        </div>
      </section>


         <!-- 
        - #DESTINATION
      -->

      <section class="section destination">
    <div class="container">
        <p class="section-subtitle wow fadeInLeft animated" data-wow-delay=".5s"
            style="padding: 7vmin 3vmin 5vmin 3vmin">Destinations</p>
        <h2 class="h2 section-title wow fadeInLeft animated" data-wow-delay=".5s">Choose Your Place</h2>

        <?php
        $sql = "SELECT * FROM tbltourpackages ORDER BY RAND() LIMIT 9"; // Randomly select 9 rows
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            echo '<ul class="destination-list" style="list-style: none; display: flex; flex-wrap: wrap;padding-left:7vmin;">';
            foreach ($results as $result) {
                echo '<li class="w-100 w-50-md w-33-lg" style="box-sizing: border-box; padding:15px;">';
                echo '<a href="package_details.php?pkgid=' . htmlentities($result->PackageId) . '">';
                echo '<div class="destination-card wow fadeInLeft animated" data-wow-delay=".5s">';
                echo '<figure class="card-banner">';
                echo '<img src="admin/pacakgeimages/' . htmlentities($result->PackageImage) . '" width="100%" height="auto" loading="lazy" alt="Malé, Maldives" class="img-cover">';
                echo '</figure>';
                echo '<div class="card-content">';
                echo '<p class="card-subtitle">' . htmlentities($result->PackageName) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
                echo '</li>';
            }
            echo '</ul>';
        }
        ?>
    </div>
</section>







         <!-- 
        - #POPULAR Package-->
    

      <section class="section popular" id="pop">
        <div class="container">

          <p class="section-subtitle wow fadeInLeft animated" data-wow-delay=".5s" style="padding: 7vmin 3vmin 5vmin 3vmin">Package Details</p>

          <h2 class="h2 section-title wow fadeInLeft animated" data-wow-delay=".5s">Most Popular Tours</h2>

          <ul class="popular-list">

            <?php $sql = "SELECT * from tbltourpackages order by rand() ";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
     
       $maxCards = 6; // Set the maximum number of cards to display

if ($query->rowCount() > 0) {
  foreach ($results as $result) {
    if ($cnt <= $maxCards) {
?>
            
            <li>
              <div class="popular-card">

                <figure class="card-banner wow fadeInLeft animated" data-wow-delay=".5s">
                 
                    <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" width="740" height="518" loading="lazy"
                      alt="image" class="img-cover">
                  
                  

                  <span class="card-badge wow fadeInLeft animated" data-wow-delay=".5s">
                    <ion-icon name="time-outline"></ion-icon>
                    <time>
                    <?php
                    $date = new DateTime($result->Creationdate);
                    echo $date->format('d M'); 
                    ?>
                </time>

                  </span>
                </figure>

                <div class="card-content wow fadeInLeft animated" data-wow-delay=".5s">

                  <div class="card-wrapper">
                    <div class="card-price">
                      <h5> $ <?php echo htmlentities($result->PackagePrice);?></h5>
                    </div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(2)</data>
                    </div>
                  </div>

                  <div class=" wow fadeInUp animated" data-wow-delay=".5s" style="padding: 3vmin 0 1vmin 0">
              <h4 style="padding-bottom:1vmin;"><b>Title:</b> <?php echo htmlentities($result->PackageName);?></h4>
              <p><b>Duration:</b> <?php echo htmlentities($result->PackageType);?></p>
              <p><b>Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
              <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
            </div>
<div class="wow fadeInRight animated" data-wow-delay=".5s">
<a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
</div>
            
              
                </div>

              </div>
            </li>
            <?php 
               $cnt++;
        }
      }
      }
       ?>
          </ul>
          <div class="clearfix"></div>  
          <a href="Packages.php" class="btn btn-primary " style="margin: 8rem auto 0 auto;">Learn More</a>

        </div>
      </section>



      <!-- Bookings session -->
      <section class="booking-container">
        <div class="booking-section">

          <div class=" booking-left">
            <div>

              <div class="title left wow fadeInLeft animated" data-wow-delay=".5s">
                Book your next trip <br />
                in 3 easy steps
              </div>
              <div class="list-container wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="./assets/images/Destination.svg" class="book-icons" />
                <div>
                  <div class="item-name wow fadeInLeft animated" data-wow-delay=".5s">Choose Destination</div>
                  <div class="item-description wow fadeInUp animated" data-wow-delay=".5s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna,
                    tortor tempus.
                  </div>
                </div>
              </div>
              <div class="list-container wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="./assets/images/Payment.svg" class="book-icons" />
                <div>
                  <div class="item-name wow fadeInLeft animated" data-wow-delay=".5s">Make Payment</div>
                  <div class="item-description wow fadeInUp animated" data-wow-delay=".5s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna,
                    tortor tempus.
                  </div>
                </div>
              </div>
              <div class="list-container wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="./assets/images/Selected Date.svg" class="book-icons" />
                <div>
                  <div class="item-name wow fadeInLeft animated" data-wow-delay=".5s">Reach Airport on Selected Date</div>
                  <div class="item-description wow fadeInUp animated" data-wow-delay=".5s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna,
                    tortor tempus.
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="booking-right">
            <div class="box wow fadeInRight animated" data-wow-delay=".5s">
              <div>
                <img src="./assets/images/greece.png" class="booking-image wow fadeInRight animated" data-wow-delay=".5s"  />
                <div class="box-details">
                  <div class="place-name wow fadeInRight animated" data-wow-delay=".5s">Trip To Maldives</div>
                  <div class="reviewer">
                    <div class="reviewer-details wow fadeInRight animated" data-wow-delay=".5s">
                      14-29 <br />
                      December
                    </div>
                    <div class="line"></div>
                    <div class="reviewer-details wow fadeInRight animated" data-wow-delay=".5s">
                      Travii
                    </div>
                  </div>
                  <div class="icon-container wow fadeInRight animated" data-wow-delay=".5s">
                    <div class="circle">
                      <img src="./assets/images/leaf.svg" alt="leaf" />
                    </div>
                    <div class="circle">
                      <img src="./assets/images/map.svg" alt="map" />
                    </div>
                    <div class="circle">
                      <img src="./assets/images/send.svg" alt="send" />
                    </div>
                  </div>
                  <div class="on-going">
                    <div class="on-going-container">
                      <img src="./assets/images/building.svg" class="building-icon" alt="building-icon" />
                      <div class="reviewer-details wow fadeInUp animated" data-wow-delay=".5s">
                        24 people <br />
                        going
                      </div>
                    </div>
                    <img src="./assets/images/heart (6) 1.svg" alt="heart" class="icon-heart wow fadeInUp animated" data-wow-delay=".5s" />
                  </div>
                </div>
              </div>
            </div>

            <div class="background-circle-violet"></div>
            <div class="box2 wow fadeInUp animated" data-wow-delay=".5s">
              <div class="box2-details">
                <div class="place-image wow fadeInUp animated" data-wow-delay=".5s">
                  <img src="./assets/images/rome icon.png" alt="rome icon" />
                </div>

                <div class="place-details wow fadeInUp animated" data-wow-delay=".5s">
                  <div class="ongoing">Ongoing</div>
                  <div class="place-name">Trip to rome</div>
                  <div class="percentbar-details">
                    <div class="percentage">40%</div>
                    <div class="completed">completed</div>
                  </div>
                  <div class="line-indicator wow fadeInLeft animated" data-wow-delay=".5s">
                    <img src="./assets/images/line-indicator.svg" alt="line-indicator" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
 

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

                    <time class="publish-time" datetime="10:30">12:30 AM</time>

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

                    <time class="publish-time" datetime="10:30">1:30 PM</time>

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


            <!-- signup -->
            <?php include('includes/signup.php');?>     
      <!-- //signu -->
      <!-- signin -->
      <?php include('includes/signin.php');?>   

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
