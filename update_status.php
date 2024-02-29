<?php
// Check if compId is set and not empty
if(isset($_POST['compId']) && !empty($_POST['compId'])) {
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uniguide";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to update status
    $compId = $_POST['compId'];
    $sql = "UPDATE compform SET status = 'replied' WHERE comp_id = $compId";

    if ($conn->query($sql) === TRUE) {
        // Status updated successfully
        echo "Status updated successfully";
    } else {
        // Error updating status
        echo "Error: " . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    // If compId is not set or empty, display error message
    echo "Error: Invalid complaint ID";
}
?>
