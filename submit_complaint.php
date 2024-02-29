<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feedback";

    try {
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO compform (stud_id, name, complaint) VALUES (:stud_id, :name, :complaint)");
        $stmt->bindParam(':stud_id', $_POST['stud_id']);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':complaint', $_POST['complaint']);

        // Execute the SQL statement
        $stmt->execute();

        // Close the database connection
        $conn = null;

        // Redirect to the success page
        header("Location: submit_complaint_success.php");
        exit(); // Ensure that subsequent code is not executed after redirection
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
