<?php
$db = mysqli_connect('localhost', 'root', '', 'den_glada_geten');
$query = "SELECT text_content
        FROM text_table
        WHERE ID = 1
";
$result = mysqli_query($db, $query);
$content = mysqli_fetch_assoc($result);

 ?>
<!DOCTYPE html>
<html>
<head>
   <title>Den glada geten - Bo med getter och njut i vårat spa</title>
   <meta charset="utf-8" />
   <meta name="title" content="Den glada geten - Ett unikt hotell med modern design och med lantligt utsikt">
   <meta name="description" content="Boka ett billigt rum, mys med getter och slappna av i vårat spa">
   <meta name="keywords" content="hotell, billigt, moderna rum, spa, getter, mysigt, landsbygden">
   <meta name="author" content="KYH Stockholm - Frontendstudents">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- stylesheet -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <!-- icons -->
   <script src="https://use.fontawesome.com/986342ab7c.js"></script>
   <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
   <!-- scripts -->
   <script src="Scripts/jquery-3.1.1.min.js"></script>
   <!-- menu slide -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src="Scripts/bootstrap.min.js"></script>
   <script src="scripts/script.js"></script>
   <script src="scripts/slide.js"></script>
   <script src="js/all.js"></script>

</head>
<body>
    <div id="container">

        <!-- Meny -->
        <nav id="main-menu">
            <figure id="branding">
                <a href="#"><i class="fa fa-envira"></i></a>
            </figure>
            <!-- menu bar -->
            <figure id="menu-bar">
              <i class="fa fa-bars"></i>
            </figure>
            <ul>
                <li><a class="selected" href="#">Hem</a></li>
                <li><a href="vararum.php">Våra rum</a></li>
                <li><a href="boka.html">Boka rum</a></li>
                <li><a href="gallery.php">Bildgalleri</a></li>
                <li><a href="hittahit.html">Hitta hit</a></li>
            </ul>
        </nav>

        <!-- slide down menu -->
        <nav id="mobile-slide-menu">
          <!-- menu list -->
          <ul>
              <a href="#"><li>Hem</li></a>
              <a href="vararum.php"><li>Våra rum</li></a>
              <a href="boka.html"><li>Boka rum</li></a>
              <a href="gallery.php"><li>Bildgalleri</li></a>
              <a href="hittahit.html"><li>Hitta hit</li></a>
          </ul>
        </nav>

        <!--Header med bilder -->
        <header id="main-header">
            <div class="inner-container">
                <section id="site-heading">
                    <h1><span>D</span>en <span>g</span>lada <span>g</span>eten</h1>
                    <h2>Bed and Breakfast</h2>
                </section>
            </div>
        </header>

        <!-- Galleri -->
        <section id="start-gallery">
            <div class="slideshow">
              <img class="mySlides" src="images/1.jpg" style="width:100%" height= "100%;">
              <img class="mySlides" src="images/2.jpg" style="width:100%" height= "100%;">
              <img class="mySlides" src="images/3.jpg" style="width:100%" height= "100%;">
            </div>
        </section>

        <!--Kortare information om hotellet -->
        <section id="main-content">
            <div class="inner-container">
              <section class="heading">
                <h2>Välkommen!</h2>
              </section>
                <!-- till bokningsidan -->
                <div class="boknings-button">
                  <a href="boka.html">Boka rum!</a>
                </div>
                <article id="hotel-info-article">
                    <p>
                        <?php
                        echo $content['text_content'];
                        ?>
                    </p>
                </article>
                <!--columns-->
                <section id="hotel-info-col">
                  <section class="heading">
                      <h2>Vad vi har att erbjuda</h2>
                  </section>
                  <div class="box">
                    <!-- col 1 -->
                    <section class="col col_4_of_12">
                      <article class="hotel-column">
                        <h4>Getklappning</h4>
                        <img src="images/pet-goats.jpg"/>
                      </article>
                    </section>
                    <!-- col 2 -->
                    <section class="col col_4_of_12">
                      <article class="hotel-column">
                        <h4>Skotersafari</h4>
                        <img src="images/snowmobile.jpg"/>
                      </article>
                    </section>
                    <!-- col 3 -->
                    <section class="col col_4_of_12">
                      <article class="hotel-column">
                        <h4>Trevlig miljö</h4>
                        <img src="images/nature.jpg"/>
                      </article>
                    </section>
                    <!-- col 4 -->
                    <section class="col col_4_of_12">
                      <article class="hotel-column">
                        <h4>Getmatning</h4>
                        <img src="images/feed-goats.jpg"/>
                      </article>
                    </section>
                    <!-- col 5 -->
                    <section class="col col_4_of_12">
                      <article class="hotel-column">
                        <h4>Skogspromenader</h4>
                        <img src="images/walks.jpg"/>
                      </article>
                    </section>
                    <!-- col 6 -->
                    <section class="col col_4_of_12">
                      <article class="hotel-column">
                        <h4>Spa</h4>
                        <img src="images/spa.jpg"/>
                      </article>
                    </section>
                  </div>
                </section>
                <!-- till bokningsidan -->
                <div class="boknings-button">
                  <a href="boka.html">Boka aktivitet!</a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="main-footer">
            <div class="inner-container">
                <section id="footer-info">
                    <p>Gamla Bodenvägen 301</p>
                    <p>954 42</p>
                    <p>Södra Sunderbyn, Sverige</p>
                    <span>&copy; Den glada geten 2016</span>
                </section>
                <section id="footer-links">
                    <ul>
                        <li><a href="tel:076-5576319"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                        <li><a href="mailto:info@dengladageten.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                       </ul>
                </section>
            </div>
        </footer>
    </div>
</body>
</html>
