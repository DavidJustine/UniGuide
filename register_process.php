<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password fields are not empty
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Database connection (change these credentials to match your setup)
        $servername = "localhost"; // Change if your database is on a different server
        $username = "root"; // Replace with your database username
        $password = ""; // Replace with your database password
        $dbname = "uniguide"; // Replace with your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the INSERT statement
        $stmt = $conn->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);

        // Set parameters and execute
        $username = $_POST['username'];
        $password = $_POST['password'];
        $stmt->execute();

        // Check if the registration was successful
        if ($stmt->affected_rows > 0) {
            // Redirect to admin_login.php after successful registration
            header("Location: admin_login.php");
            exit(); // Ensure that no further code is executed after the redirect
        } else {
            echo "Registration failed!";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill in all the fields!";
    }
}
?>
