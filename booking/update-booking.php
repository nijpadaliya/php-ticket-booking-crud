<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require "../config.php";

$data = [
    'user_id' => $_POST['user_id'],
    'user_name' => $_POST['passenger_name'],
    'user_age' => $_POST['age'],
    'user_person' => $_POST['person'],
    'user_mon' => $_POST['mobile'],
    'place_name' => $_POST['form'],
    'user_destination' => $_POST['destination'],
    'user_travel_date' => $_POST['travel_date'],

];

$user_id  = $data['user_id'];
$user_name  = $data['user_name'];
$user_age   = $data['user_age'];
$user_person = $data['user_person'];
$user_mobile = $data['user_mon'];
$user_from = $data['place_name'];
$user_destination = $data['user_destination'];
$user_travel_date = $data['user_travel_date'];




$query = "UPDATE `ticket-table` SET user_name='$user_name', user_age='$user_age', user_person='$user_person', user_mon='$user_mobile', user_from='$user_from', user_destination='$user_destination', user_travel_date='$user_travel_date' WHERE user_id=$user_id";


if (mysqli_query($conn, $query)) {
    header("Location: ../booking/booking-details.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}