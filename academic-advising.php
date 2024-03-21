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
    <title>UNIGUIDE| Advising</title>
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
		<style>
		table.reset {
			margin: 0 auto;
		}
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
			<div class="sidebar-item-text">Graduate Thesis/ <br/>Capstone/<br/>Dissertation</div>
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
    <h2>ADVISING</h2>
	</div>

	<h2>ACADEMIC ADVISING</h2>
	<p><b>Section 1</b> The Principal/Program Chair assigns an academic adviser to each class or specialization group. The assigned faculty should monitor students' academic progress; act as adviser to each class or group of majors; and ensure that they live up to the University's standard of excellence.
	<br/><br/>Specifically, academic/class advisers are expected to:
	<br/><br/>• Keep an Academic Cumulative Folder (ACF) for each student;
	<br/>• Update the ACF of students every semester;
	<br/>• Post a schedule for consultation at the department's office,
	<br/>• Advise and sign the registration cards of students during enrolment;
	<br/>• Refer to SAS students who need professional guidance and counseling; and
	<br/>• Meet the advisory class on a regular basis at least once a week.
	</p>
	<p><b>Section 2</b> Faculty members must allocate at least three-hour consultation time per week or as prescribed by the Programs' PSG.</p>

	<h2>SPECIAL COMMITTEES</h2>
  <p><b>Section 1</b> A Review Committee shall be created to make a review on the assigned professors to teach for a term in the CGS/graduate level. It is composed of the VPAA as Chair, and with the Director of Instruction and CGS Dean/Graduate Program Head as members. An academic rank of at least an Associate Professor is required. <br/><br/>The committee performs the following functions:
	<br/><br/>1. Review the offerings and professors to teach in a term as prepared by the Dean, along with the Program Chair and Head of Instruction.
	<br/>2. Determine the best professors to teach a given subject based on merits, competence, and other qualifications.
	<br/>3. Indorse the reviewed program offerings and assigned professors to teach to the President for approval.
	</p>
	<p><b>Section 2</b> Graduate Admission Committee (GAC)<br/><br/>A Graduate Admission Committee shall be created to determine the admission of applicants and shall be composed of the following: </p>
	<div class="scrollable">
		<table class="reset">
			<tbody>
				<tr>
					<th>Chairman:</th>
					<td>Dean</td>
				</tr>
				<tr>
					<th>Members</td>
					<td>Program Chair Senior faculty (Any faculty who have served in the CGS for 3 years or more)</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p style="margin-top: 32px;"><b>Section 3</b> Graduate Program Committee (GPC)
	<br/><br/>&nbsp;&nbsp;3.1 For both the master's and doctorate degree programs, a GPC shall be organized for each student upon admission. The GPC shall come from the pool of professors of the University which shall be updated yearly (Article 3 Sec 2 CGS Operations Manual)
	<br/><br/>&nbsp;&nbsp;3.2 The GPC shall be composed of the following:</p>
	<div class="scrollable">
		<table class="reset">
			<tbody>
				<tr>
					<th>Master's</th>
					<th>Discipline</th>
					<th>Doctorate</th>
				</tr>

				<tr>
					<td>One</td>
					<td>Major Field</td>
					<td>Two</td>
				</tr>

				<tr>
					<td>One</td>
					<td>Foundation/Core</td>
					<td>One</td>
				</tr>

				<tr>
					<td>One</td>
					<td>Cognate</td>
					<td>One</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p><br/>A GPC member must be doctorate degree holder in the discipline or allied fields.
	<br/><br/>&nbsp;&nbsp; 3.3 Each professor is limited to a maximum of ten (10) GPC memberships of bona fide students for each term.
	<br/><br/>&nbsp;&nbsp;3.4 The GPC is in charge of monitoring and guiding the concerned graduate student in undertaking all scholastic and research activities related to the program being pursued. This includes  the conduct of the proficiency and comprehensive examinations. The physical presence of every GPC member during the interview phase shall be mandatory.
	<br/><br/>&nbsp;&nbsp;3.5 The GPC shall be responsible for the accreditation of seminars/workshops/trainings attended by the student based on approved guidelines.</p>
	<br/>
	<p>Section 4 Oral Examination Committee (OrEC)
	<br/><br/>&nbsp;&nbsp;4.1. The OrEC shall be responsible for the conduct and evaluation of the thesis/dissertation/capstone project proposal and final oral examination.
	<br/><br/>&nbsp;&nbsp;4.2. The OrEC shall be organized during the Graduate Thesis / Dissertation Seminar. Membership shall be recommended from the University Pool of Faculty (UPF) by the student and approved by the Dean.
	<br/><br/>&nbsp;&nbsp;4.3. The OrEC shall be composed of the following:</p>
	<div class="scrollable">
		<table class="reset">
			<tbody>
				<tr>
					<th>Master's Level</th>
					<th>Discipline</th>
					<th>Doctorate Level</th>
				</tr>

				<tr>
					<td>Two</td>
					<td>Major Field</td>
					<td>Two</td>
				</tr>

				<tr>
					<td>One</td>
					<td>Foundation/Core</td>
					<td>Two</td>
				</tr>

				<tr>
					<td>One</td>
					<td>Cognate</td>
					<td>One</td>
				</tr>
				<tr>
					<td>One</td>
					<td>External Evaluator</td>
					<td>One</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p><br/>&nbsp;&nbsp;4.4. The Chair of the OrEC shall be determined on a collegial basis.
	<br/><br/>&nbsp;&nbsp;4.5 An external evaluator is an authority in a field of specialization from other agencies, public or private.
	<br/><br/>&nbsp;&nbsp;4.6. A member's inability to attend an oral examination and non- submission of a written evaluation of the research will warrant a reconstitution of the OrEC membership. The OrEC member will notify the Dean of his/her inability to attend at least four (4) days before the scheduled defense. With unavoidable situation and the OrEC member submits a written evaluation of the research at least four (4) days before the oral examination, payment shall be 50% of the defense fee.
	<br/><br/>&nbsp;&nbsp;4.7. As part of the administrative responsibility, the Dean may sit during the oral examination. The Program Chair, if not member of the OREC, will sit during the oral examination.
	<br/><br/>&nbsp;&nbsp;4.8 Faculty research adviser shall be chosen on the basis of their expertise in the area of the research study and of their ability. There shall be a maximum of five (5) active advisees 	per graduate faculty.
	<br/><br/>&nbsp;&nbsp;4.9 The student in consultation with the Program Chair shall recommend at least three GPC members from which an adviser will be chosen and appointed as his/her thesis/dissertation adviser by the Dean.
	</p>
	
	<h2>THESIS | CAPSTONE | DISSERTATION ADVISER</h2>
	<p><b>Section 1</b> Faculty research advisers shall be chosen on the basis of their expertise in the area of the research study and of their availability.</p>
	<p><b>Section 2</b> The student in consultation with the Program Chair shall recommend at least three (3) GPC members from which an adviser will be chosen and appointed as his/her thesis/capstone/ dissertation adviser by the Dean.</p>
	<p><b>Section 3</b> Chairmanship in a Thesis Committee is extended to other professors in a thesis defense (not necessarily the dean or the research facilitator).</p>
	<p><b>Section 4</b> Faculty members from other colleges/campuses/unit can be considered as members of the committee. The qualified English critics from each campus shall be identified to provide their technical expertise in the research outputs of students.</p>
	<p><b>Section 5</b> The composition for a Thesis Committee in undergraduate programs are as follows:</p>
	<div class="scrollable">
		<table class="reset">
			<tbody>
				<tr>
					<td>Adviser</td>
				</tr>
				<tr>
					<td>Technical Critic</td>
				</tr>
				<tr>
					<td>Statistician</td>
				</tr>
				<tr>
					<td>Chair (specialist in the program)</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p style="margin-top: 32px;"><b>Section 6</b> Thesis fee at the undergraduate level is distributed as follows:</p>
	<div class="scrollable">
		<table class="reset">
			<tbody>
				<tr>
					<th>Adviser</th>
					<td>28%</td>
				</tr>
				<tr>
					<th>Chair, Thesis Committee</th>
					<td>18%</td>
				</tr>
				<tr>
					<th>Technical Critic / Member</th>
					<td>18%</td>
				</tr>
				<tr>
					<th>Statistician / Member</th>
					<td>18%</td>
				</tr>
				<tr>
					<th>English Critic Member</th>
					<td>18%</td>
				</tr>
				<tr>
					<th>Total</th>
					<td>100%</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h2>GUIDANCE AND COUNSELLING SERVICES</h2>
	<p><b>Section 1</b> Guidance and counselling is an inherent function of every faculty. This provides among others but not limited to services involving the assessment of students' difficulties in their studies for them to realize their full potential.</p>
	<p><b>Section 2</b> Faculty members shall make referrals to the Guidance Office on cases that cannot be resolved at their level.</p>

	<h2>ADVISING STUDENT ORGANIZATIONS</h2>
	<p><b>Section 1</b> Each student organization recognized by the institution shall have a faculty adviser. The approval of co-curricular and extra-curricular organization's adviser shall be vested on the Chancellor/OUS Executive Director through channels. <br/><br/>The faculty adviser shall:
	<br/><br/>a. Be available for consultation with club officers and members; 
	<br/>b. Attend all meetings of the organization personally or through a proxy and be responsible about the minutes of the meeting;
	<br/>c. Be well-versed with the Constitution and By-laws of the organization;
	<br/>d. Be consulted and should assist in the planning of activities, ensuring that they attain the organization's objectives;
	<br/>e. Be present or be with the students, if the organization's activity is held off-campus, or when the organization is representing the University/College;
	<br/>f. Require a parent's permission/waiver for students who join off- campus activities;
	<br/>g. Check the posters/notices/announcements of the organization before posting;
	<br/>h. Evaluate the performance of the organization in collaboration with the SAS which will be used as one of the bases for re- accreditation and for determining awards; and
	<br/>i. Act as a liaison between the organization and the University/College administration; hence, s/he can sign the organization's communications and requests for reservation of rooms and facilities.
	</p>
	<p><b>Section 2</b> Activities of organizations must be conducted only after the prior approval of the Chancellor. A calendar of activities shall be formulated at the beginning of the academic year and the adviser helps the students prepare the permits and necessary documents in pushing through with the activities. A post-activity report should be submitted five (5) days after the said activity to the SAS Office.</p>
	<p><b>Section 3</b> The adviser of a student organization may, upon accomplishing the Permit to Hold an Activity (available at the Office of the SAS), request the use of University/College facilities needed for a specific event or activity sponsored by the organization. adviser is held responsible for all the activities of the organization.</p>
	<p><b>Section 4</b> At least three (3) weeks before the end of the second semester, the faculty adviser should require and secure  a copy of the financial report of the organization. This report includes the membership fees collected, if any, the expenses incurred during all activities, the receipt and disbursement of funds, and all the funds obtained through solicitation and/or donation. The financial report should be submitted to the Office of the Chancellor through the SAS Head at least a week before the semester ends. For co-curricular organizations, a copy of the financial report shall also be submitted to the Office of the Dean/Director through the Program Chair.</p>
</div>
</body>
</html>
