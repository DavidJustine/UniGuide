<?php
if(isset($_GET['imageName'])) {
    $imageName = $_GET['imageName'];

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

    // Fetch image data based on image name
    $sql = "SELECT image_data FROM images WHERE image_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $imageName);
    $stmt->execute();
    $stmt->bind_result($imageData);
    $stmt->fetch();
    $stmt->close();

    // Send image data as response
    header("Content-Type: image/png");
    echo $imageData;

    $conn->close();
}
?>
