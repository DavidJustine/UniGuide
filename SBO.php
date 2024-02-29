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
    <title>UNIGUIDE| Academic Policies</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/student_body_organization_nav_bar.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
    
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

    <div class="default-text">
       STUDENT BODY ORGANIZATION CONSTITUTION AND BY-LAWS
       <div class="tut">Tutorial how to navigate the contents</div>
    <img src="images/tutorial.png" alt="Tutorial Image"> 
</div>


<div class="sidenavbar">
	<div class="space"> </div>
    <div class="sidebar-item">
        <a href="sbo-sboc1.php">
            <img class="sidebar-item-img" src="icons/constitution.png" alt="Image 1">
            <div class="sidebar-item-text">Student Body Organizations Constitution</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sbo-laws.php">
            <img class="sidebar-item-img" src="icons/law.png" alt="Image 2">
            <div class="sidebar-item-text">By-Laws</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sbo-uerg.php">
            <img class="sidebar-item-img" src="icons/elect.png" alt="Image 2">
            <div class="sidebar-item-text">Uniform Election Rules & Guidelines of the DMMMSU-SBO</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="sbo-ethical.php">
            <img class="sidebar-item-img" src="icons/standard.png" alt="Image 2">
            <div class="sidebar-item-text">Code of Conduct & Ethical Standards</div>
        </a>
    </div>
</div>


</body>
</html>
