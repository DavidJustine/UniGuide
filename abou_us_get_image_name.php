<?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'chart';
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch image names from the database
$sql = "SELECT image_name FROM images";
$result = $conn->query($sql);
$imageNames = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $imageNames[] = $row['image_name'];
    }
}
echo json_encode($imageNames);

$conn->close();
?>
