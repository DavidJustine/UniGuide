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
    <link rel="stylesheet" href="css/mutual_aid_guidlines_nav_bar.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
  </head>
  <body class="MAG">
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
    <div class="sidenavbar" id="sidenavbar" style="display: none">
      <button class="trg-hideside" onclick="javascript:document.getElementById('sidenavbar').style.display='none';"><i class="fa fa-chevron-down"></i></button>
      <div class="sidebar-item">
        <a href="MutualAidGuidelines-MAG.php">
          <img class="sidebar-item-img" src="icons/mutual.png" alt="Image 1">
          <div class="sidebar-item-text">MUTUAL AID GUIDELINES</div>
        </a>
      </div>
      <div class="sidebar-item">
        <a href="annexes.php">
          <img class="sidebar-item-img" src="icons/annex.png" alt="Image 2">
          <div class="sidebar-item-text">ANNEXES</div>
        </a>
      </div>
    </div>
    <div class="mainc -with-mobile">
      <div class="label-on-top">
        <h2>MUTUAL AID GUIDELINES</h2>
      </div>
      <p class="section_2p">(Approved as per BOR Resolution No. 2021-615 dated May 20, 2021)</p>
      <div class="space2"></div>
      <div class="space2"></div>
      <h4 class="section_h4_2">Purpose</h4>
      <div class="space3"></div>
      <p class="section_2p">• To provide immediate financial assistance to every student in case of hospitalization, accident, and death.</p>
      <div class="space4"></div>
      <h4 class="section_h4_2">Amount to be Collected</h4>
			<div class="scrollable">
				<table class="amount-table">
					<thead style="background: #fcb900">
						<tr>
							<th>Level</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Elementary/Secondary</th>
							<th>₱100 per School year</th>
						</tr>
						<tr>
							<th>Tertiary</th>
							<th>₱50.00 per Semester</th>
						</tr>
					</tbody>
				</table>
			</div>
      <div class="space1"></div>
      <p class="letter_p">• To be collected during the enrolment and to be paid at the cashier's office</p>
      <div class="space"></div>
      <h4 class="section_h4_2">Benefits</h4>
			<div class="scrollable">
				<table>
					<thead style="background: #fcb900">
						<tr>
							<th>Case</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Death except suicide (by the beneficiary)</th>
							<th>₱30,000.00</th>
						</tr>
						<tr>
							<th>Loss of one hand, one foot or sight of one eye</th>
							<th>₱10,000.00</th>
						</tr>
						<tr>
							<th>Loss of one or more fingers</th>
							<th>₱3,500.00</th>
						</tr>
						<tr>
							<th>Injury/illness which resulted to hospitalization (max)</th>
							<th>₱7,500.00</th>
						</tr>
						<tr>
							<th>Injury/illness but there is no need for hospitalization (max)</th>
							<th>₱4,000.00 </th>
						</tr>
					</tbody>
				</table>
			</div>
      <div class="space1"></div>
      <p class="letter_p">• If two or more of the stated cases occur in a particular semester, only the
        condition with the highest benefit shall be given due merit.
      </p>
      <div class="space"></div>
      <h4 class="section_h4_2">Other Provisions</h4>
      <div class="space3"></div>
      <p class="section_p">• All benefits to be awarded shall be recommended by the CSBO Chairman, 
        CSBO Adviser, Campus Physician, and the SAS Head.
      </p>
      <p class="section_p">• All necessary documents (medical certificate, official receipts, 
        prescription) shall be appended to the written recommendation to be approved by the SAS Director.
      </p>
      <p class="section_p">• Only one claim can be made per semester by tertiary students and two 
        claims by the elementary pupils and high school students within the prescribed school year.
      </p>
      <p class="section_p">• Claims can be made until 3 months after the incident, except during the last quarter of the year.</p>
      <p class="section_p">• Claim for benefit ceases upon termination or discontinuance of studies.</p>
      <div class="space4"></div>
      <div class="two-column-container row flex">
        <div class="column">
          <h4 class="section_h4_2">Coverage</h4>
          <div class="space3"></div>
          <div class="section">
            <p class="flex_p">• Year-round (January - December)</p>
            <p class="flex_p">• Tertiary students must have paid for the 2 semesters to avail the mutual aid during the midyear term
          </div>
        </div>
        <div class="column2">
          <h4 class="section_h4_2">Pertinent Supporting Papers</h4>
          <div class="space3"></div>
          <div class="section">
            <p class="flex_p">• Death: Death certificate</p>
            <p class="flex_p">• Other cases:</p>
            <p class="flex_p2">• Medical Certificate</p>
            <p class="flex_p2">• Official Receipts</p>
            <p class="flex_p2">• Doctor's Prescription</p>
          </div>
        </div>
      </div>
      <h4 class="section_h4_2">Collection and Withdrawal of Funds</h4>
      <div class="space3"></div>
      <p class="section_p">• Collection of mutual aid fees shall be done by the respective campuses / units during enrolment.</p>
      <p class="section_p">• Since the granting of financial assistance is centralized the campus/units concerned shall remit their 
        collections to the Central Administration, under the account of the University Mutual Aid Fund.
      </p>
      <p class="section_p">• No withdrawal shall be allowed except in accordance with the purpose stipulated under the Mutual Aid 
        Fund Guidelines duly supported with the Mutual Aid Application Form.
      </p>
      <p class="section_p">• Payment of claims shall be made through regular disbursements in the form of check.</p>
      <p class="section_p">• Summary Report on claims should be submitted by the CSBO to the SAS Office every end of the semester.</p>
      <div class="space"></div>
    </div>
  </body>
</html>