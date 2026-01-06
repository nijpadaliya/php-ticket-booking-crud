<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../config.php';
$locations = "SELECT * FROM place";
$result = mysqli_query($conn, $locations);

$place = array();
while($row = mysqli_fetch_assoc($result)) {
    $place[] = $row;
}

?>

<h1>Welcome to Ticket Booking System</h1>

<form action="booking-save.php" method="post">


    <label for="passenger_name">Passenger Name:</label>
    <input type="text" id="passenger_name" name="passenger_name" required><br><br>
    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>

    <label for="person">Person:</label>
    <input type="number" id="person" name="person" required><br><br>

    <label for="mobile">Mobile Number:</label>
    <input type="text" id="mobile" name="mobile" required><br><br>


        <?php if( !empty($place) ){ ?>
            <label for="form">From:</label>
            <select name="form" id="select">
                <option value="selected">Select Location</option>
                <?php foreach($place as $from_row) { ?>
                    <option value='<?php echo $from_row['place_id']; ?>'><?php echo $from_row['place_name']; ?></option>
                <?php } ?>                      
            </select><br><br>
        <?php } ?>
            
            

        <?php if( !empty($place) ){?>
            <label for="destination">Destination:</label>
            <select name="destination" id="select">
               <option value="selected">Select Destination</option>
               <?php foreach($place as $destination_row) { ?>
                   <option value='<?php echo $destination_row['place_id']; ?>'><?php echo $destination_row['place_name']; ?></option>
               <?php } ?>                
            </select><br><br>
        <?php } ?>



    <label for="travel_date">Travel Date:</label>
    <input type="date" id="travel_date" name="travel_date" required><br><br>



    <input type="submit" value="Book Ticket">


</body>
</html>