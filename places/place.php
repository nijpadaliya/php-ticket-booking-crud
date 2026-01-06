<html>
    <head>
        <title>MH-payroll</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
<?php   

require "../config.php";

$query = "SELECT * FROM place";
$result = mysqli_query($conn, $query);

?>


<h1>Place List</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th> Place Name</th>
            <th> Action</th>
  
        </tr>
    </thead>
    <tbody>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['place_id']; ?></td>
            <td><?php echo $row['place_name']; ?></td>
            
            <td>
                <a href="delete_place.php?id=<?php echo $row['place_id']; ?>" class="delete-btn">Delete</a>
                <a href="edit-place.php?id=<?php echo $row['place_id']; ?>" class="update-btn">Update</a>
        </td>
            
            
        </tr>
<?php } ?>
    </tbody>
</table>

<a href="add-place.php" class="add-place-button">Add New Place</a>
</body>
</html>