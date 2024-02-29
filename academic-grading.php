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
    <title>UNIGUIDE| Grading System</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/time.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/academic_policy_nav_bar.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
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
    <h2>GRADING SYSTEM<br><br></h2>
</div>

<h2>GUIDELINES</h2>
    <p><br>Section 1 At the beginning of the semester, faculty members should inform their students on the criteria for grading. <br><br> Some aspects that can be considered for grading are: periodic examinations, term papers, projects, oral report or presentation, and class participation.
The weight allocation for each aspect is dependent on what needs to be given emphasis by the faculty.
    </p>

    <p>Section 2 Examinations are integral part of instruction and shall be
administered by the faculty member concerned in accordance with the University policies as basis for evaluating student performance. Student rating shall be in percent and must conform to the following system:
    </p>
<table>



  <thead>
    <tr>
        <th>Undergraduate</th>
        <th></th>
    </tr>
  </thead>


  <tbody>
    <tr>
      <th>Excellent</th>
      <td>96-100</td>
    </tr>

    <tr>
      <th>Very Good</td>
      <td>91-95</td>
    </tr>

    <tr>
      <th>Good</th>
      <td>86-90</td>
    </tr>

    <tr>
      <th>Satisfactory</th>
      <td>81-85</td>
    </tr>

    <tr>
      <th>Passed</th>
      <td>75-80</td>
    </tr>

    <tr>
      <th>Failure</th>
      <td>70-74</td>
    </tr>

    <tr>
      <th>Incomplete</th>
      <td>INC</td>
    </tr>

    <tr>
      <th>Dropped</th>
      <td>DRP</td>
    </tr>
  </tbody>  

  <thead>
    <tr>
        <th>Graduate (Master's/Doctorate)</th>
        <th></th>
    </tr>
  </thead>


  <tbody>
    <tr>
      <th>Excellent</th>
      <td>98-100</td>
    </tr>

    <tr>
      <th>Very Good</td>
      <td>95-97</td>
    </tr>

    <tr>
      <th>Good</th>
      <td>92-94</td>
    </tr>

    <tr>
      <th>Satisfactory</th>
      <td>89-91</td>
    </tr>

    <tr>
      <th>Passed</th>
      <td>86-88</td>
    </tr>

    <tr>
      <th>Failure</th>
      <td>85 & below</td>
    </tr>

    <tr>
      <th>Incomplete</th>
      <td>INC</td>
    </tr>

    <tr>
      <th>Dropped</th>
      <td>DRP</td>
    </tr>
    
    <tr>
      <th>In-Progress</th>
      <td>IP</td>
    </tr>
  </tbody>  

</table>

<p><br>Section 3 A faculty member is the sole authority to determine and give grades to his/her students subject to the provision of Section 2.
</p>

<p>Section 4 "INC" mark denotes a class standing which is passing throughout the term without the final examination and/or
certain requirements of the course. Completion is a special examination and/or submission of requirements within one (1)
school year; otherwise, a grade of "70" shall be automatically entered in the student's permanent records by the Registrar.
<br><br>In case of unavailability of the Professor, the Program Chair/Dean/Director shall administer the completion.
<br><br>&nbsp;&nbsp;&nbsp;Section 4.1 It is the duty of the Program Chair to follow up students with "INC" marks.
</p>

<p>Section 5 Report on Rating shall be printed in accordance with the ISO format (SAR-F015).Section 3 A faculty member is the sole authority to determine and give grades to his/her students subject to the provision of Section 2.
</p>


<h2><br><br>POLICIES ON REPORTING FAILURE AND DROPPING OF COURSES</h2>
    <p><br>Section 1 Any student may be allowed to add, change, and drop subjects on the following grounds: (a) conflict in time schedule; (b) non-completion of prerequisite/s; and (c) dissolved/cancelled subjects.
</p>
<table>
    <tbody>
    <tr>
      <th>Undergraduate</th>
      <td>Within 3 days from the start of classes</td>
    </tr>

    <tr>
      <th>DOUS</td>
      <td>Before the 2nd face-to-face meeting </td>
    </tr>

    <tr>
      <th>Graduate</th>
      <td>During the first two sessions</td>
    </tr>
</table>


<p><br>Section 2 Dropping of subject after the specified period but before the midterm examination may be allowed with the approval of the instructor/professor concerned and Program Chair/Director/Dean and acknowledged by the Registrar. A "DRP" mark shall be given to the student.    </p>

<p>Section 3 When a student drops a subject after the midterm examination with no valid and unjustifiable reason; a failing grade of 70 shall be given.</p>

 <p>Section 4 Approved policies on reporting failures and dropping of courses should be properly observed.</p>
 

 <h2><br><br>SUBMISSION OF GRADES</h2>
<p><br>Section 1 Every faculty member shall encode the grades within the specified period.</p>

<p>Section 2 The Program Chair shall maintain a file of the Midterm and Final Grades of students.</p>

<p>Section 3 Faculty members shall inform the students of their midterm grades. Final grades shall be issued to the students not later than fifteen (15) working days after the final examination/completion of training.</p>

<h2><br><br>CHANGES IN GRADES</h2>
<p><br>Section 1 No faculty member shall change any grade after the Report on Rating has been submitted to the Registrar. In exceptional cases, as when an error has been committed by a faculty member, such faculty must request in writing from the Chancellor/Executive Director to rectify the error through official channels.</p>

<h2><br><br>PENALTY FOR LATE SUBMISSION OF REPORT ON RATINGS</h2>
<p><br>Section 1 In case a faculty member fails to submit the Report on Ratings on time, his/her salary and/or overload pay shall be withheld until a clearance from the Office of the Chancellor/Executive Director, through the recommendation of the Registrar, is secured.</p>

<h2><br><br>INCOMPLETE GRADES AND GUIDE FOR COMPLETION</h2>
<p><br>Section 1 Students who fail to take the final examinations without any valid reason shall receive a failing grade for the final examination. Only students with valid reasons may receive an incomplete grade (INC) for not taking the final examinations.</p>

<h2><br><br>GUIDELINES FOR COMPLETION OF GRADES</h2>
<p><br>Section 1 To complete the requirements of the course, the student secures a Completion Form (SAR-FO17) from the Office of the Registrar with the corresponding payment of fee.</p>
<p>Section 2 The instructor/professor concerned and the Program Chair sign and submit the Completion Form with the corresponding rating to the Office of the Registrar.</p>

<h2><br><br>FAILING GRADES</h2>
<p><br>Section 1  Failing grades are given to students who do not perform satisfactorily according to standards required in the course. The instructor/professor, however, should render all possible assistance to help and encourage the student to pass the course.</p>
<p>Section 2 The To minimize student failures, the Dean/Director/Program Chair shall provide ways and means to improve students' performance.</p>

<h2><br><br>DROPPING FROM A COURSE</h2>
<p><br>Section 1  Whenever a student has been absent from his class for three consecutive meetings or five (5) cumulative meetings, the faculty concerned shall report the matter to the Program Chair/Institute Director/Dean, for formal notification of the parent or guardian. Such students shall then be referred to the Head of Student Affairs and Services for follow up.</p>
<p>Section 2 An undergraduate student who incurs absences equivalent to twenty percent (20%) of the total number of hours required in the course before the midterm examination, shall be automatically dropped. If the 20% absence is incurred after the midterm examination with a passing mark in the class standing and due to valid reasons, the faculty may drop the student. However, when such absence is incurred after the midterm examination with a failing mark for class standing, the student shall be given a failing grade.</p>
<p>Section 3 A student enrolled at the DOUS under the group-paced learning scheme is required to have a face-to-face meeting with his/her tutors at least once a month in a classroom setting. A student is dropped from the class after two (2) consecutive unexcused absences on or before the midterm examination and/or with no midterm examination. Concerned students must be notified.</p>

</body>
</html>
