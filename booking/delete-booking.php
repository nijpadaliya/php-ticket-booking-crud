<?php

require "../config.php";

$id = $_GET['id'];

$q = "DELETE FROM `ticket-table` WHERE user_id = $id";
mysqli_query($conn, $q);
header("Location: ../booking/booking-details.php");
exit();