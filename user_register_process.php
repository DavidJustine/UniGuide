<?php
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

// Assuming registration form data is submitted and processed
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data (sanitize, validate, etc.)
    // Example:
    $student_id = $_POST['student_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Perform SQL query to insert user registration data into the database
    $sql = "INSERT INTO users (student_id, username, password, role) VALUES ('$student_id', '$username', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful

        // Get the newly inserted user's ID
        $user_id = $conn->insert_id;

        // Call record_visit function to log the visit
        record_visit($user_id, $role);

        // Redirect to uniguide-home.php
        header("Location: uniguide-home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();

// Function to record visit
function record_visit($user_id, $role) {
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

    // Prepare SQL statement to insert visit record
    $sql = "INSERT INTO visits (user_id, role) VALUES (?, ?)";
    $statement = $conn->prepare($sql);
    $statement->bind_param("is", $user_id, $role);

    // Execute SQL statement
    if ($statement->execute()) {
        echo "Visit recorded successfully";
    } else {
        echo "Error recording visit: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
