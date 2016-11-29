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
        <li><a class="selected" href="admin.php">Text</a></li>
        <li><a href="admin.php?page=images">Bilder</a></li>
        <li><a href="admin.php?page=reservations">Bokningar</a></li>
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
        <form method="post" action="">
            <textarea class="admin-textarea" name="about-text"><?php echo $text_array[0]; ?></textarea><br>
            <input type="submit"></input>
        </form>


    <h2>Våra rum</h2>
        <form method="post" action="">
            <textarea class="admin-textarea" name="vararum-text"><?php echo $text_array[1]; ?></textarea><br>
            <input type="submit"></input>
        </form>
    </div>



</section>
<form method='post' action=''>
    <input type='submit' name='logout' value='Logga ut'>
</form>
