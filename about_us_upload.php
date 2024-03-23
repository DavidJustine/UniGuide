<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Include database connection

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chart";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

    // Get image data
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $image_label = $_POST['image_label'];

    // Prepare SQL statement
    $sql = "INSERT INTO images (image, image_label) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $image, $image_label);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Image uploaded successfully.";

        header("Location: about_us_img.php");
        exit();
    } else {
        echo "Error uploading image: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
