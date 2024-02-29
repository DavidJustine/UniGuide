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
    <title>UNIGUIDE| Academic Calendar</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/academic_policy_nav_bar.css">
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
        <a href="academic-calendar.php">
            <img class="sidebar-item-img" src="icons/calendar.png" alt="Image 1">
            <div class="sidebar-item-text">Academic Calendar</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="academic-schedule-conduct.php">
            <img class="sidebar-item-img" src="icons/schedule.png" alt="Image 2">
            <div class="sidebar-item-text">Schedule & Conduct of Classes</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="academic-admission.php">
            <img class="sidebar-item-img" src="icons/admit.png" alt="Image 2">
            <div class="sidebar-item-text">Admissions</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-register.php">
            <img class="sidebar-item-img" src="icons/register.png" alt="Image 2">
            <div class="sidebar-item-text">Registration</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-cross.php">
            <img class="sidebar-item-img" src="icons/follower.png" alt="Image 2">
            <div class="sidebar-item-text">Cross-Enrolment</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-shift.php">
            <img class="sidebar-item-img" src="icons/exchange.png" alt="Image 2">
            <div class="sidebar-item-text">Shifting from One Course to Another</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-withdraw.php">
            <img class="sidebar-item-img" src="icons/withdraw.png" alt="Image 2">
            <div class="sidebar-item-text">Withdrawal of Registration</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-attendance.php">
            <img class="sidebar-item-img" src="icons/attendance.png" alt="Image 2">
            <div class="sidebar-item-text">Class Attendance</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-timelimit.php">
            <img class="sidebar-item-img" src="icons/limited.png" alt="Image 2">
            <div class="sidebar-item-text">Time Limits for the Completion of Degree Program</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-leave.php">
            <img class="sidebar-item-img" src="icons/absent.png" alt="Image 2">
            <div class="sidebar-item-text">Leave of Absence</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-preprequisites.php">
            <img class="sidebar-item-img" src="icons/required.png" alt="Image 2">
            <div class="sidebar-item-text">Prerequisites of Subjects</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-retention.php">
            <img class="sidebar-item-img" src="icons/retention.png" alt="Image 2">
            <div class="sidebar-item-text">Retention Policies</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-substitution.php">
            <img class="sidebar-item-img" src="icons/change.png" alt="Image 2">
            <div class="sidebar-item-text">Substitution of Subjects</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-validation.php">
            <img class="sidebar-item-img" src="icons/valid.png" alt="Image 2">
            <div class="sidebar-item-text">Validation</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-evaluation.php">
            <img class="sidebar-item-img" src="icons/evaluation.png" alt="Image 2">
            <div class="sidebar-item-text">Evaluation</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-withdrawuni.php">
            <img class="sidebar-item-img" src="icons/move.png" alt="Image 2">
            <div class="sidebar-item-text">Withdrawal from the University</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-load.php">
            <img class="sidebar-item-img" src="icons/book.png" alt="Image 2">
            <div class="sidebar-item-text">Academic Load</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-exam.php">
            <img class="sidebar-item-img" src="icons/exam.png" alt="Image 2">
            <div class="sidebar-item-text">Examination and Grades</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-grading.php">
            <img class="sidebar-item-img" src="icons/grading.png" alt="Image 2">
            <div class="sidebar-item-text">Grading System</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-honor.php">
            <img class="sidebar-item-img" src="icons/medal.png" alt="Image 2">
            <div class="sidebar-item-text">Academic Honors and Awards</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-advising.php">
            <img class="sidebar-item-img" src="icons/advise.png" alt="Image 2">
            <div class="sidebar-item-text">Advising</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-classreg.php">
            <img class="sidebar-item-img" src="icons/course.png" alt="Image 2">
            <div class="sidebar-item-text">Classroom Regulations and Management</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-graduate.php">
            <img class="sidebar-item-img" src="icons/thesis.png" alt="Image 2">
            <div class="sidebar-item-text">Graduate Thesis/ <br>Capstone/<br>Dissertation</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="academic-undergrad.php">
            <img class="sidebar-item-img" src="icons/student.png" alt="Image 2">
            <div class="sidebar-item-text">Undergraduate Thesis</div>
        </a>
    </div>
    
</div>

<div class="timeline">

  <h2>ACADEMIC CALENDAR <br><br>College</h2>
    <button onclick="window.location.href='academic-calendar-about.php';">
        About
      </button>
 
  <!-- First Semester --> 
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        July 18 - August 19, 2022
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        First Semester
      </div>
      <div class="timeline__event__description">
        <p>Registration Starts</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        August 22, 2022
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        First Semester
      </div>
      <div class="timeline__event__description">
        <p>Classes Begin</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        October 12 - October 14, 2022
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        First Semester
      </div>
      <div class="timeline__event__description">
        <p>Mid-Term Examination</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        December 19 - December 21, 2022
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        First Semester
      </div>
      <div class="timeline__event__description">
        <p>Final Examinations</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        December 28, 2022
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        First Semester
      </div>
      <div class="timeline__event__description">
        <p>Submission of Final Grades</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        December 22 - January 15, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        First Semester
      </div>
      <div class="timeline__event__description">
        <p>Semestral and Christmas Break</p>
      </div>
    </div>
  </div>

  </div>


