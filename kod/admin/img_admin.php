<h2>Ladda upp bild till galleriet</h2>
<form enctype="multipart/form-data" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
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
        echo "Uppladdningen misslyckades. Bilden måste vara mindre än 3MB";
    }
}
?>
