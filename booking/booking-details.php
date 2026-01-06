<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Booking details</title>
</head>
<body>
    <?php
    require '../config.php';
    $query = "SELECT * FROM `ticket-table`";
    $result = mysqli_query($conn, $query);

    $place = "SELECT * FROM place";
    $place_result = mysqli_query($conn, $place);
    ?>

<h1>Booking Details</h1>
<table> 
    <thead>
        <tr>
            <th>ID</th>
            <th>Passenger Name</th>
            <th>Age</th>
            <th>Person</th>
            <th>Mobile Number</th>
            <th>From</th>
            <th>Destination</th>
            <th>Travel Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['user_age']; ?></td>
            <td><?php echo $row['user_person']; ?></td>
            <td><?php echo $row['user_mon']; ?></td>
             <td><?php 
                if ( !empty($row['user_from']) ){
                    $r_id = (int)$row['user_from'];
                    mysqli_data_seek($place_result, 0);
            
                    while ($r_row = mysqli_fetch_assoc($place_result)) {
                        if ((int)$r_row['place_id'] === $r_id) {
                            echo $r_row['place_name'];
                            break;
                        }
                    }
                }
            ?></td>

            <td><?php 
                if ( !empty($row['user_destination']) ){
                    $r_id = (int)$row['user_destination'];
                    mysqli_data_seek($place_result, 0);
            
                    while ($r_row = mysqli_fetch_assoc($place_result)) {
                        if ((int)$r_row['place_id'] === $r_id) {
                            echo $r_row['place_name'];
                            break;
                        }
                    }
                }                                                                                                                                                                                                                                                                                                                                                                                                 
            ?></td>

                
            <td>
                <?php
                    echo date('d F Y', strtotime($row['user_travel_date']));
                ?>
            </td>

            <td>
                <a href="view-booking.php?id=<?php echo $row['user_id']; ?>" class="view-btn">view</a>
                <a href="delete-booking.php?id=<?php echo $row['user_id']; ?>" class="delete-btn">Delete</a>
                <a href="edit-booking.php?id=<?php echo $row['user_id']; ?>" class="update-btn">Update</a>
            </td>


                
        </tr>
        <?php } ?>

    </tbody>
</table>

<a href="index.php" class="book-ticket-button">Book Your Ticket</a>

</body>
</html>