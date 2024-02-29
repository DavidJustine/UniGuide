<?php
session_start();
// Establish connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form data with validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $feedback = trim($_POST['feedback']);

  // Check if the feedback field is empty
  if (empty($feedback)) {
    $_SESSION['error_message'] = "Please provide feedback before submitting.";
    header("Location: about_us.php");
    exit();
  }

  // Prepare and bind the statement to prevent SQL injection
  $stmt = $conn->prepare("INSERT INTO feedbacks (message) VALUES (?)");
  $stmt->bind_param("s", $feedback);
  $stmt->execute();

  // Check if the insertion was successful
  if ($stmt->affected_rows > 0) {
    $_SESSION['success_message'] = "Feedback submitted successfully!";
    header("Location: about_us.php");
    exit();
  } else {
    echo "Error submitting feedback: " . $conn->error;
  }

  $stmt->close();
}

$conn->close();
?>