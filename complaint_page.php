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
    <title>UNIGUIDE| File Complaints</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/about_us.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/basiclightbox/dist/basicLightbox.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/basiclightbox/dist/basicLightbox.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
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
<section class="top-part">
	<div class="title_org_1">
		<h1>COMPLAINT FORM</h1>
	</div>

	<div class="image-and-form">
		<div class="image-and-text">
			<img src="images/comp.png" alt="Complaint Image" class="complaint-image">
			<h1 class="sas_title">SAS! ALWAYS AT YOUR SERVICE!</h1>
		</div>
		<div class="complaint-container">
			<div class="form-container">
				<?php if(isset($_SESSION['success_msg_complaint'])): ?>
					<p style="padding:8px;border: 1px solid green;background-color:#ccf1cc;margin-bottom:16px;border-radius:4px;"><?= $_SESSION['success_msg_complaint'] ?></p>
					<?php unset($_SESSION['success_msg_complaint']); ?>
				<?php endif; ?>
				<form action="submit_complaint.php" method="post">
					<label for="stud_id"><b>Student ID:</b></label>
					<input type="text" id="stud_id" name="stud_id" placeholder="xxx-xxxx-x"><br>
					
					<label for="name"><b>DMMMSU Email</b></label>
					<input type="text" id="name" name="name" placeholder="DMMMSU Email"><br>
					
					<label for="complaint"><b>Your Complaint:</b></label>
					<textarea id="complaint" name="complaint" placeholder="Please describe your complaint" rows="4"></textarea><br>
					
					<button type="submit" name="submit" id="submit-button">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
<div class="row4">
	<div class="contact-heading">
    <h2>CONTACT US</h2>
    <ul class="social-icons">
    <li><a href="https://www.facebook.com/DMMMSUEduPh/"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://twitter.com/DMMMSUEduPh/"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCMxmVLwjdjWWWUfKV2b5E7g"><i class="fab fa-youtube"></i></a></li>
  </ul>
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



    
    
    <script src="js/about_us.js"></script>
</body>
</html>
