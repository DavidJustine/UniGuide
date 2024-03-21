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
    <title>UNIGUIDE| Academic Policies</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/student_code_of_descipline_nav_bar.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
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
<div class="sidenavbar" id="sidenavbar" style="display: none;">
	<button class="trg-hideside" onclick="javascript:document.getElementById('sidenavbar').style.display='none';"><i class="fa fa-chevron-down"></i></button>
	<div class="sidebar-item">
		<a href="scod-offense-penal.php">
			<img class="sidebar-item-img" src="icons/penalty.png" alt="Image 1">
			<div class="sidebar-item-text">Offenses and Penalties</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="scod-offense-penal_A1.php">
			<img class="sidebar-item-img" src="icons/rules.png" alt="Image 2">
			<div class="sidebar-item-text">Article 1.<br> Rules and Regulations on Student Conduct & Discipline</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="scod-offense-penal_A2.php">
			<img class="sidebar-item-img" src="icons/committee.png" alt="Image 2">
			<div class="sidebar-item-text">Article 2. Committees and Proceedings</div>
		</a>
	</div>
</div>
<div class="mainc -with-mobile">
	<div class="label-on-top">
		<h2>ARTICLE II. COMMITTEES AND PROCEEDINGS</h2>
	</div>
	<div class="space1"></div>
	<h3 class="section_h3">Section 1. Student Discipline Committees</h3>
	<p class="section_p">The Student Discipline Committees shall be formed at the start of the school year. The designation of all members shall cover a period of one (1) year. In case the student leaders (Governor, Mayor, and Captain) are parties of the case, the rule of succession shall apply.</p>
	<h4 class="section_h4">A. Perliminary Investigation Committee (PIC)</h4>
	<div class="scrollable">
		<table>
			<tbody>
				<tr>
					<th>Chairpersons:</th>
					<th>Members:</th>
				</tr>
				<tr>
					<td>SAS Head</td>
					<td>CSBO Vice Chair<br>CSBO Adviser</td>
				</tr>
			</tbody>
		</table>
	</div>
  <div class="space1"></div>
	<h4 class="section_h4">B. Department Committee (DC)</h4>
	<div class="scrollable">
		<table>
			<tbody>
				<tr>
					<th>Chairpersons:</th>
					<th>Members:</th>
				</tr>
				<tr>
					<td>Department Chairperson</td>
					<td id="long_td">Municipal SBO Adviser Two(2)Student Leaders (The SBO Municipal Mayor and the Classroom Captain(s) of the student(s) who commmitted the offense)</td>
				</tr>
			</tbody>
		</table>
	</div>
  <div class="space1"></div>
  <h4 class="section_h4">C. College/Institute Committee (Co/IC)</h4>
	<div class="scrollable">
		<table>
			<tbody>
				<tr>
					<th>Chairpersons:</th>
					<th>Members:</th>
				</tr>
				<tr>
					<td>Dean/Director</td>
					<td id="long_td">College SBO Adviser<br>Two(2)Student Leaders (The SBO Municipal Mayor and <br>the Classroom Captain(s) of the student(s) who commmitted the offense)</td>
				</tr>
			</tbody>
		</table>
	</div>
  <div class="space1"></div>
  <h4 class="section_h4">D. Campus Committee (CC)</h4>
  <p class="section_p">CC shall be formed in all campuses, and it shall be under the general supervision of the SAS Head.</p>
	<div class="scrollable">
		<table>
			<tbody>
				<tr>
				<th>Chairpersons:</th>
				<th>Co-chair</th>
				<th>Members:</th>
				</tr>
				<tr>
				<td>Campus Student Discipline In-Charge</td>
				<td>SBO Head</td>
				<td id="long_td">Two (2) Faculty Members (or a Faculty Member and a Staff preferably with legal background) Two (2) student leaders, the CSBO Regional Chairperson 
						and SBO Governor of the student who committed the offense. However if there are two (2) or more student respondents and they belong to different colleges, 
						their SBO Governors shall become members of the committee Dean/Institute Director of the student(s) involved.</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="space1"></div>
	<h4 class="section_h4">E. University Committee (UC)</h4>
	<div class="scrollable">
		<table>
			<tbody>
				<tr>
					<th>Chairpersons:</th>
					<th>Members:</th>
				</tr>
				<tr>
				<td>SAS Director</td>
					<td id="long_td"> In-Charge, Campus Student Discipline Committee<br>USC President<br>SAS Heads<br>USC Adviser</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="space1"></div>
  <h3 class="section_h3">Section 2. Jurisdiction</h3>
  <p class="section_p">All cases involving discipline of students under these rules shall be subject to the jurisdiction of the DC, CoC/IC, CC or UC depending on the degree or circumstances of the offense or the frequency the offense is committed.</p>      
  <div class="flex-container">
		<div class="flex-column">
				<div class="space1"></div>
				<h3>2.1 Department</h3>
				<div class="space3"></div>
				<p class="letter_p2">a. Reprimand</p>
				<p class="letter_p2">b. First offense as applicable</p>
				<p class="letter_p2">c. Students involved belong to the same department</p>
		</div>

		<div class="flex-column">
				<div class="space2"></div>
				<h3>2.2 College/Institute Committee</h3>
				<div class="space3"></div>
				<p class="letter_p2">a. Reprimand</p>
				<p class="letter_p2">b. First offense as applicable</p>
				<p class="letter_p2">c. Students involved belong to different departments in the College/Institute</p>
		</div>

		<div class="flex-column">
				<div class="space2"></div>
				<h3>2.3 Another Section</h3>
				<div class="space3"></div>
				<p class="letter_p2">a. Offenses with a penalty of more than one-week suspension</p>
				<p class="letter_p">b. Special cases</p>
				<p class="letter_p2">c. 2nd, 3rd offenses</p>
				<p class="letter_p2">d. Students involved belong to different Colleges/Institutes</p>
		</div>

		<div class="flex-column">
				<div class="space2"></div>
				<h3>2.4 University Committee</h3>
				<div class="space3"></div>
				<p class="letter_p2">a. Student(s) involved belong to different campuses.</p>
				<p class="letter_p2">b. The findings and recommendations of this Committee will be forwarded to the University President for appropriate action.</p>
		</div>
	</div>
	<div class="space2"></div>
  <h3 class="section_h3">Section 3. Filing of Charges</h3>
  <div class="space1"></div>
  <div class="row flex">
    <div class="column column-left">
			<p class="left-align">1. All complaints and violations involving discipline of students shall be filed in writing at the Office of the Chancellor through the Student Affairs and Services (SAS).</p>
    </div>
    <div class="column column-right">
			<div class="video-container">
				<img src="images/scod_sas.png" alt="SCOD_sas" class="smaller-image">
			</div>
    </div>
  </div>
  <div class="space3"></div>
	<div class="row flex">
    <div class="column column-left">
      <p class="left-align">2. The SAS Head shall notify the student concerned of the complaint filed against him, providing a copy of the same  with specific instruction to submit a written reply within 72 hours or three (3) days upon receipt thereof. If the third day falls on a Saturday, Sunday or holiday, the same shall be submitted the next immediate school day.</p>
		</div>
    <div class="column column-right">
			<div class="video-container">
        <img src="images/scod_sas2.png" alt="SCOD_sas2" class="smaller-image">
			</div>
    </div>
	</div>
	<div class="space3"></div>
	<div class="row flex">
    <div class="column column-left">
      <p class="left-align">3. The SAS Head notifies the Preliminary Investigation Committee (PIC) to evaluate the merits of the written complaints or reported violations. If necessary, or upon the request of the student/s being complained of, the Committee may summon both parties for possible mediation.</p>
		</div>
    <div class="column column-right">
			<div class="video-container">
				<img src="images/scod_sas3.png" alt="SCOD_sas3" class="smaller-image">
			</div>
    </div> 
  </div>
  <div class="space3"></div>
  <div class="row flex">
    <div class="column column-left">
			<p class="left-align">4. The report of the Committee shall be submitted to the Office of the Chancellor within 2 days. Should a probable cause exist, the PIC recommends that a formal charge be issued by the Chancellor. Otherwise, the case shall be dismissed.</p>
		</div>
    <div class="column column-right">
			<div class="video-container">
				<img src="images/scod_sas4.png" alt="SCOD_sas4" class="smaller-image">
			</div>
    </div> 
  </div>
	<div class="space3"></div>
	<div class="row flex">
		<div class="column column-left">
			<p class="left-align">5. The Chancellor shall notify the student of the formal charge filed against him, providing a copy of the same with specific instruction to submit a written reply within 72 hours or three (3) days upon receipt thereof.</p>
		</div>
		<div class="column column-right">
			<div class="video-container">
				<img src="images/scod_sas5.png" alt="SCOD_sas5" class="smaller-image">
			</div>
		</div>  
	</div>
  <div class="space3"></div>
	<div class="row flex">
		<div class="column column-left">
			<p class="left-align">6. The Chancellor shall then refer the matter to the Committee with appropriate jurisdiction.</p>
		</div>
		<div class="column column-right">
			<div class="video-container">
				<img src="images/scod_sas6.png" alt="SCOD_sas6" class="smaller-image">
			</div>
		</div>
	</div>
	<div class="space1"></div>
	<h3 class="section_h3">Section 4. Admission of Guilt</h3>
	<p class="section_indent">If the respondent admits his guilt, the Committee recommends the corresponding penalty to the Chancellor who implements the decision. However, the Chancellor or the President as the case may be, has the authority to amend, modify or nullify the penalty as recommended.</p>
  <div class="space1"></div>
  <h3 class="section_h3">Section 5. Trial</h3>
	<p class="section_indent">If the respondent does not admit his guilt, trial of the case by either the DC/COC/IC/CC/ UC shall commence. The DC/Co/IC shall resolve the case in three (3) days and the CC/UC in five (5) days after receipt of the written answer by the Committee Chairperson.</p>
  <p class="section_indent"><span>Summary Procedure.</span>This scheme is being followed to expedite the resolution of cases without sacrificing due process as provided by the law wherein notice and hearing are afforded to both parties. Recommended penalties by the Student Discipline Committee shall be implemented by the Chancellor, although the latter is authorized to modify the penalty before its implementation.</p>
  <div class="space1"></div>
  <h3 class="section_h3">Sec. 6. Finality of Decision</h3>
  <p class="section_indent">The penalty as recommended by the DC or CC with the approval of the Chancellor, or the UC recommendation with the approval of the President other than dismissal from the University or suspension for 30 or more calendar days is non- appealable and shall immediately become final and executory.</p>
  <div class="space1"></div>
  <h3 class="section_h3">Sec. 7. Appeal</h3>
  <p class="section_indent">Only cases of dismissal from the University or suspension for more than 30 calendar days may be given cognizance for reconsideration or appeal. All pleadings to this effect shall be filed with the Office of the President within 15 days from receipt of the decision. Otherwise, the decision becomes final and executory.</p>
  <div class="space1"></div>
  <h3>ARTICLE IV. AMENDMENTS AND EFFECTIVITY</h3>
  <div class="space1"></div>
	<div class="flex-container ammendments">
		<div class="flex-column">
				<div class="space1"></div>
				<h3>Section 1</h3>
				<div class="space3"></div>
				<p class="letter_p">Except for matters especially provided by law, any provision in this Code may be amended at any regular meeting of the University Academic Council.</p>
		</div>
		<div class="flex-column">
				<div class="space1"></div>
				<h3>Section 2</h3>
				<div class="space3"></div>
				<p class="letter_p"> This Code shall take effect 15 days after the approval by the Board of Regents with which proper dissemination shall be effected.</p>
		</div>
	</div>
  <div class="space1"></div>
	<h3 class="toupper">Revised Student Code of Discipline Review Team</h3>
	<div class="space3"></div>
	<div class="scrollable">
		<table border="1">
			<tr>
				<td>VP for Academic Affairs </td>
				<td>Dr. Honorio C. Buccat </td>
			</tr>
			<tr>
				<td>SAS Director</td>
				<td>Dr. Shalimar L. Navalta </td>
			</tr>
			<tr>
				<td>SAS Head (SLUC)</td>
				<td>Prof. Jo Ann P. Rulla</td>
			</tr>
			<tr>
				<td>SAS Head (MLUC)</td>
				<td>Dr. Bernardo D. Lamadrid</td>
			</tr>
			<tr>
				<td>SAS Head (NLUC)</td>
				<td>Dr. Merlyn M. Aguinaldo</td>
			</tr>
			<tr>
				<td>SAS Head (NLUC)</td>
				<td>Dr. Merlyn M. Aguinaldo</td>
			</tr>
			<tr>
				<td>USC Adviser</td>
				<td>Dr. Joel C. Agullo</td>
			</tr>
			<tr>
				<td>USC President </td>
				<td>Mr. Daryl John A. Alminiana </td>
			</tr>
			<tr>
				<td>Supreme Governor</td>
				<td>Mr. Bryan Paul O. Valmonte</td>
			</tr>
		</table>
	</div>
	<div class="space1"></div>
	<p class="letter_p">Revision Date: March 26,2021</p>
  <div class="space1"></div>
</div>
</body>
</html>
 