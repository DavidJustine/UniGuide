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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMMMSU Scholarship</title>
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
  <header class="container-masthead">
    <div class="row"><div class="large-9  columns">
            <h1 class="logo">
                <a href="https://www.dmmmsu.edu.ph/" title="Don Mariano Marcos Memorial State University" rel="home">
                <div id="textlogo-wrapper">
                    <div id="textlogo-image">
                        <img alt="Don Mariano Marcos Memorial State University Official Logo" src="https://www.dmmmsu.edu.ph/wp-content/uploads/2023/07/baong-piipinas-with-dmsu-trans-1.png" ></div>
                    </div>
                </div>
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

  <section class="cont-bod">
    <div class="contact-section">
        <div class="contact-heading">
            <h2>You can reach us!</h2>
            <p>You can contact us below here</p>
        <div class="middle">
        <a class="btn" href="https://www.facebook.com/DMMMSUEduPh">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn" href="https://www.dmmmsu.edu.ph/">
        <i class="fab fa-google"></i>
        </a>
        <a class="btn" href="https://www.youtube.com/channel/UCMxmVLwjdjWWWUfKV2b5E7g">
        <i class="fab fa-youtube"></i>
        </a>
        <a class="btn" href="https://twitter.com/DMMMSUEduPh/">
            <i class="fab fa-twitter"></i>
        </a>

    </div>
        </div>
        <div class="contact-image">
            <img src="images/contact.png" alt="Contact Us">
        </div>
    </div>

</section>
    <div class="row4">
<div class="contact-heading">
  </div>
  <div class="division">
    <h2>NLUC</h2>
    <ul>
      <li id="nluc-phone"><i class="fas fa-phone-alt"></i>(072) 687-0634</li>
      <li id="nluc-email"><i class="far fa-envelope"></i>chancellor.nluc@dmmmsu.edu.ph</li>
      <li id="nluc-website"><i class="fas fa-globe"></i> www.dmmmsu.edu.ph</li>
    </ul>
  </div>
  
  <div class="division">
    <h2>MLUC</h2>
    <ul>
      <li id="nluc-phone"><i class="fas fa-phone-alt"></i>(072)-700-5453</li>
      <li id="nluc-email"><i class="far fa-envelope"></i>chancellor.mluc@dmmmsu.edu.ph</li>
      <li id="nluc-website"><i class="fas fa-globe"></i> www.dmmmsu.edu.ph</li>
    </ul>
  </div>
  
  <div class="division">
    <h2>SLUC</h2>
    <ul>
      <li id="nluc-phone"><i class="fas fa-phone-alt"></i>(072)522-1062</li>
      <li id="nluc-email"><i class="far fa-envelope"></i>chancellor.sluc@dmmmsu.edu.ph</li>
      <li id="nluc-website"><i class="fas fa-globe"></i> www.dmmmsu.edu.ph</li>
    </ul>
  </div>
  
  <div class="division">
    <h2>OUS</h2>
    <ul>
      <li id="nluc-phone"><i class="fas fa-phone-alt"></i> (072) 242-3608</li>
      <li id="nluc-email"><i class="far fa-envelope"></i>chancellor.ous@dmmmsu.edu.ph</li>
      <li id="nluc-website"><i class="fas fa-globe"></i> www.dmmmsu.edu.ph</li>
    </ul>
  </div>
</div>
</body>
</html>