<!-- Second Semester -->
<div class ="timeline">
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          January 2, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>Registration Starts</p>
        </div>
      </div>
    </div>

    <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          January 15, 2023
        </div>
      </div>
      <div class="timeline__event__content">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>University Foundation Celebration</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          January 16, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>Classes Begin</p>
        </div>
      </div>
    </div>

    <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          March 15 - March 17, 2023
        </div>
      </div>
      <div class="timeline__event__content">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>Mid-Term Examinations</p>
        </div>
      </div>
    </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 10 - May 12, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Final Examination | Graduating Students</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 17 - May 19, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Final Examination | Non-Graduating Students</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 17, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Submission of Final Grades | Graduating Students</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 20, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Vacation Begins | Students</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 22, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Submission of Final Grades | Non-Graduating Students</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 24, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Campus Academic Council Meeting</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 30, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Univeristy Academic Council Meeting</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        June 3, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Vacation Begins | Faculty (on Teacher's Leave)</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        June 13 - June 16, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        Second Semester
      </div>
      <div class="timeline__event__description">
        <p>Commencement Exercises</p>
      </div>
    </div>
  </div>
  
</div>

<!---Midterm 2023--->
<div class ="timeline">
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        June 13, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        Midterm Year 2023
      </div>
      <div class="timeline__event__description">
        <p>Registration Starts</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        June 19,2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
      Midterm Year 2023
      </div>
      <div class="timeline__event__description">
        <p>Classes Begin</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        July 5 - July 7, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        Midterm Year 2023
      </div>
      <div class="timeline__event__description">
        <p>Midterm Examiniations</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        July 26 - July 28,2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
      Midterm Year 2023
      </div>
      <div class="timeline__event__description">
        <p>Final Examinations</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        July 31, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        Midterm Year 2023
      </div>
      <div class="timeline__event__description">
        <p>Submission of Final Grades</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        August 11,2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
      Midterm Year 2023
      </div>
      <div class="timeline__event__description">
        <p>End of Teachers' Leave</p>
      </div>
    </div>
  </div>

</div>

<!--Elem and Sec -->
<div class ="timeline">
  <h2>Elementary and Secondary</h2>
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          July 18 - August 19, 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Registration Starts</p>
        </div>
      </div>
    </div>

    <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          August 22, 2022
        </div>
      </div>
      <div class="timeline__event__content">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Classes Begin</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          October 12 - October 14, 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>First Periodical Examination</p>
        </div>
      </div>
    </div>

    <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          December 5 - December 7, 2022
        </div>
      </div>
      <div class="timeline__event__content">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Second Periodical Examination</p>
        </div>
      </div>
    </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        December 22, 2022 - January 15, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        
      </div>
      <div class="timeline__event__description">
        <p>Semestral | Christmas Break</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        January 16, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        
      </div>
      <div class="timeline__event__description">
        <p>Classes Begin</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        March 15 - March 17, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        
      </div>
      <div class="timeline__event__description">
        <p>Third Periodical Examination</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 10 - May 12, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        
      </div>
      <div class="timeline__event__description">
        <p>Fourth Periodical Examination | Graduating Students</p>
      </div>
    </div>
  </div>

  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2"> <!-- Type2 -->
    <div class="timeline__event__icon">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        May 17 - May 19, 2023
      </div>
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        
      </div>
      <div class="timeline__event__description">
        <p>Fourth Periodical Examination | Non-Graduating Students</p>
      </div>
    </div>
  </div>

  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
    <div class="timeline__event__icon ">
    <i class="ri-menu-line"></i>
      <div class="timeline__event__date">
        June 13 - June 16, 2023
      </div>
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
      
      </div>
      <div class="timeline__event__description">
        <p>Tentative Graduation Days</p>
      </div>
    </div>
  </div>

</div>

<!--Advanced Education First Sem -->
<div class ="timeline">
  <h2>Advanced Education | Number of Saturdays per Semester</h2>
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          August 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          First Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 27 | Number of Saturdays: 1</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          September 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          First Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 3, 10, 17, 24 | Number of Saturdays: 4</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          October 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          First Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 1, 8, 15, 22, 29 | Number of Saturdays: 5</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          November 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          First Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 5, 12, 19, 26 | Number of Saturdays: 4</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          December 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          First Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 3, 10, 17, 24 | Number of Saturdays: 4</p>
        </div>
      </div>
    </div>
    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          TOTAL
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          First Semester
        </div>
        <div class="timeline__event__description">
          <p>18</p>
        </div>
      </div>
    </div>

</div>

<!--Advanced Education Sec Sem -->
<div class ="timeline">
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          January 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 21, 28 | Number of Saturdays: 2</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          February 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 4, 11, 18, 25 | Number of Saturdays: 4</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          March 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 4, 11, 18, 25 | Number of Saturdays: 4</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          April 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 1, 18, 15, 22, 29 | Number of Saturdays: 5</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          May 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>Dates: 6, 13, 20 | Number of Saturdays: 3</p>
        </div>
      </div>
    </div>
    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1"> <!-- Type1 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          TOTAL
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          Second Semester
        </div>
        <div class="timeline__event__description">
          <p>18</p>
        </div>
      </div>
    </div>

</div>

<!--Holidays -->
<div class ="timeline">
<h2>Holidays</h2>
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          August 29, 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>National Heroes Days</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          November 1, 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>All Saints' Day</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          November 2, 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>All Souls' Day</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          November 30, 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Bonifacio Day</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          December 25, 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Christmas Day</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          December 30, 2022
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Rizal Day</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          January 1, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>New Year's Day</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          January 15, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Foundation Day</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          March 2, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>La Union Day</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          April 6, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Maundy Thursday</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          April 7, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Good Friday</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          April 8, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Black Saturday</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          April 9, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Araw ng Kagitingan</p>
        </div>
      </div>
    </div>

    <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type2"> <!-- Type2 -->
      <div class="timeline__event__icon ">
      <i class="ri-menu-line"></i>
        <div class="timeline__event__date">
          May 1, 2023
        </div>
      </div>
      <div class="timeline__event__content ">
        <div class="timeline__event__title">
          
        </div>
        <div class="timeline__event__description">
          <p>Labor Day</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
