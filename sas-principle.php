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
    <title>UNIGUIDE| Principles and Objectives</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/student_affair_services_nav_bar.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
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
    <h2>PRINCIPLES AND OBJECTIVES<br><br></h2>
</div>

<p>As we move forward in shaping the minds of our 21st century learners in the country and around the world, Don Mariano Marcos Memorial State University strives to deliver higher quality of services to its clienteles,  with a universal appeal. It is committed to develop world-class professionals in the field of education, engineering, information and communications technology, arts and sciences, management, agriculture and forestry, fisheries and veterinary medicine, psychology, and criminal justice.</p>

<p>The Office of the Student Affairs and Services (OSAS) is one of the most important avenues of public service in the University. It plays a major role in the transformation of human resources into productive, self-reliant citizens, and responsible leaders. In addition, it is established to coordinate and supervise services and programs that are concerned with non-academic experiences to attain total student development. Likewise, it provides an array of services devoted in serving the studentry to ensure that the loving and learning environment help students attain their academic goals. Lastly, it aims to enhance each student's experience with extra-curricular activities.</p>

<p>Student services and programs in the University are carried in a manner that is unified, meaningful, and collaborative with the academic support experiences of students to attain holistic student development. Academic support services include activities that relate to student welfare, student development and those that relate to institutional programs and services. These services are accessible to all who are qualified regardless of their demographic and personal characteristics.</p>

<p>Most importantly, student affairs and services professionals continuously strive to become globally competitive implementers of student services and programs through national and international training workshops and seminars. Collaborative partnerships with other professionals locally and abroad enable them to have greater perspectives of the best practices in the student affairs and services community. This is integral in the formulation of student-centered activities and programs of its 21st century clienteles.</p>

</body>
</html>
