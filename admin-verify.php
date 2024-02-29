<?php
header('Content-Type: application/json, charset=UTF-8');

// Decode the JSON data from the request body
$data = json_decode(file_get_contents('php://input'));

// Get the values from the JSON data
$username = $data->username;
$pass = $data->pass;

// Validate email domain
$username_pattern = "/^[A-Za-z0-9._%+-]+@student.dmmmsu.edu.ph$/";
if(!preg_match($username_pattern, $username)) {
    echo json_encode(array("status"=>"fail","message"=>"Please enter a valid username."));
    exit;
}

// Check for empty inputs
if(empty($username) || empty($pass)) {
    echo json_encode(array("status"=>"fail","message"=>"All fields are required."));
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query with placeholders
$stmt = $conn->prepare("SELECT * FROM info WHERE username = ? AND pass = ?");

// Bind the values to the placeholders
$stmt->bind_param("ss", $email, $pass);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username; // Set session variable
        echo json_encode(array("status"=>"success","message"=>"Login successful."));
    } else {
        echo json_encode(array("status"=>"fail","message"=>"Incorrect email or Password"));
    }
} else {
    echo json_encode(array("status"=>"fail","message"=>"Error executing query: " . $conn->error));
}

$conn->close();
?>