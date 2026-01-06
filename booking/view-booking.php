    <html>
    <head>
        <title>View your ticket</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
<?php   

require "../config.php";

$id = intval($_GET['id']);
$query = "SELECT * FROM `ticket-table` WHERE user_id = $id";
$result = mysqli_query($conn, $query);


$reporter_data = "select * from place";
$reporter_result = mysqli_query($conn, $reporter_data);

?>


<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="user-card">
    <div class="card-header">
        <span class="user-id">ID: <?php echo $row['user_id']; ?></span>
    </div>

    <div class="card-body">
        <p><strong>Name:</strong> <?php echo $row['user_name']; ?></p>
        <p><strong>Age:</strong> <?php echo $row['user_age']; ?></p>
        <p><strong>Person:</strong> <?php echo $row['user_person']; ?></p>
        <p><strong>Mobile Number:</strong> <?php echo $row['user_mon']; ?></p>
        <p><strong>From:</strong>
        
         <?php 
         if( !empty( $row['user_from'] ) ){
            $r_id = (int)$row['user_from'];
            mysqli_data_seek($reporter_result, 0);

            while( $r_row = mysqli_fetch_assoc( $reporter_result ) ){
                if( (int)$r_row['place_id'] === $r_id ){
                    echo $r_row['place_name'];
                    break;
                }
            }
         }
         ?>

        <p><strong>Destination:</strong> <?php 
        if( !empty( $row['user_destination'] ) ){
            $r_id = (int)$row['user_destination'];
            mysqli_data_seek($reporter_result, 0);

            while( $r_row = mysqli_fetch_assoc( $reporter_result ) ){
                if( (int)$r_row['place_id'] === $r_id ){
                    echo $r_row['place_name'];
                    break;
                }
            }
         }
        ?></p>
        
         <P>
        <strong>Travel Date:</strong> 
        <?php 
            echo date('d F Y', strtotime($row['user_travel_date']));
        ?>
         </P>

        <p><strong>Booking-Status:</strong> CONFORM</p>

        
    </div>
</div>
<?php } ?>
<a href="booking-details.php" class="home-button">List Page </a>
</body>
</html>