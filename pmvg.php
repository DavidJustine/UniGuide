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
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link href="https://cdn.jsdelivr.net/npm/ress@4.0.0/dist/ress.min.css" rel="stylesheet"/>
    <title>Document</title>
		<link rel="stylesheet" href="css/pmvg.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css">
    <link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
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
    <?php include 'pmvgo.php';?>
  </body>
</html>