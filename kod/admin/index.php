<?php

session_start();

include 'page_top.php';

    if(isset($_POST['password'])) {
        if($_POST['password'] == 'get') {
            $_SESSION['admin'] = TRUE;
        }
    }

    if(isset($_POST['logout'])) {
        unset($_SESSION['admin']);
    }

    ///////////////////////////
    //RUN IF LOGGED IN
    ///////////////////////////
    if(isset($_SESSION['admin'])) {
        $db = mysqli_connect('localhost', 'root', '', 'den_glada_geten');

        if ( isset($_POST['content']) ) {

            $content = $_POST['content'];
            $text = mysql_real_escape_string($content);
            $page = $_POST['page'];

            $query = "UPDATE text_table
                    SET text_content = '$text'
                    WHERE page = '$page'
            ";
            mysqli_query($db, $query);
        }

        //////////////////////////////////////
        //Print text from database in textareas
        $text_array = array();

        $query = "SELECT text_content
                FROM text_table
        ";

        $result = mysqli_query($db, $query);
        while ( $row = mysqli_fetch_array ($result) ) {
            array_push($text_array, $row['text_content']);
        }
        ////////////////////////////////////



        if ( isset($_GET['page']) ) {
            $page = $_GET['page'];
            include ($page . '.php');
        }
        else {
            include 'text_admin.php';
        }
    }
    else {
        echo "
            <form method='post' class='logout'>
                <input type='password' name='password'>
                <input type='submit' value='Logga in'>
            </form>
        ";
    }
    include 'page_bottom.php';
?>
