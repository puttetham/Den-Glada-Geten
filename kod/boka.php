<!DOCTYPE html>
<html>
<head>
   <title>Boka våra fina rum på den glada geten</title>
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
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
   <!-- scripts -->
   <script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
   <!-- menu slide -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src="js/all.js"></script>
   <script src="js/jquery-ui.min.js"></script>
   <!-- booking and validation -->
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
   <script src="js/booking.js"></script>
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
          <li><a href="vararum.php">Våra rum</a></li>
          <li><a class="selected" href="bokning.php">Boka rum</a></li>
          <li><a href="gallery.php">Bildgalleri</a></li>
          <li><a href="hittahit.html">Hitta hit</a></li>
       </ul>
    </nav>

    <!-- slide down menu -->
    <nav id="mobile-slide-menu">
      <!-- menu list -->
      <ul>
          <a href="index.php"><li>Hem</li></a>
          <a href="vararum.php"><li>Våra rum</li></a>
          <a href="bokning.php"><li>Boka rum</li></a>
          <a href="gallery.php"><li>Bildgalleri</li></a>
          <a href="hittahit.html"><li>Hitta hit</li></a>
      </ul>
    </nav>

  <!--Kalender-->
  <section id="kalender-section">
    <div class="inner-container">

      <!-- kalender form-->
      <div id="booking-div">
        <!-- section heading -->
        <section class="sect-heading">
                <h2>Boka ditt rum här!</h2>
        </section>
        <!-- BOOKING FORM -->
        <!-- book rooms -->
        <form id="booking-form" name="booking-form" method="post" action="reservation.php">
          <label class="booking_label" for="firstname">Förnamn</label>
          <input class="text-input" title="Fyll i ditt förnamn" type="text" name="firstname" placeholder="Förnamn" />
          <label class="booking_label" for="lastname">Efternamn</label>
          <input class="text-input" title="Fyll i ditt efternamn" type="text" name="lastname" placeholder="Efternamn"  />
          <br />
          <label class="booking_label" for="email">Mail</label>
          <input id="email" class="text-input" title="Fyll i din epost-adress" type="email" name="email" placeholder="Mail"  />
          <label class="booking_label" for="confirm_email">Bekräfta mail</label>
          <input class="text-input" title="Bekräfta e-postadress" type="email" name="confirm_email" placeholder="Bekräfta mail"  />

          <input type="hidden" name="roomId" value="<?php echo $_POST['roomId'] ?>">
          <input type="hidden" name="arrival" value="<?php echo $_POST['arrival'] ?>">
          <input type="hidden" name="departure" value="<?php echo $_POST['departure'] ?>">

          <!-- book acitivity -->
          <div class="activities">
            <h2>Boka en aktivitet!</h2>
              <input type="checkbox" name="activity[]" value="skotersafari"><label>Skotersafari 200 kr</label><br>
              <input type="checkbox" name="activity[]" value="getmatning"><label>Getmatning 100 kr / person</label><br>
              <input type="checkbox" name="activity[]" value="getklappning"><label>Getklappning 50 kr / person</label><br>
              <input type="checkbox" name="activity[]" value="guidad_vandring"><label>Guidad vandring 250 kr / person</label><br>
              <h4>SPA</h4>
              <input type="checkbox" name="activity[]" value="massage"><label>Massage 350 kr</label><br>
              <input type="checkbox" name="activity[]" value="kurbad"><label>Kurbad 250 kr</label><br>
              <input type="checkbox" name="activity[]" value="badtunna"><label>Badtunna 300 kr</label><br>

          </div>
          <br />
          <br />
          <input class="submit boknings-button" type="submit" value="Boka">
        </form>
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
          <li><a href="tel:076-1112223"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
          <li><a href="mailto:glada.geten@kyh.se"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
          <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </section>
    </div>
  </footer>
</div>
</body>
</html>
