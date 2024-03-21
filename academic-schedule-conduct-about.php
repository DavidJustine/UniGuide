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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link href="https://cdn.jsdelivr.net/npm/ress@4.0.0/dist/ress.min.css" rel="stylesheet"/>
    <title>UNIGUIDE| Schedule & Conduct of Classes</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/academic_policy_nav_bar.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"/>
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
    <h2>SCHEDULE & CONDUCT OF CLASSES<br><br></h2>
    <a href="academic-schedule-conduct.php" class="back-link"><i class="ri-arrow-left-line"></i>&nbsp;Back</a>

    <article>
        <h1>II. Schedule and Conduct Of Classes</h1>
        <!---1--->
        <h4>1. Course Scheduling</h4>
        <h3>Section 1.a</h3>
        <p>Schedule of classes in the undergraduate and graduate
            levels shall be prepared by a Committee composed of the Program Chair, Dean/Institute Director, Head of Instruction, and Registrar to be approved by the Chancellor/Executive Director. This includes the professors to teach the subjects. For the College of Graduate Studies, the professors to teach are selected by a committee composed of the VPAA as Chair, and the Director of Instruction and the concerned Dean as members and endorsed to the Office of the President for approval. It is anchored on competence and qualification.</p>
      </article>
    <article>
        <h3>Section 1.b</h3>
        <p>For the Open University System, schedule of undergraduate classes shall be prepared by a committee composed of the Program Chair, Head of Instruction, and Registrar to be approved by the Executive Director. For the graduate level, the professors to teach are selected by a committee composed of the VPAA as chair, and the Director of Instruction and the Executive Director as members, and endorsed to the Office of the President for approval. It is anchored on competence and qualification.</p>
      </article>
    <article>
        <h3>Section 2</h3>
        <p>Classes shall be conducted as per approved schedule. Any change therein shall be approved by the Chancellor/Executive Director through channels.</p>
      </article>
    <article>
        <h3>Section 3</h3>
        <p>The Program Chair, through the Dean/Institute Director, coordinates with the office of the Registrar on matters concerning classes, rooms, and workload assignments. Approval by the Chancellor/Executive Director shall be sought after which a copy of the workload shall be submitted to the Office of the VPAA within a month/week after the start of classes during the regular term/mid-year term.</p>
      </article>
    <!---2--->
    <article>
      <h4>2. Class Size</h4>
        <h3>Section 1.a</h3>
        <p>The maximum size of a regular class in the undergraduate level shall be forty-five (45) students for lecture and thirty (30) for laboratory. The regular class size in the undergraduate courses shall be a minimum of 15 and a maximum of 45 students for lecture and minimum of 10 and maximum of 30 for laboratory courses.</p>
      </article>
    <article>
      <h3>Section 1.b</h3>
        <p>For the Open University System, the minimum size of a group paced class shall be five (5) students.</p>
      </article>
    <article>
      <h3>Section 1.c</h3>
        <p>For regular Graduate level courses, the minimum size of a class shall be five (5) students while the maximum shall be twenty-five (25) students.</p>
      </article>  
    <article>
      <h3>Section 2</h3>
        <p>Class size below the minimum number shall be approved by the Chancellor/Executive Director through channels based on regular curricular offerings and the enrollment of a graduating student.
        Class size below the minimum maybe allowed if ALL the following conditions are met:<br><br> 
        a. At least one (1) of the students is graduating;<br>
        b. The enrolled students comprise the total population of the program; and<br>
        c. The subject is a regular course offering/last subject in the old
        curriculum.</p>
      </article>
    <article>
      <h3>Section 3</h3>
        <p>Whenever necessary, a program/institute/college may limit its enrollment depending on the availability of faculty, classrooms, and facilities.</p>
      </article>
    <article>
      <h3>Section 4</h3>
        <p>Splitting and/or merging of classes shall be approved by the Chancellor/Executive Director through channels.</p>
      </article>
    <article>
      <h3>Section 5</h3>
        <p>The enrolment of at least 10 students (laboratory) and 15 students (lecture) in an undergraduate program will warrant the opening of
        such.</p>
      </article>
    <!---3--->
    <article>
      <h4>3. First Day of Classes</h4>
        <h3>Section 1</h3>
        <p>On the first day of classes, faculty members shall check the names of students from the official list issued by the Registrar.</p>
      </article>
    <article>
      <h3>Section 2</h3>
        <p>Faculty members shall orient the students about the program and course outcomes, contents and requirements of the course, and explain the bases for evaluating students' performance. The students shall be provided a copy of the course syllabus/outline/guide/learning plan.</p>
      </article>
    <article>
      <h3>Section 3</h3>
        <p>Learning Tasks/Contents included in the approved learning plans/ syllabus/course guide shall be strictly implemented.</p>
      </article>  
    <article>
    <!---4--->
    <article>
      <h4>4. Meetings and Dismissal of Classes</h4>
        <h3>Section 1</h3>
        <p>Punctuality should be observed at all times in the conduct of classes. If the class should start at 8:00 A.M., the faculty should be in the classroom at exactly 8:00 A.M. Classes should be dismissed at least five (5) minutes before the end of each period to allow students to move and transfer to their next class.</p>
      </article>
    <article>
      <h3>Section 2</h3>
        <p>A 3-unit lecture class shall be conducted for 3 hours a week during the regular semester and for 9 hours a week during the midyear term. Similarly, a 3-unit laboratory course shall be conducted for 9 hours a week during the regular semester and for 27 hours a week during the midyear term.</p>
      </article>
    <article>
    <!---5--->
      <h4>5. Make-up Classes</h4>
        <h3>Section 1</h3>
        <p>Faculty members who miss their classes due to official functions and other conflicting factors shall conduct make-up activities/classes. Make-up activities/classes should be for both extra and regular teaching assignments with the approval of the program chair.</p>
      </article>
    <!---6--->
      <article>
      <h4>6. Suspension of Classes</h4>
        <h3>Section 1</h3>
        <p>Classes shall not be suspended by any faculty member without authority from the Executive Director/Chancellor/President. In emergency cases, a faculty member may call-off a class but must submit a report to the immediate supervisor.</p>
      </article>
    <article>
      <h3>Section 2</h3>
        <p>If a faculty member fails to report fifteen (15) minutes after the start of the period, any member of the class shall report the matter to the immediate supervisor who shall take appropriate action.</p>
      </article>
    <article>
      <h3>Section 3</h3>
        <p>The suspension of classes shall be based on existing rules and regulations. Classes may also be suspended by the President or LGU Executive during fortuitous events, force majeure, or other abnormal situations.</p>
      </article>
</div>

</body>
</html>
