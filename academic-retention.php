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
    <title>UNIGUIDE| Retention Policies</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
    <link rel="stylesheet" href="css/academic_policy_nav_bar.css">
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
    <h2 id="h2-reten">RETENTION POLICIES<br><br></h2>
</div>

<div class="cards">
  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <h1 class="card__title">Sec. 1.a</h1>
        <p class="card__description">
        The following standards shall be observed:
        A student who obtains a final grade lower than 75 in 25% to 36% of the total number of academic units he is enrolled in can enroll in the next term in not more than 75% of the normal academic load. Likewise, a warning shall be issued by the Program Chair/Institute Director.
        </p>
      </div>
    </div>
  </div>

  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <h1 class="card__title"> Sec. 1.b</h1>
        <p class="card__description">
        b. Student who obtains a final grade lower than 75 in 37% to 50% of the total number of academic units he is enrolled in shall be placed on probation for the next semester and shall be allowed to enroll in not more than 50% of the normal academic period.
    </p>
      </div>
    </div>
  </div>

  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <h1 class="card__title">Sec. 1.c</h1>
        <p class="card__description">
        A student who obtains a final grade lower than 75 in more than 50% of the total number of academic units enrolled shall no longer be allowed to enroll in the same course he is enrolled in. He may be allowed to shift to another course of his interest.
    </p>
      </div>
    </div>
  </div>

  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <h1 class="card__title">Sec. 2</h1>
        <p class="card__description">
        A student who obtains a final grade lower than 75 in all (100%) of the academic units shall be permanently barred from re-admission to the University.
    </p>
      </div>
    </div>
  </div>
  
<div class="spacio"></div>

<script src="registration.js"></script>
</body>
</html>
