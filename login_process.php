<?php
session_start(); // Start the session (if not started)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password fields are not empty
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
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
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Hash the password (consider using stronger hashing algorithms)
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Query the database for the user
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, set session variables and redirect
            $_SESSION['loggedin'] = true; // Set a session variable to mark login
            header("Location: admin_page.php");
            exit();
        } else {
            echo "Invalid username or password!";
        }

        $conn->close();
    } else {
        echo "Please fill in all the fields!";
    }
}
?>
