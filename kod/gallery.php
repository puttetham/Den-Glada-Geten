<!DOCTYPE html>
<html>
<head>
   <title>Bilder på alla olika rum och aktiviteter</title>
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
   <!-- menu slide -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src="scripts/script.js"></script>
   <script src="js/all.js"></script>
</head>
<body>

  <div id="container">

    <!-- Meny -->
    <nav id="main-menu">
        <figure id="branding">
            <a href="index.html"><i class="fa fa-envira"></i></a>
        </figure>
        <!-- menu bar -->
        <figure id="menu-bar">
          <i class="fa fa-bars"></i>
        </figure>
        <ul>
            <li><a href="index.html">Hem</a></li>
            <li><a href="vararum.html">Våra rum</a></li>
            <li><a href="kalender.html">Boka rum</a></li>
            <li><a class="selected" href="#">Bildgalleri</a></li>
            <li><a href="hittahit.html">Hitta hit</a></li>
        </ul>
    </nav>

    <!-- slide down menu -->
    <nav id="mobile-slide-menu">
      <!-- menu list -->
      <ul>
        <ul>
            <a href="index.html"><li>Hem</li></a>
            <a href="vararum.html"><li>Våra rum</li></a>
            <a href="kalender.html"><li>Boka rum</li></a>
            <a href="#"><li>Bildgalleri</li></a>
            <a href="hittahit.html"><li>Hitta hit</li></a>
        </ul>
      </ul>
    </nav>

    <!-- Bildgalleriet -->
    <section id="gallery-content">
      <div class="inner-container">
        <div id="lightbox">
            <div id="lightbox-inner">
                <div id="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                <div id="centerer">
                    <img id="big-img" src="" />
                </div>
                <div id="controls">
                    <span><i id="arrow-left" class="arrow fa fa-step-backward" aria-hidden="true"></i><span>
                    <span><i id="arrow-right" class="arrow fa fa-step-forward" aria-hidden="true"></i><span>
                </div>
            </div>
        </div>

        <section id="gallery">
            <?php
                $src = 'images/gallery-images/*';
                foreach (glob($src) as $image) {
                    echo
                        "
                        <div class='img-frame'>
                            <img class='gallery-img' src='$image'></img>
                        </div>
                    ";
                }
            ?>
        </section>
      </div>
    </section>

    <!-- Footer -->
    <footer id="main-footer">
        <div class="inner-container">
            <section id="footer-info">
                <p>Kvarnbergsplan 16</p>
                <p>141, 45</p>
                <p>Huddinge, Stockholm</p>
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
<html>
