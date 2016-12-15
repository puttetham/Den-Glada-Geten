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
    <section id="main-content">
<?php
    require_once 'config.php';

    if(isset($_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['roomId'],
            $_POST['arrival'],
            $_POST['departure'])
        ) {

        // All input data from form
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $roomtype = $_POST['roomId'];
        $arrival_date = $_POST['arrival'];
        $depart_date = $_POST['departure'];

        if (empty($_POST['activity'])){
            $activity_string = "";
        } else {
            $activity = $_POST['activity'];
            $activity_string = implode(", ", $activity);
        }


            //If no conflicting reservations were found, go through with the reservation!

        $reservquery = "INSERT INTO reservations(room, first_name, last_name, email, reserved_from, reserved_to, activity)
        VALUES ('$roomtype', '$firstname', '$lastname', '$email', '$arrival_date', '$depart_date', '$activity_string')";

        if (mysqli_query($db, $reservquery)){
        // ini_set('SMTP', 'smtp.gmail.com');
        // ini_set('smtp_port', '465');
        // ini_set('sendmail_from', 'glada.geten@kyh.se');
        // $headers = 'From: glada.geten@kyh.se';
        // $message = 'Tack för din bokning!';
        // mail($email, 'Bokningsbekräftelse', $message, $headers);
        $response = '<p>Tack för din bokning!</p>';
        }
         else {
                $response =  'Det finns tyvärr inga lediga rum av den begärda typen. Välj en annan typ av rum och försök igen.';
            }
        }
        echo $response;

?>
</section>
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
