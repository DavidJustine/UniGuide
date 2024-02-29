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
    <title>UNIGUIDE| Objectives of the SAS Program</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/student_affair_services_nav_bar.css">
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
        <a href="sas-principle.php">
            <img class="sidebar-item-img" src="icons/principle.png" alt="Image 1">
            <div class="sidebar-item-text">Principles and Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sas-objectives.php">
            <img class="sidebar-item-img" src="icons/objective.png" alt="Image 2">
            <div class="sidebar-item-text">Objectives of the SAS Program</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sas-sas.php">
            <img class="sidebar-item-img" src="icons/affairs.png" alt="Image 2">
            <div class="sidebar-item-text">Student Affairs and Services</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>OBJECTIVES OF THE STUDENT AFFAIRS AND SERVICES (SAS) PROGRAM<br><br></h2>
</div>

<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide opportunities for students to know themselves better, be able to realize their potentials and be able to successfully adjust to the next step;</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide financial assistance / aid to students;</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">      To provide the students a safe and secure home away from home;</div>
        </div>
      </div>

      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide services as part of the requirements of students' admission/enrolment;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide medical/dental services and provisions of primary health care and wellness of students;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide the students an official student government for official representation on matters where such representation is necessary;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide students the opportunity for the formation of student organizations that will pursue common objectives and initiate student-directed endeavors set up along social, cultural, sports, religious, literary, educational or recreational areas aligned with the mission of the university;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To judiciously implement institutional rules and regulations governing students' behavior;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To serve as an avenue of student ideas and opinions and provide opportunity for training future writers and journalists;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To promote the development of campus journalism as a means of strengthening ethical values, encouraging critical and creative thinking and developing moral character and personal discipline;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide services designed for physical fitness and wellness of students;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide activities designed to develop and enhance talents, abilities and values for appreciation, promotion and conservation of national culture and multi-cultural heritage;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide an environment conducive to free expression of one's religious orientation in accordance with institutional principles and policies; and</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">To provide programs and opportunities to trace the whereabouts of graduates to develop closer link with them.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/standards.js"></script>


</body>
</html>
