<?php session_start(); ?>
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

        <?php
            if(isset($_POST['password'])) {
                if($_POST['password'] == 'get') {
                    $_SESSION['admin'] = TRUE;
                }
            }

            if(isset($_POST['logout'])) {
                $_SESSION['admin'] = FALSE;
            }

            if(isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE) {
                $db = mysqli_connect('localhost', 'root', '', 'den_glada_geten');

                echo '
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
                            <li><a href="vararum.html">Våra rum</a></li>
                            <li><a href="kalender.html">Boka rum</a></li>
                            <li><a href="gallery.html">Bildgalleri</a></li>
                            <li><a href="hittahit.html">Hitta hit</a></li>
                        </ul>
                    </nav>

                    <!-- slide down menu -->
                    <nav id="mobile-slide-menu">
                      <!-- menu list -->
                      <ul>
                          <a href="#"><li>Hem</li></a>
                          <a href="vararum.html"><li>Våra rum</li></a>
                          <a href="kalender.html"><li>Boka rum</li></a>
                          <a href="gallery.html"><li>Bildgalleri</li></a>
                          <a href="hittahit.html"><li>Hitta hit</li></a>
                      </ul>
                    </nav>

                    <section id="main-content" style="margin-top: 200px">
                        <div class="inner-container">
                        <h2>Om hotellet</h2>
                            <form name="index-about">
                                <textarea name="about-text"></textarea>
                                <submit type="submit"></submit>
                            </form>
                        </div>
                    </section>
                ';
            }
            else {
                echo "
                    <form method='post' action=''>
                        <input type='password' name='password'>
                        <input type='submit' value='Logga in'>
                    </form>
                ";
            }
        ?>
    </div>
</body>
</html>
