<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require "../config.php";


$data = [
    'place_name' => $_POST['place_name'],
    'place_id' => $_POST['place_id'],
];

$place_name  = $data['place_name'];
$id = $data['place_id'];


$query = "UPDATE place SET place_name='$place_name' WHERE place_id = $id";

if (mysqli_query($conn, $query)) {
    header("Location: /ticket-booking/places/place.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
