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
    <title>UNIGUIDE| Personnel Involved</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/student_affair_services_con_plan_nav_bar.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
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

	<div class="sidenavbar">
	<div class="space"> </div>
    <div class="sidebar-item">
        <a href="sascp-ratio.php">
            <img class="sidebar-item-img" src="icons/rationale.png" alt="Image 1">
            <div class="sidebar-item-text">Rationale</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sascp-obj.php">
            <img class="sidebar-item-img" src="icons/statement.png" alt="Image 2">
            <div class="sidebar-item-text">Statement of Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sascp-perso.php">
            <img class="sidebar-item-img" src="icons/personnel.png" alt="Image 2">
            <div class="sidebar-item-text">Personnel Involved</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="sascp-servi.php">
            <img class="sidebar-item-img" src="icons/continuity.png" alt="Image 2">
            <div class="sidebar-item-text">Continuity Plan for Student Services</div>
        </a>
    </div>

</div>

<div class="timeline">
    <h2>PERSONNEL INVOLVED<br><br></h2>
</div>

<table class="perso-table">
  <tbody>
    <tr>
      <th>University President</th>
    </tr>

    <tr>
      <th>Vice President for Academic Affairs</th>
    </tr>

    <tr>
      <th>Director, Student Affairs and Services</th>
    </tr>

    <tr>
      <th>Chancellors</td>
    </tr>

    <tr>
      <th>Heads of the Offices of the Student Affairs and Services</th>
    </tr>

    <tr>
      <th>All In-Charge/Sub-Unit Heads of SAS</th>
    </tr>

    <tr>
      <th>Heads of Campus Management Information System</th>
    </tr>

    <tr>
      <th>DMMMSU Student Leaders and Students</th>
    </tr>
    
    <tr>
      <th>SAS Office Staff</th>
    </tr>

</table>

</body>
</html>
