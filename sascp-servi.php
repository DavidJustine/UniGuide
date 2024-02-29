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
    <title>UNIGUIDE| Continuity Plan for Student Services</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/student_affair_services_con_plan_nav_bar.css">
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
        <a href="sascp-ratio.php">
            <img class="sidebar-item-img" src="icons/rationale.png" alt="Image 1">
            <div class="sidebar-item-text">Rationale</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sascp-obj.php">
            <img class="sidebar-item-img" src="icons/statement.png" alt="Image 2">
            <div class="sidebar-item-text">Statement of Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sascp-perso.php">
            <img class="sidebar-item-img" src="icons/personnel.png" alt="Image 2">
            <div class="sidebar-item-text">Personnel Involved</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="sascp-servi.php">
            <img class="sidebar-item-img" src="icons/continuity.png" alt="Image 2">
            <div class="sidebar-item-text">Continuity Plan for Student Services</div>
        </a>
    </div>

</div>

<div class="timeline">
    <h2>CONTINUITY PLAN FOR STUDENT SERVICES<br><br></h2>
</div>

<p>The delivery of various student services will be done via on-campus and online mode. On-Campus Access means that the service can be availed by the students during their once a month face-to-face meeting in the campuses or upon appointment schedule. Online Access means that the service can be used by students via the Internet and engagement is done through email, Facebook Messenger, or video conferencing applications like Google Meet, Zoom, Microsoft Teams or Facebook Messenger.
</p>

<h2>1 Student Welfare Services</h2>
<br>
<p>A. Information and Orientation Services</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Information and Orientation Services</td>
      <td>Printed information and orientation materials such as brochures, handouts, orientation packet, etc. to students are available.</td>
      <td>Soft copy of materials can be downloaded and accessed via the University website (Campus SAS and FB pages).</td>
      <td>Hard and soft copies are available in the SAS Office and in the University website.</td>
    </tr>

</table>

<br>
<p>B. Guidance and Counseling Services</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Individual Inventory</td>
      <td>An individual inventory form is issued by the college Guidance Counselor to students to accomplish.</td>
      <td>The Google Form link for the individual inventory is provided to students.</td>
      <td>Digitalization of the service. The Individual Inventory Record of each student is digitized.</td>
    </tr>

    <tr>
      <td>2</td>
      <td>Counseling & Consultation</td>
      <td>(The student will go to their respective Guidance Counselor for counseling.) <br><br>Visit to the Guidance Office for Counseling and other services are on appointment basis. <br><br>Minimum health standard will be observed in the Guidance Office (during counseling sessions.) <br><br>Remote psychological first aid; tele-mental health through mobile phone is conducted.</td>
      <td>Online Consultation, telecounseling is conducted by registered guidance counselors. <br><br>Remote psychological first aid; tele-mental health through mobile phone is conducted. <br><br>Conduct series of webinars for mental health and wellness using secured digital platforms.</td>
      <td>Online consultation may be scheduled with the College Counselor. <br><br>Policies or provisions on the collection of personal information must conform with Data Privacy Act.</td>
    </tr>

    <tr>
      <td>3</td>
      <td>Referral</td>
      <td>(Teacher and Peer) Referral forms are available at the Guidance Office. The referral may be submitted in a Drop Box located outside the office of the Guidance Counselor. <br><br>After careful assessment when case is beyond the expertise of the Counselor, necessary referrals will be made (i.e. School Physician, Psychologist)</td>
      <td>Referral is available through Google Form. <br><br>Help Lines for Referrals via SMS, Facebook Pages and Messenger are available.</td>
      <td>In order to ensure the reliability of the referral, vital information must be gathered in the Google Form. <br><br>Policies or provisions on the collection of personal information must conform with Data Privacy Act.</td>
    </tr>
    
    <tr>
      <td>4</td>
      <td>Appraisal: Suggested instrument: Penn University's CCAPS</td>
      <td>Questionnaire is floated by the Guidance Counselors during the last Face-to-Face meeting. <br><br>Students submit the accomplished form in the Drop Box located outside the Office of the Guidance Counselor.</td>
      <td>Create a Google Form for students to access the questionnaire. <br><br>Google Form link should be shared by the concerned Guidance Counselor to the concerned enrolled students.</td>
      <td>Students' official DMMMSU email address, Facebook Pages, contact numbers must be updated.</td>
    </tr>

    <tr>
      <td>5</td>
      <td>Routine Interview & Follow Up</td>
      <td>Counselor schedules face-to-face routine follow up interview.</td>
      <td>Reffered students are scheduled for Routine Interview via telephone or video call. <br><br>Students whose appraisal results indicate "red flags" will be followed up.</td>
      <td>Students' official DMMMSU email address, Facebook Pages, contact numbers must be updated.</td>
    </tr>

    <tr>
      <td>6</td>
      <td>College Admission Test</td>
      <td>Walk-In Applicants can submit their application for admission in the Drop Box located at the conspicuous places in the campuses.</td>
      <td>A Google Form was created to cater online applications.</td>
      <td>This mechanism was implemented last March 8, 2021 to June 30, 2021. <br><br>Screening of applicants was done through Interview via phone call. Applicants were notified via SMS and email.</td>
    </tr>
