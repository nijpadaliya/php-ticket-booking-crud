


<?php 
require "../config.php";

$id = (int)$_GET['id'];

$q = "SELECT * FROM `ticket-table` WHERE user_id = $id";
$r = mysqli_query($conn, $q);
$user = mysqli_fetch_assoc($r);


$places = array();

$result = mysqli_query($conn, "SELECT * FROM place");
while ($row = mysqli_fetch_assoc($result)) {
    $places[] = $row;
}
?>



<html>
    <head>
        <title>Update Ticket Details</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <h2>Update Ticket Details</h2>
        <form action="update-booking.php" method="POST">


            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <label for="passenger_name">Passenger Name:</label>
            <input type="text" id="passenger_name" name="passenger_name" value="<?php echo $user['user_name']; ?>" required><br><br>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="<?php echo $user['user_age']; ?>" required><br><br>

            <label for="person">Person:</label>
            <input type="text" id="person" name="person" value="<?php echo $user['user_person']; ?>" required><br><br>

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" value="<?php echo $user['user_mon']; ?>" required><br><br>

            <label>From:</label>
            <select name="form" id=select>
                <option value="">Select From</option>
                <?php foreach ($places as $row) { ?>
                    <option value="<?= $row['place_id']; ?>"
                        <?= ($user['user_from'] == $row['place_id']) ? 'selected' : '' ?>>
                        <?= $row['place_name']; ?>
                    </option>
                <?php } ?>
            </select>

            <label>Destination:</label>
            <select name="destination" id=select>
                <option value="">Select Destination</option>
                <?php foreach ($places as $row) { ?>
                    <option value="<?= $row['place_id']; ?>"
                        <?= ($user['user_destination'] == $row['place_id']) ? 'selected' : '' ?>>
                        <?= $row['place_name']; ?>
                    </option>
                <?php } ?>
            </select>
            
            <label for="travel_date">Travel Date:</label>
            <input type="date" id="travel_date" name="travel_date" value="<?php echo $user['user_travel_date']; ?>" required><br><br>
            
            <input type="submit" value="Update User">
        </form>

    </body>
</html>