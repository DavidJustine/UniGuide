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
    <title>UNIGUIDE| Academic Policies</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/mutual_aid_guidlines_nav_bar.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
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
      <button class="trg-sidenav" onclick="javascript:document.getElementById('sidenavbar').style.display='block';"><i class="fa fa-bars"></i></button>
    </header>
    <div class="sidenavbar" id="sidenavbar" style="display: none">
      <button class="trg-hideside" onclick="javascript:document.getElementById('sidenavbar').style.display='none';"><i class="fa fa-chevron-down"></i></button>
      <div class="sidebar-item">
        <a href="MutualAidGuidelines-MAG.php">
          <img class="sidebar-item-img" src="icons/mutual.png" alt="Image 1">
          <div class="sidebar-item-text">MUTUAL AID GUIDELINES</div>
        </a>
      </div>
      <div class="sidebar-item">
        <a href="annexes.php">
          <img class="sidebar-item-img" src="icons/annex.png" alt="Image 2">
          <div class="sidebar-item-text">ANNEXES</div>
        </a>
      </div>
    </div>
    <div class="mainc -with-mobile">
      <div class="label-on-top">
        <h2>Annexes</h2>
      </div>
      <div class="space"></div>
      <h4 class="section_h4_2">RA 7877 - Anti-Sexual Harassment Act of 1995</h4>
      <h4 class="section_h4_2">RA 9165 Comprehensive Dangerous Drugs Act of 2002</h4>
      <h4 class="section_h4_2">RA 9262 - Anti-Violence against Women and their Children Act of 2004</h4>
      <h4 class="section_h4_2">RA 9442 - Magna Carta for Disabled Persons, and for other Purposes</h4>
      <h4 class="section_h4_2">RA 10175 - Cybercrime Prevention Act of 2012</h4>
      <h4 class="section_h4_2">RA 10931 - Universal Access to Quality Tertiary Education Act</h4>
    </div>
  </body>
</html>