<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uniguide";

    try {
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO compform (stud_id, name, complaint, status) VALUES (:stud_id, :name, :complaint, 'pending')");
        $stmt->bindParam(':stud_id', $_POST['stud_id']);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':complaint', $_POST['complaint']);

        // Execute the SQL statement
        $stmt->execute();

        // Close the database connection
        $conn = null;
				
				if(session_start()) {
					$_SESSION['success_msg_complaint'] = "Your complaint has been successfully submitted. We will get back to you soon.";
				}
				
        // Redirect to the success page
        header("Location: complaint_page.php");
        exit(); // Ensure that subsequent code is not executed after redirection
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
