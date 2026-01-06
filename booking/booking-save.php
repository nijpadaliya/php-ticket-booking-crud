<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "../config.php";


$user_name         = $_POST['passenger_name'] ?? '';
$user_age          = $_POST['age'] ?? '';
$user_person       = $_POST['person'] ?? '';
$user_mon          = $_POST['mobile'] ?? '';
$user_from         = $_POST['form'] ?? '';
$user_destination  = $_POST['destination'] ?? '';
$user_travel_date  = $_POST['travel_date'] ?? '';

$query = "INSERT INTO `ticket-table`    
(user_name, user_age, user_person, user_mon, user_from, user_destination, user_travel_date)
VALUES 
('$user_name','$user_age', '$user_person', '$user_mon', '$user_from', '$user_destination', '$user_travel_date')";


if (mysqli_query($conn, $query)) {
    header("Location: ../booking/booking-details.php");
    exit();
} else {
    echo "MySQL Error: " . mysqli_error($conn);
}
