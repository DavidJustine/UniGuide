<?php
session_start(); // Start the session (if not started)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both student ID and password fields are not empty
    if (!empty($_POST['student_id']) && !empty($_POST['password'])) {
        // Replace the credentials with your actual database details
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

        // Sanitize user input to prevent SQL injection
        $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Query the database for the user
        $sql = "SELECT * FROM users WHERE student_id = '$student_id' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, set session variables
            $_SESSION['loggedin'] = true; // Set a session variable to mark login

            // Fetch user data
            $user_row = $result->fetch_assoc();
            $user_id = $user_row['student_id'];
            $role = $user_row['role'];

            // Call record_visit function to log the visit
            record_visit($user_id, $role);

            // Redirect to uniguide-home.php
            header("Location: uniguide-home.php");
            exit();
        } else {
            echo "Invalid student ID or password!";
        }

        $conn->close();
    } else {
        echo "Please fill in all the fields!";
    }
}

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
