<?php

$query = "SELECT *
        FROM reservations
";

$result = mysqli_query($db, $query);

?>

<table>
    <tr>
        <th>ID</th>
        <th>Namn</th>
        <th>Mail</th>
        <th>Incheckning</th>
        <th>Utcheckning</th>
        <th>Rum</th>
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
                <td>".$row['room']."</td>
            </tr>
            ";
        }
        ?>
</table>
