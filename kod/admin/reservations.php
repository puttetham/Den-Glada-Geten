<?php

$query = "SELECT reservations.id, first_name, last_name, email, reserved_from, reserved_to, type
        FROM reservations
        LEFT JOIN rooms
        ON reservations.room=rooms.id
        ORDER BY reservations.id DESC
        ";

if ( isset($_GET['sort']) ) {
    $sort = $_GET['sort'];

    $query = "SELECT reservations.id, first_name, last_name, email, reserved_from, reserved_to, type
            FROM reservations
            LEFT JOIN rooms
            ON reservations.room=rooms.id
            ORDER BY reservations." . $sort . "
            ";
}


$result = mysqli_query($db, $query);

?>
<div class="table-container">
    <table>
        <tr>
            <th><a href="index.php?page=reservations&sort=id">ID</a></th>
            <th><a href="index.php?page=reservations&sort=last_name">Namn</a></th>
            <th><a href="index.php?page=reservations&sort=email">Mail</a></th>
            <th><a href="index.php?page=reservations&sort=reserved_from">Incheckning</a></th>
            <th><a href="index.php?page=reservations&sort=reserved_to">Utcheckning</a></th>
            <th><a href="index.php?page=reservations&sort=room">Rum</a></th>
        </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['first_name']." ".$row['last_name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['reserved_from']."</td>
                    <td>".$row['reserved_to']."</td>
                    <td>".$row['type']."</td>
                </tr>
                ";
            }
            ?>
    </table>
<div>