</table>

<br>
<p>C. Career and Job Placement Services</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Provide assistance and information to students in relation to career planning and in their educational and occupational exploration</td>
      <td>Brochures, and other printed materials on various possible job opportunities, tips on finding jobs, resume making and the like can be made available at the SAS Offices. <br><br>Establish the DMMMSU Trabaho Center.</td>
      <td>Conduct virtual fairs in cooperation with DOLE and other agencies. Establish the DMMMSU Trabaho Center. Conduct of webinars on personality development, resume writing, labor rights and conduct of virtual career fairs. </td>
      <td>The Personnel In-Charge of the Career & Job Placement can spearhead these activities in coordination with the different units in the University and other government agencies.</td>
    </tr>
</table>

<br>
<p>D. Economic Enterprise Development</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
      <td>1</td>
     <td>Can be but not limited to student cooperatives, entrepreneurial and income-generating projects and savings.</td>
     <td>Printed materials on topics like financial literacy, entrepreneurship and others will be made available for the students in hard and soft copies.</td>
     <td>Conduct of online activities like webinars and make available the materials through the website, social media, etc. </td>
     <td>This is usually done and organized by the student body organizations in the Colleges.</td>
    </tr>
</table>

<br>
<p>E. Student Handbook Development</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
     <td>1</td>
     <td>Review and revision of the student handbook</td>
     <td>Develop leaflets or brochures of the Student Handbook. <br><br>Provide hard copies of the New Student Code of Discipline to students. <br><br>Make hard copies accessible and available at the Campus Main Library, eLearning Resource Centers, Guidance Counselors offices, Student Body Organization Offices, and SAS officers.</td>
     <td>Develop an infographic of the content of the Student Handbook. <br><br>Make available an online copy of the Student Handbook through Google Sites and the University website.</td>
     <td>Digitize the Student Handbook which can be used for on-campus and online access. <br><br>Students' email, Facebook Account Names, contact numbers must be collected.</td>
    </tr>
</table>
<br><br><br>

<h2>2 Student Development</h2>
<br>
<p>A. Student Organization and Activities</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
     <td>1</td>
     <td>Accreditation of Student Organization</td>
     <td>Applicants must submit their application form and supporting documents at the Office of the Student Affairs and Services.</td>
     <td>Applicants must apply online through Google Forms and upload their supporting documents to the portal. <br><br>Student organizations conduct approved online activities.</td>
     <td>The signing of documents from their respective college may be done by the College Student Body Organization.</td>
    </tr>
</table>

<p>B. Leadership Training</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
     <td>1</td>
     <td>Conduct of programs and provision of opportunities to develop and enhance the leadership capabilities of the students on the personal and organizational level during the new normal.</td>
     <td>Provide printed materials on leadership training modules.</td>
     <td>Organize webinars on leadership trainings, provide online resources and allow students to participate as official representatives in online seminar-workshops as approved by proper authorities.</td>
     <td>USC Officers and Adviser and CSBO Officers and Advisers can also look for webinars and other online activities that they can participate in.</td>
    </tr>
</table>

<p>C. Student Council and Government</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
     <td>1</td>
     <td>Election of Officers</td>
     <td>Students may submit their votes through ballot boxes.</td>
     <td>Students vote through online mode using Google Form or a custom-made computer program.</td>
     <td>Vital student information must be recorded to ensure reliability of results through their official DMMMSU email accounts.</td>
    </tr>

    <tr>
     <td>2</td>
     <td>Induction of Officers of Student Body Organization and Student Organizations</td>
     <td>The Office of the Student Affairs will issue a Certificate of Recognition to organization's advisers. <br><br>University Student Council (USC) officers are elected and inducted in a face-to-face meeting observing minimum health standards.</td>
     <td>Induction ceremony may be done through video conferencing spearheaded by the Office of the Student Affairs.</td>
     <td>The induction of organizations may be streamed live in the official Facebook page of the university.</td>
    </tr>

</table>

</body>
</html>
