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
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link href="https://cdn.jsdelivr.net/npm/ress@4.0.0/dist/ress.min.css" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
		<link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/basiclightbox/dist/basicLightbox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/basiclightbox/dist/basicLightbox.min.js"></script>
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
<section class="top-part -with-mobile">
<div class="title_org">
    <h1 class="title_org">DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY ORGANIZATIONAL STRUCTURE</h1>
</div>

<?php
        // Include PHP file
        include 'about_us_display.php';
        ?>

<!--<button onclick="toggleImage()" id="toggleButton">SAS</button>

<div class="org_1">
    <div class="image-container">
        <img src="images/org_1.png" alt="DMMMSU Organization" id="orgImage" onclick="openLightbox()" />
    </div>
    <img src="images/org_2.jpg" alt="Another Image" id="anotherImage" class="hidden" onclick="openLightbox()" />
</div>-->



<h1 class="hymn" style="text-align: center;">DMMMSU Hymn</h1>
  <div class="container hymnc -with-mobile">
    <div class="video">
    <iframe src="https://www.youtube.com/embed/MeUeoscQ-qQ?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="lyrics">
      <p>
        Hail beloved Alma Mater<br/>
        Don Mariano Marcos Memorial State University<br/>
        Your honored name will shine forever<br/>
        Keep your glorious fame resounding far and near.<br/>
        From thy portals we learn<br/>
        Skills unknown before<br/>
        And heads and hands keep on craving for more<br/>
        <br/>
        Oh hail beloved institution<br/>
        Never shall we stand forlorn<br/>
        From you a new era is born<br/>
        To keep life smoothly moving on.<br/>
        <br/>
        You are our inspiration<br/>
        In our quest for knowledge and wisdom<br/>
        You fulfill a noble mission<br/>
        In instruction, research and extension<br/>
        You give the best solution<br/>
        In transforming our land into a great nation<br/>
        And though the years may come and go<br/>
        Our love for you will grow<br/>
        Beloved University<br/>
        We are proud of you.<br/>
        <br/>
        We are proud of you.
      </p>
    </div>
  </div>
  </section>


<section class="faq-section -with-mobile">
    <div class="faq">
      <h2>FAQ</h2>
      <ul>
      <li>
        <h4>What are the College Programs they offer at MLUC?</h4>
        <p>They offer Engineering, Information Technology, Criminology, and many more. <a href="courses.php" id="mluc-programs-link">View here for more details.</a></p>
      </li>
        <li>
          <h4>How do I enroll as a freshman student?</h4>
          <p id="form">You can ask for an FHE form given by the university or you can <a href="https://www.dmmmsu.edu.ph/forms/" id="mluc-programs-link">visit here </a>forms>>Admission and select SAR-F003.</p>
        </li>
        <!-- More questions and answers -->
      </ul>
    </div>
    <div class="feedback">
  <h2>Feedback</h2>
  <form action="submit_feedback.php" method="post">
    <div class="form-controls">
      <textarea name="feedback" placeholder="Please give us your feedback or questions"></textarea>
      <div class="form-actions">
        <button type="submit" name="submit" id="sub">Submit</button>
        <a href="complaint_page.php" id="complaintLink">Send complaint to us</a>
      </div>
    </div>
  </form>
</div>



<script> <?php if (isset($_SESSION['error_message'])) : ?>
      alert("<?php echo $_SESSION['error_message']; ?>");
      <?php unset($_SESSION['error_message']); // Clear the message after displaying ?>
    <?php endif; ?></script>


</div>
</section>

<div class="space"></div>
    
    <script src="js/about_us.js"></script>
</body>
</html>
