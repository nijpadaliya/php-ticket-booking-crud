<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Places</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<?php
require '../config.php';
$id = $_GET['id'];

$query = "SELECT * FROM place WHERE place_id = $id";
$result = mysqli_query($conn, $query);
$place = mysqli_fetch_assoc($result);
?>

<h1>Edit Places</h1>

<form action="update-place.php" method="post">
    <input type="hidden" name="place_id" value="<?php echo $id; ?>">
    <label for="place_name">Place Name:</label>
    <input type="text" id="place_name" name="place_name" value="<?php echo $place['place_name']; ?>" required><br><br>

    <input type="submit" value="Update Place">  
</body>
</html> 