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
    <title>UNIGUIDE| Academic Honors and Awards</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/uniguide-home.css">

    <link rel="stylesheet" href="css/academic_policy_nav_bar.css">

    <style>
            p {
            margin-right: 150px;
        }
    </style>
    
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
    <h2>ACADEMIC HONORS AND AWARDS<br><br></h2>
</div>

<h2>ACADEMIC HONORS</h2>
    <p><br>Section 1 Students who completed their courses with the following Grade Point Average (GPA), computed on the basis of credits, shall graduate with honors to be inscribed in their diploma and Official Transcript of Records:
    </p>

<table>

  <thead>
    <tr>
        <th>Undergraduate Studies</th>
        <th></th>
    </tr>
  </thead>


  <tbody>
    <tr>
      <th>Summa Cum Laude</th>
      <td>98-100</td>
    </tr>

    <tr>
      <th>Magna Cum Laude</td>
      <td>95-97</td>
    </tr>

    <tr>
      <th>Cum Laude</th>
      <td>90-93</td>
    </tr>
  </tbody>  

  <thead>
    <tr>
        <th>Graduate Studies</th>
        <th></th>
    </tr>
  </thead>


  <tbody>
    <tr>
      <th>Meritisissimus</th>
      <td>100</td>
    </tr>

    <tr>
      <th>Benemeritus</td>
      <td>99</td>
    </tr>

    <tr>
      <th>Meritus</th>
      <td>98</td>
    </tr>
  </tbody> 

</table>

<h2><br><br>GUIDELINES FOR THE SELECTION OF HONOR STUDENTS</h2>
<p><br>Section 1 The GPA shall be computed within four (4) decimal digits. Rounding off shall not be allowed.</p>

<p>Section 2 No graduate student with a grade lower than 95 in all subjects in the curriculum shall be given an academic honor.    </p>

<p>Section 3 To qualify for honors, an undergraduate student shall have a grade of 86 or better in all subjects prescribed in the curriculum.</p>

 <p>Section 4 Approved policies on reporting failures and dropping of courses should be properly observed.</p>
 

 <h2><br><br>SUBMISSION OF GRADES</h2>
<p><br>Section 1 Every faculty member shall encode the grades within the specified period.</p>

<p>Section 2 The Program Chair shall maintain a file of the Midterm and Final Grades of students.</p>

<p>Section 3 Faculty members shall inform the students of their midterm grades. Final grades shall be issued to the students not later than fifteen (15) working days after the final examination/completion of training.
<br>    <br>&nbsp;&nbsp;Section 3.1 NSTP grade is not included in the computation of the GPA (IRR RA 9163).</p>

<p>Section 4 The determination of honor students in the basic education level shall be based on existing university rules and regulations.</p>

<p>Section 5 Candidates for graduation with honors must have completed at least 75% of the total number of academic credits required in the curriculum of the University.</p>

<p>Section 6 Students who are candidates for graduation with honors must have taken the regular semestral load.</p>

<p>Section 7 All validated credits earned from other schools shall be included in the computation of the GPA within the allowable residency period inclusive of the required study load for each term.</p>

<p>Section 8 Candidates for graduation with honors must have completed the degree program within the minimum prescribed period inclusive of his/her residency in other universities, irrespective of the course/s s/he enrolled.</p>

<p>Section 9 Students with failure, including validation/dropped and/or incomplete marks, are disqualified for honors. Shifters or transferees who incurred failing grades, dropped, or INC marks from previous degree programs are also disqualified for honors.</p>


<h2><br><br>STUDENT AWARDS</h2>
<p><br>Section 1 The University holds the Annual Recognition Program for students before the end of the school year. A committee shall be created by the University President to set guidelines. Membership of the committee includes the Deans/Directors, Program Chairs, SAS Head, with the Chancellor as Chairman.
<br><br>The awards to be given are categorized as: scholastic; special; leadership; and students' organizations.</p>

</body>
</html>
