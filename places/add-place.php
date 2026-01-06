<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Places</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<?php
require '../config.php';
?>

<h1>Add Places</h1>

<form action="save-place.php" method="post">
    <label for="place_name">Place Name:</label>
    <input type="text" id="place_name" name="place_name" required><br><br>

    <input type="submit" value="Add Place">

</body>
</html>