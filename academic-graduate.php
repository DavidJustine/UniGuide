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
    <title>UNIGUIDE| Graduate Thesis | Capstone | Dissertation</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/register.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
    <link rel="stylesheet" href="css/academic_policy_nav_bar.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<style>
		.card__content { margin-left: 0; }
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
<div class="sidenavbar" id="sidenavbar" style="display:none;">
	<button class="trg-hideside" onclick="javascript:document.getElementById('sidenavbar').style.display='none';"><i class="fa fa-chevron-down"></i></button>
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
<div class="mainc -with-mobile">
	<div class="label-on-top">
    <h2 id="h2-grad">GRADUATE THESIS | CAPSTONE | DISSERTATION</h2>
	</div>
	<div class="cards">
		<div class="card" data-index="0">
			<div class="card__inner">
				<?php /*div class="card__image-container">
					<img class="card__image" src="???" alt="">
				</div*/ ?>
				<div class="card__content">
					<h1 class="card__title">Sec. 1</h1>
					<p class="card__description">A Thesis/Capstone for a Master of Science or a Master of Arts degree and a dissertation for a Doctorate degree shall be required for graduation.</p>
				</div>
			</div>
		</div>
		<div class="card" data-index="0">
			<div class="card__inner">
				<?php /*div class="card__image-container">
					<img class="card__image" src="???" alt="">
				</div*/ ?>
				<div class="card__content">
					<h1 class="card__title">Sec. 2</h1>
					<p class="card__description">
					Under special circumstances and upon the approval of the Dean, team research may be undertaken to satisfy the requirement of a thesis/capstone/dissertation, subject to the following conditions:
					<br/><br/>• The task of each researcher shall be clearly delineated.
					<br/>• Defined coordination, organizational structure, and objectives.
					<br/>• Master's students need Methods of Research, Statistics, and 12 major course units, while doctoral students need 27 units before defending the proposal.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--for simplicity feature was removed
<div class="spacio">&nbsp;</div>
<script src="registration.js"></script>
-->
</body>
</html>
