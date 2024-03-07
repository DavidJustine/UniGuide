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
    <title>UNIGUIDE| Statement of Objectives</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ssafap.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
    <link rel="stylesheet" href="css/student_scholarship_assistanship_nav_bar.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
        <a href="ssafap-goal-objective.php">
            <img class="sidebar-item-img" src="icons/goals.png" alt="Image 1">
            <div class="sidebar-item-text">Goals and Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="ssafap-personnel.php">
            <img class="sidebar-item-img" src="icons/group.png" alt="Image 2">
            <div class="sidebar-item-text">Personnel</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="ssafap-services.php">
            <img class="sidebar-item-img" src="icons/services.png" alt="Image 2">
            <div class="sidebar-item-text">Services</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="ssafap-grants-scholarship.php">
            <img class="sidebar-item-img" src="icons/scholar.png" alt="Image 2">
            <div class="sidebar-item-text">Grants and Scholarships</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="ssafap-student-assistanship.php">
            <img class="sidebar-item-img" src="icons/assist.png" alt="Image 2">
            <div class="sidebar-item-text">Student Assistantship Program</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>GRANTS AND SCHOLARHIPS<br><br></h2>
</div>

<section id="grant">
<button id="button-scho" onclick="window.location.href='scholarship.php';">
        Get Scholarship
      </button>

<h2>1. Government-Funded</h2>
<br>
<table>
  <tbody>
    <tr>
      <th>NAME OF SCHOLARSHIP OR GRANT</th>
      <th>DESCRIPTION</th>
      <th>BENEFITS</th>
    </tr>

    <tr>
      <td>Universal Access to Quality Tertiary Education Act(RA 10931)</td>
      <td>A subsidy for tertiary education to support the cost of education.</td>
      <td>Free tuition and miscellaneous fees</td>
    </tr>

    <tr>
      <td>• Tertiary Education Subsidy (TES)2</td>
      <td>A financial assistance program whose grantees are poor but deserving students belonging to the indigent household under the National Household Targeting System for Poverty Reduction. The grantees of the program are identified among the Pantawid Pamilya Households by the DSWD and the monitoring of implementation is spearheaded by CHED.</td>
      <td>Php40,000.00 per year Stipend/ allowance</td>
    </tr>

    <tr>
      <td>• Expanded Student Grants- in-Aid Program for Poverty Alleviation (ESGPPA/CONTI NUING TES GRANTEES under TES 2)</td>
      <td>This is an act promoting universal access to quality tertiary education in SUCs, LUCs and State-run Technical and Vocational Institutions.</td>
      <td>Php20,000.00 per year Tuition, other school fees (based on national average tuition fees of SUCS) and academic and extracurricular expenses<br><br>
            Php5,000.00 per year Textbook/other learning materials<br><br>
            Php35,000.00 per year Stipend (to include food, lodging, clothing, transportation, health/ medical needs, basic school supplies and other related costs)</td>
    </tr>

    </table>

    <tr>
    
      <p>Department of Science and Technology- Science Education Insttitute Scholars(DOST-SEI)</p>
      
    </tr>

    <table>
    <tr>
      <td>Department of Science and Technology- Science Education Institute (DOST-SEI) Science and Technology (S&T) Undergraduate Scholarship</td>
      <td>A scholarship grant given to students enrolled in science, technology, engineering or mathematics courses leading to a Bachelor of Science degree. During the regular academic year</td>
      <td>1. School Fees (tuition and other fees) Php40,000.00 per academic year.<br><br>
        2.Learning Materials and/or Connectivity Allowance - Php10,000.00 per academic year.<br><br>
        3. Transportation Expenses - one actual economy class round trip per academic year from permanent residence of the scholars to the place of study outside their home province/region.
        (Reimbursement shall be made at the start and end of the academic year only)<br><br>
        4. Clothing Allowance - The cost of Physical Education uniform for the First Semester, First Year only to be released as outright grant at Php1,000.00.<br><br>
        5. Monthly Living Allowance - For the ten (10) month duration in each academic year at Php7,000.00 per month. <br><br>
        6. Group Health Accident Insurance <br><br>
        7. Graduation Allowance Php1,000 <br><br>
        8. Thesis Allowance Php10,000 <br><br><br>
        During the midyear term (if required in the curriculum)<br><br>
        1. Tuition and other fees not to exceed Php1,500.00.<br><br>
        2. Book allowance not to exceed Php500.00, actual purchase supported by official receipt<br><br>
        3. Living allowance for two (2) months.</td>
    </tr>

    <tr>
      <td>Department of Science and Technology - Science Education Institute (DOST-SEI) Junior Level Science Scholarship (JLSS)</td>
      <td>Students in their third year of college who are enrolled on courses specializing on the areas of science, technology, engineering, and mathematics.</td>
      <td>During the regular academic year <br>
        1. School Fees tuition and other fees based on Statement of Account/ Bill/ Official Receipt but not to exceed Php40,000.00 per academic year.<br><br>
        2. Book Allowance - for prescribed textbooks and essential school supplies to be released as outright grants at Php10,000.00 per academic year.<br><br>
        3. Transportation Expenses - one actual economy class round trip per academic year from permanent residence of the scholars to the place of study outside their home province/region.
        (Reimbursement shall be made at the start and end of the academic year only)<br><br>
        4. Monthly Living Allowance - For the ten (10) month duration in each academic year at Php7,000.00 per month. <br><br>
        5. Group Health Accident Insurance<br><br>
        6. Thesis Allowance - Php10,000.00 outright grant after submission of the signed approval sheet of the thesis proposal and one page abstract <br><br>
        7. Graduation Allowance - to be released to full category scholars only as outright grant during the last semester or term of the program of study.<br><br>
        During the midyear term (if required in the curriculum) <br><br>
        1. Tuition and other fees not to exceed Php1,500.00.<br><br>
        2. Book allowance not to exceed Php500.00, actual purchase supported by official receipt<br><br>
        3. Living allowance for two (2) months.
    </td>
    </tr>
