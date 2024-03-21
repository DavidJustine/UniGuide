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
    <title>UNIGUIDE| Statement of Objectives</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/student_scholarship_assistanship_nav_bar.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"/>
		<style>
		.label-on-top h2 { width: auto; }
		</style>
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
		<a href="ssafap-goal-objective.php">
			<img class="sidebar-item-img" src="icons/goals.png" alt="Image 1">
			<div class="sidebar-item-text">Goals and Objectives</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="ssafap-personnel.php">
			<img class="sidebar-item-img" src="icons/group.png" alt="Image 2">
			<div class="sidebar-item-text">Personnel</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="ssafap-services.php">
			<img class="sidebar-item-img" src="icons/services.png" alt="Image 2">
			<div class="sidebar-item-text">Services</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="ssafap-grants-scholarship.php">
			<img class="sidebar-item-img" src="icons/scholar.png" alt="Image 2">
			<div class="sidebar-item-text">Grants and Scholarships</div>
		</a>
  </div>
	<div class="sidebar-item">
		<a href="ssafap-student-assistanship.php">
			<img class="sidebar-item-img" src="icons/assist.png" alt="Image 2">
			<div class="sidebar-item-text">Student Assistantship Program</div>
		</a>
	</div>
</div>
<div class="mainc -with-mobile">
	<div class="label-on-top">
    <h2>SERVICES</h2>
	</div>
	<!-- START SLIDE -->
	<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">
						<h2 class="h2_services">INFORMATION</h2>
            <p class="p_services">&#x2022; Orientation of various scholarships and educational grants offered to students</p>
            <p class="p_services">&#x2022; Conduct of enrichment activities</p>
          </div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">
						<h2 class="h2_services">SCREENING, SELECTION AND PROCESSING</h2>
						<p class="p_services">&#x2022; Interview [possible scholars for recommendation to prospective benefactors.</p>
						<p class="p_services">&#x2022; Evaluates documents submitted by scholars.</p>
						<p class="p_services">&#x2022; Consolidates requirements of scholars and submit to benefactors when necessary.</p>
          </div>
        </div>
			</div>
			<!-- Third Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">
				<div class="blog-slider__content">
					<div class="blog-slider__text">
						<h2 class="h2_services">SCHOLARSHIP CONSULTATION AND REFERAL</h2>
						<p>&#x2022; Schedule consultaion time for scholars with problems and other concerns.</p>
						<p>&#x2022; Coordinates with Program Chairpersons and Guidance  Counselors benefactors and tother concerned campus or university official for referral of scholars.</p>
					</div>
				</div>
			</div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">
				<div class="blog-slider__content">
					<div class="blog-slider__text">
						<h2 class="h2_services">MONITORING</h2>
						<p class="p_services">&#x2022; Conduct meetngs of scholars for monitoring and follow-up</p>
					</div>
				</div>
			</div>
		</div>
		<div class="blog-slider__pagination"></div>
	</div>
	<!-- END SLIDE -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/standards.js"></script>
</div>
</body>
</html>
