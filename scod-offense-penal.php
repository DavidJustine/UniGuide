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
    <link rel="stylesheet" href="css/student_code_of_descipline_nav_bar.css"/>
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
<div class="sidenavbar" id="sidenavbar" style="display: none;">
	<button class="trg-hideside" onclick="javascript:document.getElementById('sidenavbar').style.display='none';"><i class="fa fa-chevron-down"></i></button>
	<div class="sidebar-item">
		<a href="scod-offense-penal.php">
			<img class="sidebar-item-img" src="icons/penalty.png" alt="Image 1">
			<div class="sidebar-item-text">Offenses and Penalties</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="scod-offense-penal_A1.php">
			<img class="sidebar-item-img" src="icons/rules.png" alt="Image 2">
			<div class="sidebar-item-text">Article 1.<br> Rules and Regulations on Student Conduct & Discipline</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="scod-offense-penal_A2.php">
			<img class="sidebar-item-img" src="icons/committee.png" alt="Image 2">
			<div class="sidebar-item-text">Article 2. Committees and Proceedings</div>
		</a>
	</div>
</div>
<div class="mainc -with-mobile">
	<div class="label-on-top">
    <h2>OFFENSES AND PENALTIES</h2>
	</div>
  <p>When a person registers as a student and is accepted in DMMMSU, a contract is established where he submits himself and agrees to comply with the rules and regulations of the University. Upon his enrollment, he assumes all responsibilities appertaining to his status as a student specifically towards the administration, staff, faculty members and fellow students.</p>
  <p>Every student must value and exercise self-discipline to earn due respect from fellow students, staff, faculty members, stakeholders and the administration. He should conduct and present himself in a decent manner and abide with generally accepted norms of behavior at all times. He should observe courtesy and proper decorum in dealing with his fellow students, faculty, personnel and the administration.</p>
  <p>Every student shall obey the laws of the land, the rules and regulations of the institution and the standard of a good society.</p>
  <p>The penalties are intended to inculcate the ideals of justice, to have a healthy respect for rules and authority, rectify unacceptable behavior and protect the good name both of the students and of the University.</p>
</div>
</body>
</html>