</table>

    <tr>
        
      <p>CHED Student Financial Assistance Program (StuFAP)</p>
      
    </tr>

    <table>
    <tr>
      <td>CHED Scholarship Program (CSP)</td>
      <td>Academic based scholarship grant given to deserving poor but brilliant students</td>
      <td>1. Php40,000.00 for full SSP per year<br>
        2. 20000.00 for half SSP per year</td>
    </tr>

    <tr>
      <td>Tulong Dunong Program - TES (TDP)</td>
      <td>The Tulong- Dunong Program is a financial assistance grant given to students who belong to the marginalized sector in the country. Usually recommended by Local Government Units.</td>
      <td>1. Php15,000.00 per year under CHED UniFAST.

      </td>
    </tr>

    <tr>
      <td>Department of Agriculture - Agricultural Competitiveness Enhancement Fund (DA-ACEF now under CHED funding)</td>
      <td>The scholarship targets students who enroll in an Agriculture related course in order to increase the number of graduates in higher education who are trained in the areas of agriculture, forestry, fisheries, veterinary medicine education and related educational programs.<br><br></td>
      <td>During the regular academic year <br><br>
        a. Tuition and Other School Fees (before the RA10931 transition) - Php20,000.00<br><br>
        b. Stipend Php12,500 per semester<br><br>
        c. Book allowance - Php1,000.00 per semester<br><br>
        d. Thesis/ project grants (one-time grant) Php15,000.00<br><br>
        e. Practicum/ OJT allowance (one time grant) Php3,000.00<br><br>
        During the midyear term (if required in the curriculum)<br><br>
        1. Stipend Php2,500.00 per month<br><br>
        
      </td>
    </tr>

      <tr>
      <td>Bureau of Fisheries and Aquatic Resources Fisheries Scholarship Program-Fisherfolk Children EducationGrant(BFAR FSP-FCEG)</td>
      <td>A scholarship grant given to children of Fisherfolks in the country</td>
      <td>1. Monthly Stipend or book allowance Php20,000.00 per semester<br><br>
        2. Book allowance - Php2,000.00 per semester<br><br>
        3. Thesis/ special problem support - Php7,000.00<br><br>
        4. Transportation expenses for OJT cost/ Practicum support Php3,000.00<br><br>
        5. Graduation support. Php1,500.00</td>
        </tr>

    <tr>
      <td>GSIS Scholarship Program (GSP)</td>
      <td>A scholarship program funded by the Government Service Insurance System (GSIS) as part of their corporate social responsibility of helping the underprivileged but deserving individuals earn a college degree.</td>
      <td>1. Actual cost of tuition and miscellaneous fees but not to exceed Php40,000.00 per academic year, regardless of the number of terms (not to include summer classed and provided that the course is finished within the regular duration prescribed by the school for that course)<br><br>
        2. Monthly stipend of Php3,000.00.</td>
    </tr>

    <tr>
      <td>National Grid Corporation Philippines - Educational Assistance for Tertiary Edification Program (NGCP-EDUCATE)</td>
      <td>Provide scholarship to underprivileged but deserving students coming from NGCP communities</td>
      <td>1. Tuition and miscellaneous fees, laboratory and other regular academic related expenses (those under RA10931, it's called "extra-curricular expenses") - Php15,000.00 <br><br>
        2. Uniform and book allowance - Php5,000.00 per semester <br><br>
        3. Stipend Php 25,000.00 per
        semester</td>
    </tr>

    <tr>
      <td>Department of Health Midwifery Scholarship Program</td>
      <td>Qualified students enrolled in the Midwifery Course</td>
      <td>1. Book allowance Php10,000.00 per semester<br><br>
        2. Uniform allowance -Php2,500.00 per semester <br><br>
        3. Miscellaneous Allowance - Php5,500.00 per semester <br><br>
        4. Transportation allowance - Php880.00 per month<br><br>
        5. Living subsidy - Php4,500.00 per month<br><br>
        6. Lodging allowance- Php3,000.00 per month</td>
    </tr>

    <tr>
      <td>Department of Agriculture - Agricultural Training Institute Educational Assistance for the Youth: Degree Course in Agriculture and Agriculture and Biosystems Engineering (DA-ATI EASY Agri)</td>
      <td>This is a scholarship program intended to support children of small-scale farmers and fishers in the country. It aims to encourage capable and deserving youth to pursue studies and professional career in agriculture, fisheries, agricultural engineering, and other related fields, or venture in agri-entrepreneurship.</td>
      <td>1. School and registration fees - Php15,000.00 per semester <br><br>
        2. Testing/ Assessment fees- Php1,000.00<br><br>
        3. Stipend Php25,000.00 per semester<br><br>
        4. Book allowance - Php1,500.00 per semester<br><br>
        5.Lodging allowance - Php1,000.00 per month<br><br>
        6. Research allowance- Php10,000.00 (subject to approval of thesis/ research proposal)<br><br>
        7. Graduation fees not exceeding Php3, 000.00 per scholar.</td>
    </tr>

    <tr>
      <td>Overseas Workers Welfare Administration Education for Development Scholarship Program (OWWA-EDSP) OFW Dependent Scholarship Program (ODSP)</td>
      <td>A scholarship grant offered to qualified beneficiaries/ dependents of OWWA Members who belong to the top examinees of the OWWA pre- qualifying examination administered by DOST-SEI and intend to enroll in chosen baccalaureate course in any college/university within the Philippines.</td>
      <td>1. Financial assistance of PHP20,000.00 per school year</td>
    </tr>
    </table>
    <tr>
        
        <p>Municipal, Provincial and Congressional Sponsored Scholarship</p>
       
    </tr>

    <table>
    <tr>
      <td>Municipal Sponsored Scholarships:<br><br>
        • Aringay Municipal SB Scholarship <br><br>
        • Municipality of Aringay Scholarship <br><br>
        • Bagulin Tulong Sulong Program<br><br>
        • Balaoan Academic Scholar<br><br>
        • Mayor Constante Agbayani Scholarship Program (Iskolar ng Bayan Program)<br><br>
        • Municipality of Rosario Scholarship Program<br><br>
        • Municipality of Pozzurubio Scholarship Program <br><br>
        • Municipality of Sison Scholarship Program<br><br>
        • Municipality of San Manuel Pangasinan Scholarship Program<br><br><br>
        Provincial Sponsored Scholarships:<br><br>
        • BM Bacurnay Scholarship<br><br>
        • BM Frank Sibuma Scholarship<br><br>
        • La Union Educational Assistance Program (LUEASP) <br><br>
        • Provincial Scholarship Program of Pangasinan Congressional<br><br><br>
        Sponsored Scholarships:<br><br>
        • Christopher V. P. de Venecia Scholarship
      </td>
      <td>These are scholarships sponsored by various Local Government Unit in Region 1</td>
      <td>The benefits that a scholar depends on the policies and guidelines laid out by the sponsoring Local Government Unit.</td>
    </tr>
    </table>
</tbody>

    <h2>2. Private Funded Grant</h2>
<br>

<tbody>
    <table>
   
        <tr>
            <th>NAME OF GRANT</th>
            <th>DESCRIPTION</th>
            <th>BENEFITS</th>

        </tr>

    <tr>
      <td>Health, Education, Environment and Discipleship Foundation (HEED)</td>
      <td>A scholarship grant given to qualified poor, willing and capable 2nd year college students who want to finish their college level. The grant is open to students under the BSA, BSAF, BSF, BSAE, BSE and BEED programs.</td>
      <td>Php5,000.00 per semester Transportation and food allowance<br><br>
            Php3,500.00 per semester Book/Supplies/Projects/Thesis allowance<br><br>
            Php500.00 per semester Dormitory allowance</td>
    </tr>

    </table>

    <tr>
        
        <p>Municipal, Provincial and Congressional Sponsored Scholarship</p>
       
    </tr>

    <table>
    <tr>
      <td>• La Union Vibrant Women Incorporated - La Union Vibrant Scholarship <br><br>
            •SwissPhilAid Scholarship Program<br><br>
            • Benguet State University and Community Multipurpose Cooperative Scholarship Program (BSUCMPC)<br><br>
            • United Light of Pangasinan Inc. (ULOPAN) Scholarship Program
        </td>

      <td>These grants are sponsored and funded by private organizations which help to augment other educational needs of student- grantees.</td>
      <td>The benefits that a scholar depends on the policies and guidelines laid out by the sponsoring private organization.</td>
    </tr>

    </table>


</tbody>

<h2>3. Institutionally Funded Scholarships</h2>
<br>

<p>Scholarship in the University classified into:</p><br><br>
<p>A. Academic Scholarship - full of partial</p>
<p>B. Scholarship Grants - athletics, special talents, leadership, priviledges for DMMMSU personnel and/or other dependents.</p>
<br><br>

<h2>Policies and Guidelines:<br><br></h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-grant">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
                <p id="p-grant">1. Pass the admission requirements of the university.</p>
          </div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
                <p id="p-grant">2. Adhere to the retention policies of the university/ the curricular program.</p>
          </div>
        </div>
    </div>

        <!-- Third Slide for the Second Slider -->
        <div class="blog-slider__item swiper-slide">
       
            <div class="blog-slider__content">
        
              <div class="blog-slider__text">
                    <p id="p-grant">3. Must not be a recipient of any other government-funded assistance except Free Higher Education (RA 10931) unless the scholarship contract/ benefactor allows.</p>
              </div>
            </div>
        </div>

    <div class="blog-slider__pagination"></div>
</div>
        </div>
<!-- END SLIDE -->
<br><br>
<h2>Policies and Guidelines:<br><br></h2>

<h3>A. Free Higher Education</h3><br>
<h4>a. New Applicants Documentary Requirements:</h4><br>
<p>1. Photocopy of CAT result.<br>
    2. Photocopy of Junior/Senior High Card (Form 138/School Form 9)<br> 
    3. Photocopy of ALS Certificate of Rating (if ALS completer)<br>
    4. Transcript of Record (for transferees)</p>

<h4>b. Continuing Students Documentary Requirements:</h4><br>
<p>1. Certified copy of grades for the latest semester/term attended<br></p>

<h4>c. Application Procedure:</h4><br>
<p>1. Present requirements to the Campus Scholarship Office for evaluation and release of FHE Application form.<br>
    2. Accomplish application form.<br>
    3. Submit fully accomplished form to the Campus Scholarship Office and retrieve the confirmation slip to be submitted to the Program Chairperson for enrollment.<br></p>

    <br><br><br><br><br>
<h2>B. Other Scholarships (Government or Privately Funded)<br><br></h2>

<h4>a. New Applicant Documentary Requirements:</h4><br>
<p>1. Copy of Notice of Award/ Memorandum of Agreement/ Certificate of Award/ Scholarship Contract from the benefactor<br>
    2. Copy of certificate of enrollment for the present semester.<br>
    3. 1-piece 2x2" picture with nametag and white background.</p>

    <h4>b. Continuing Scholars</h4><br>
<p>1. Certified copy of grades for the latest semester/term attended <br>
    2. Copy of certificate of enrollment for the present semester.<br> 
    3. 1-piece 2x2" picture with nametag and white background.d<br></p>

    <h4>b. Continuing Scholars</h4><br>
<p>1. Present requirements to the Campus Scholarship Office for evaluation and release of Renewal form.<br>
    2. Accomplish application form.<br>
    3. Submit fully accomplished form to the Campus Scholarship Office.</p>

<h2>C. Procedure on the Release of Stipend/ Allowance<br><br></h2>
<p>The scholar secures an Allowance Release Slip (ARS) from the Campus Scholarship Office to be presented <br>
to the Campus cashier for release of allowance. ARS are only issued to scholars who have submitted a complete 
<br>set of requirements.</p>


<h2>Responsibilities of Scholars/Grantees:<br><br></h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-grant">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
                <p id="p-grant">1. A continuing scholar/grantee is required to report to the Campus Scholarship Coordinator to submit necessary<br>
                 documents (scholarship application form, certificate of grades, etc.) for monitoring, follow-up and for referral purposes.</p>
          </div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          <p id="p-grant">2. A scholar/grantee must comply in the requirements stipulated in the scholarship contract or notice of award;<br>
                 otherwise, this can be a ground for termination of scholarship/grant.</p>
          </div>
        </div>
    </div>

        <!-- Third Slide for the Second Slider -->
        <div class="blog-slider__item swiper-slide">
       
            <div class="blog-slider__content">
        
              <div class="blog-slider__text">
              <p id="p-grant">3. Any act/s by the scholar such as, but not limited to, disloyalty to the university, misconduct<br>
                     or misdemeanor or offense involving moral turpitude, and/or violation/s of any of the provisions of the student handbook.</p>
              </div>
            </div>
        </div>

        <!-- Third Slide for the Second Slider -->
        <div class="blog-slider__item swiper-slide">
       
            <div class="blog-slider__content">
        
              <div class="blog-slider__text">
              <p id="p-grant">4. Unavailability of funds specifically intended for the scholarship program.</p>
              </div>
            </div>
        </div>

    <div class="blog-slider__pagination"></div>
</div>
        </div>
<!-- END SLIDE -->
<br><br><br><br><br>
</section>
<div id=marg></div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/standards.js"></script>
  


</body>
</html>
