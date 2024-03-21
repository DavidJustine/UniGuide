<?php
session_start();

if (isset($_GET['logout'])) {
  // Unset all session variables
  $_SESSION = [];

  // Destroy the session
  session_destroy();

  // Redirect to the login page after logout
  header("Location: user_register.php");
  exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uniguide";

if(isset($_GET['role']) && $_GET['role'] === 'Guest') {
    // Increment guest visit count
    increment_guest_visit_count();
}
// Function to increment guest visit count
function increment_guest_visit_count() {
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

    // Prepare the SQL statement to insert a new visit record
    $sql = "INSERT INTO visits (user_id, role, visit_timestamp) VALUES (?, ?, NOW())";
    
    // Bind the parameters and execute the statement
    $stmt = $conn->prepare($sql);
    $user_id = null; // Since it's a guest visit, there's no user_id
    $role = "Guest";
    $stmt->bind_param("ss", $user_id, $role);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Guest visit recorded successfully
        header("Location: uniguide-home.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        // Error occurred, redirect back to user_register.php
        header("Location: user_register.php?error=1");
        exit(); // Ensure script execution stops after redirection
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link href="https://cdn.jsdelivr.net/npm/ress@4.0.0/dist/ress.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
    <title>UniGuide | Home</title>
</head>
<body>
<header class="container-masthead">
	<div class="row">
			<h1 class="logo">
				<a href="https://www.dmmmsu.edu.ph/" title="Don Mariano Marcos Memorial State University" rel="home">
					<img alt="Don Mariano Marcos Memorial State University Official Logo" src="https://www.dmmmsu.edu.ph/wp-content/uploads/2023/07/baong-piipinas-with-dmsu-trans-1.png"/>
				</a>
			</h1>
			<div id="textlogo-inner-wrapper">
				<div id="agency-heading">Republic of the Philippines</div>
				<div id="agency-line"></div>
				<div id="agency-name">Don Mariano Marcos Memorial State University</div>
				<div id="agency-tagline">La Union, Philippines | dmmmsu@dmmmsu.edu.ph</div>
			</div>
	</div>
	<nav class="navbar">
		<ul>
			<li><a href="uniguide-home.php">Home</a></li>
			<li><a href="about_us.php">About Us</a></li>
			<li><a href="courses.php">Colleges</a></li>
			<li><a href="games/gameoptions.php">Games</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
			<li id=exit><a href="?logout=true">Log Out</a></li>
		</ul>
	</nav>
</header>
<div class="home-banner">
    <img src="images/home-banner.png" alt="Online Student Handbook">
</div>
<div class="space"></div>
<?php
	include 'contents.php';
?>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="footer -with-mobile">
	<img id="wuri" src="images/wuri.png" alt="Online Student Handbook">
	<img src="images/csc.png" alt="Online Student Handbook">
	<img id="qs-star" src="images/qs_stars.png" alt="Online Student Handbook">
</div>
</body>
</html>
