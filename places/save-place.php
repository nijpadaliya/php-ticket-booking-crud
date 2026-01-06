<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "../config.php";


$place_name  = $_POST['place_name'] ?? '';


$query = "INSERT INTO place(place_name)
VALUES ('$place_name')";


if (mysqli_query($conn, $query)) {
    header("Location: /ticket-booking/places/place.php");
    exit();
} else {
    echo "MySQL Error: " . mysqli_error($conn);
}
