<h2>Ladda upp bild till galleriet</h2>
<form enctype="multipart/form-data" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="7000000"/>
    <input name="user_file" type="file" />
    <br>
    <br>
    <input type="submit" value="Ladda upp"></input>
</form>

<?php
if( isset($_FILES['user_file']) ) {
    $uploaddir = "../images/gallery-images/";
    $uploadfile = $uploaddir . basename($_FILES['user_file']['name']);

    if( move_uploaded_file( $_FILES['user_file']['tmp_name'], $uploadfile) ) {
        echo "Filen är uppladdad";
    }
    else {
        echo "Uppladdningen misslyckades. Felmeddelande:" . $_FILES['user_file']['error'] . "";
    }
}
?>

<section id="gallery-content" style="margin-top: 25px">
  <div id="gallery">
    <?php

        if (isset($_POST['delete_file'])) {
            $filename = $_POST['delete_file'];
            if (file_exists($filename)) {
                unlink($filename);
                // echo "Bilden är raderad";
            }
            else {
                // echo "Det gick inte att radera bilden, ".$filename." finns inte";
            }
        }

        $src = '../images/gallery-images/*';
        foreach (glob($src) as $image) {
            echo
            "
            <div class='gallery-div'>
                <form method='post'>
                    <input type='hidden' value='".$image."' name='delete_file' />
                    <input type='submit' value='Radera bild'>
                </form>
                <div class='img-frame'>
                    <img class='gallery-img' src='".$image."'></img>
                </div>
            </div>
            ";
        }
    ?>
  </div>
</section>
