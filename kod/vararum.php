<?php
require_once 'config.php';

$query = "SELECT text_content
        FROM text_table
        WHERE ID = 2
";
$result = mysqli_query($db, $query);
$content = mysqli_fetch_assoc($result);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Våra nyrenoverade, moderna och öppna rum</title>
    <meta charset="utf-8">
    <meta name="title" content="Den glada geten - Ett unikt hotell med modern design och med lantligt utsikt">
    <meta name="description" content="Boka ett billigt rum, mys med getter och slappna av i vårat spa">
    <meta name="keywords" content="hotell, billigt, moderna rum, spa, getter, mysigt, landsbygden">
    <meta name="author" content="KYH Stockholm - Frontendstudents">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--stylesheet-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- icons -->
    <script src="https://use.fontawesome.com/986342ab7c.js"></script>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
    <!--scripts-->
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
            <a href="index.php"><i class="fa fa-envira"></i></a>
         </figure>
         <!-- menu bar -->
         <figure id="menu-bar">
           <i class="fa fa-bars"></i>
         </figure>
         <ul>
            <li><a href="index.php">Hem</a></li>
            <li><a class="selected" href="#">Våra rum</a></li>
            <li><a href="boka.html">Boka rum</a></li>
            <li><a href="gallery.php">Bildgalleri</a></li>
            <li><a href="hittahit.html">Hitta hit</a></li>
         </ul>
      </nav>

      <!-- slide down menu -->
      <nav id="mobile-slide-menu">
        <!-- menu list -->
        <ul>
            <a href="index.php"><li>Hem</li></a>
            <a href="#"><li>Våra rum</li></a>
            <a href="boka.html"><li>Boka rum</li></a>
            <a href="gallery.php"><li>Bildgalleri</li></a>
            <a href="hittahit.html"><li>Hitta hit</li></a>
        </ul>
      </nav>

      <!-- Det är smart att sätta id på varje "sektion" av hemsidan, kolla in min struktur för exempel :) -->
      <section id="room-main-content">
        <div id="lightbox">
          <div id="lightbox-inner">
            <div id="close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div id="centerer">
              <img id="big-img" src="" />
            </div>
          </div>
        </div>
      <article class="textinfo">
       <p>
        <?php
            echo $content['text_content'];
         ?>
       </p>
       </article>
       <div class="box">
         <!-- col 1 -->
         <section class="col col_4_of_12">
           <article class="hotel-column">
             <h4>Enkelrum 695:- / natt</h4>
             <img class="gallery-img" src="images/rum/enkelrum2.jpeg"/>
           </article>
         </section>
         <!-- col 2 -->
         <section class="col col_4_of_12">
           <article class="hotel-column">
             <h4>Dubbelrum 795:- / natt</h4>
             <img class="gallery-img" src="images/rum/dubbelrum2.jpeg"/>
           </article>
         </section>
         <!-- col 3 -->
         <section class="col col_4_of_12">
           <article class="hotel-column">
             <h4>Familjerum 999:- / natt </h4>
             <img class="gallery-img" src="images/rum/familjerum.jpeg"/>
           </article>
         </section>
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
