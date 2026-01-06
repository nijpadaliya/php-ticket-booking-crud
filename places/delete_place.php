<?php

require "../config.php";

$id = $_GET['id'];

$q = "DELETE FROM place WHERE place_id = $id";
mysqli_query($conn, $q);
header("Location: /ticket-booking/places/place.php");
exit();