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
    <link rel="stylesheet" href="css/student_scholarship_assistanship_nav_bar.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
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
    <h2>STUDENT ASSISTANTSHIP PROGRAM<br><br></h2>
</div>

<h3>STUDENT LOAN PROGRAM (SLP) FOR TERTIARY EDUCATION (RA 10931, Sec. 8; IRR of RA 10931, Rule V)</h3>
<br><br>   <p><br>The Student Loan Program (SLP) aims to support further the cost of tertiary education or any part or portion thereof, 
<br>a student loan program for tertiary education is hereby established for all Filipino students.</p>

<h2>Qualifications:<br><br></h2>
<p><br>All Filipino students enrolling in postsecondary programs covered in Section 30 of the IRR are eligible to avail of the
<br> SLP services, provided, that the students:</p>


<!-- START SLIDE -->
<div class="blog-slider" id="blog-assist">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">1. qualify under the existing admission and retention standards of the HEIs, or have undertaken and/or qualify under the screening/assessment procedure, 
            trade test, or skills competency Page 33 of 51 evaluation of TVIS, or qualify under any other future qualification policies that the UniFAST Board may mandate;</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          2. who availed of the loan during their post-secondary TVET or undergraduate studies may still avail of another cycle of student loan for their pursuit of their continuing studies including
           medicine and law, after they have fully paid the previously availed loans;</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">3. who have not availed of the loan program during their postsecondary TVET or undergraduate studies may avail for it to pursue their continuing studies including medicine and law;</div>
        </div>
      </div>

      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">4. who did not avail of the loan program during their post-secondary TVET or undergraduate studies may avail of the loan program for the review
            expenses for licensure examinations administered by the Professional Regulation Commission (PRC);
          </div>
        </div>
      </div>
    
      <!-- Fifth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">5. secured a Tax Identification Number from the Bureau of Internal Revenue;</div>
      </div>
    </div>

    <!-- Sixth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">6. secured a Social Security System Number from the SSS;</div>
        </div>
      </div>

    <!-- Seventh Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">7. have undergone financial counseling programs to be provided by the SLP partner;</div>
        </div>
      </div>

    <!-- Eigth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">8. have a designated guarantor (parent or guardian), if the student is availing of short-term loans.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->

  <h2><br><br><br>Benefits:</h2>

  <p>Eligible student-borrowers shall receive loan amounts approved by the SLP partner, subject to SLP guidelines and <br>policies of the SLP partner, in the case of short-term loans, or subject to SLP guidelines and policies to be formulated <br> by the UniFAST Board, in the case of long-term loans.</p>
  <p>Loan proceeds intended to pay for tuition and other school fees and for services directly provided by the HEIS <br>and TVIS shall be directly paid to these institutions. Remaining loan proceeds shall be paid directly to the <br>student- borrower in reasonable intervals.</p>
  <p>All student-borrowers shall be subject to financial counseling programs and other support programs, as deemed <br>necessary for the students.</p>

  <h2><br><br><br>Loan Procedure:</h2>

  <p>The UniFAST Board shall issue detailed guidelines on the SLP. Provided, that the UniFAST Board shall pilot-test <br>
    more than one design of both the short-term and long-term SLP to determine the most appropriate <br>
    and prudent designs for the country</p>

  <h2><br><br><br>Repayment of Long-Term Loans:</h2>

  <p>Repayment of the long-term loan amount will commence once the beneficiary secures any gainful employment with <br>
    compensation, remuneration, or earnings that reach the Compulsory Repayment Threshold (CRT), which shall be <br
    >set and periodically reviewed by the UniFAST Board. The UniFAST Board shall also formulate detailed guidelines<br>
     on the repayment procedures.</p>
  <p>Repayment shall be effected by incorporating a portion of the loan amount or a percentage thereof in the employees'<br>
    monthly Social Security System (SSS) or Government Service Insurance System (GSIS) contribution, as the case may be, <br>
    based on a reasonable schedule of repayment and interest rates as may be formulated by the UniFAST Board.<br>
    The UniFAST Board, in consultation with relevant agencies, shall formulate loan repayment guidelines for loan<br> 
    beneficiaries whose earnings are not covered by the GSIS and the SSS programs, including those of overseas Filipino <br>
    workers (OFWs), emigrants, and self-employed persons and professionals (SEPs).</p>   
   <p>Pursuant to Section 15(r) of RA No. 10687, the UniFAST Board shall develop an efficient tracking system of <br>
    Student-Borrowers of long-term loans, in addition to a system of disbursement and collection of payments, <br>
    including entering into agreements with the Bureau of Internal Revenue (BIR), GSIS, SSS, National Bureau of Investigation <br>
    (NBI), Department of Foreign Affairs (DFA), Philippine Overseas Employment Administration (POEA), Bureau of Immigration <br>
    (BI), Overseas Workers Welfare Administration (OWWA), Bangko Sentral ng Pilipinas (BSP), Bankers Association of the <br>
    Philippines (BAP), Credit Information Corporation (CIC), private and public banks and banking intermediaries, credit<br>
    information bureaus, and other government financial institutions, inclusive of investigating and checking the whereabouts <br>
    of delinquent student-borrowers, and setting up mechanisms for blacklisting of defaulting student-borrowers in application <br>
    for loans, credit cards, and other credit facilities.
   </p>       

   <h2><br><br><br>Guidlines and Policies:</h2>

   <p>The UniFAST Board, in consultation with relevant agencies, shall develop an SLP handbook, which shall contain guidelines <br>
   and policies on the determination of loanable amounts, applicable interest rates, repayment procedures, collection procedures,<br>
    tracking of student borrowers, and quality standards.</p>
    <br><br><br><br><br><br>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/standards.js"></script>

</div>
</body>
</html>
