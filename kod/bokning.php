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
   <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
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
 
 <?php
  require_once '/config.php';
  if(isset($_REQUEST['arrival_date'])&& isset($_REQUEST['depart_date'])){ 
    $arrival = $_REQUEST['arrival_date'];
    $departure = $_REQUEST['depart_date'];
    $query = "
    SELECT type 
    FROM rooms
    WHERE rooms.id NOT IN (
    SELECT reservations.room
    FROM reservations
    WHERE reserved_from BETWEEN '$arrival' AND '$departure'
    OR reserved_to BETWEEN '$arrival' AND '$departure'
    )
    ";

    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_assoc($result)){
      echo $row['type'];
    }
  };
 ?>
 
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
          <li><a class="selected" href="#">Boka rum</a></li>
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
          <a href="#"><li>Boka rum</li></a>
          <a href="gallery.php"><li>Bildgalleri</li></a>
          <a href="hittahit.html"><li>Hitta hit</li></a>
      </ul>
    </nav>
    <!--Kalender-->
  <section id="kalender-section">
  <div class="inner-container">

    <!-- kalender form-->
    <div id="booking-div">
      <section class="sect-heading">
        <h2>Boka ditt rum här!</h2>
      </section>
        <form id="booking-form" name="booking-form" method="GET" >
          
          <div class="booking-date">
            <div>
              <label for="arrival_date">Från</label><br />
              <input id="arrival-date" class="datepicker" name="arrival_date" placeholder="åååå-mm-dd" type="text" />
            </div>
            <div>
              <label for="depart_date">Till</label><br />
              <input id="depart-date" class="datepicker" name="depart_date" placeholder="åååå-mm-dd" type="text" />
            </div>
          </div>

          <select class="booking-select required" name="roomtype">
              <option value="all" selected>Alla rumstyper</option>
              <option value="single">Enkelrum</option>
              <option value="double">Dubbelrum</option>
              <option value="family">Familjerum</option>
          </select>

          <br />
          <br />
          <input class="submit boknings-button" type="submit" value="Sök">
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
