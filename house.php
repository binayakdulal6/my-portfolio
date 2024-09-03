<?php
// Define an associative array with information about the house
$houseDetails = array(
    "Number of Bedrooms" => 5,
    "Number of Bathrooms" => 3,
    "Street Address" => "17-19 conder street"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My House</title>
    <link rel="stylesheet" href="house.css">
</head>
<body>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="study.html">My Study Subject</a></li>
        <li><a href="hobbies.html">My Hobbies</a></li>
        <li><a href="music.html">My Music</a></li>
        <li><a href="house.php">My House</a></li>
    </ul>

    <h1>House Details</h1>
    <table>
        <thead>
            <tr>
                <th>Property</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($houseDetails as $property => $detail): ?>
            <tr>
                <td><?php echo htmlspecialchars($property); ?></td>
                <td><?php echo htmlspecialchars($detail); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
