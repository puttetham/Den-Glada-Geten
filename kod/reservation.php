<?php
    require_once 'config.php';

    if(isset($_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['roomtype'],
            $_POST['arrival_date'],
            $_POST['depart_date'])
        ) {

        // All input data from form
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $roomtype = $_POST['roomtype'];
        $arrival_date = $_POST['arrival_date'];
        $depart_date = $_POST['depart_date'];
        $activity = $_POST['aktivitet'];

        // Get all rooms of the selected room type
        $query = "SELECT *
                FROM rooms
                WHERE type = '$roomtype'";

        $result = mysqli_query($db, $query);

        $response; //The response that displays on the page

        while($room = mysqli_fetch_assoc($result) ) {
            $desiredroom = $room['id'];
            $isvacant = TRUE;

            // Compare the current room id to the reservation list to check if available
            $query = "SELECT *
                    FROM reservations
                    WHERE room = '$desiredroom'";

            $reserved_rooms = mysqli_query($db, $query);

            // This loop only runs if there are any rows with the same room id as the current room id
            while($reservation = mysqli_fetch_assoc($reserved_rooms) ) {

                // If arriving after the conflicting reservation departs or leaving before they arrive, all is ok (ugly check...)
                if( !($arrival_date >= $reservation['reserved_to']
                    OR $depart_date <= $reservation['reserved_from']) ) {
                        $isvacant = FALSE;
                }
            }

            //If no conflicting reservations were found, go through with the reservation!
            if ($isvacant) {
                $reservquery = "INSERT INTO reservations(room, first_name, last_name, email, reserved_from, reserved_to, activity)
                VALUES ('$desiredroom', '$firstname', '$lastname', '$email', '$arrival_date', '$depart_date', '$activity[0]')";

                mysqli_query($db, $reservquery);

                $response = 'Bokat!';
                break;
            }
            else {
                $response =  'Det finns tyvärr inga lediga rum av den begärda typen. Välj en annan typ av rum och försök igen.';
            }
        }
        echo $response;
        echo $activity;
    }
?>
