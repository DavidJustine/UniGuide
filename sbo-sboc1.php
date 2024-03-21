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
    <title>UNIGUIDE| Study Organization Constitution and By-Laws</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/student_body_organization_nav_bar.css"/>
    <link rel="stylesheet" href="css/uniguide-home.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<style>
		h3.article { margin: 0 0 16px 0; text-align: center; }
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
<div class="sidenavbar" id="sidenavbar" style="display: none;">
	<button class="trg-hideside" onclick="javascript:document.getElementById('sidenavbar').style.display='none';"><i class="fa fa-chevron-down"></i></button>
	<div class="sidebar-item">
		<a href="SBO-sboc1.php">
			<img class="sidebar-item-img" src="icons/constitution.png" alt="Image 1">
			<div class="sidebar-item-text">Student Body Organizations Constitution</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="sbo-laws.php">
			<img class="sidebar-item-img" src="icons/law.png" alt="Image 2">
			<div class="sidebar-item-text">By-Laws</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="sbo-uerg.php">
			<img class="sidebar-item-img" src="icons/elect.png" alt="Image 2">
			<div class="sidebar-item-text">Uniform Election Rules & Guidelines of the DMMMSU-SBO</div>
		</a>
	</div>
	<div class="sidebar-item">
		<a href="sbo-ethical.php">
			<img class="sidebar-item-img" src="icons/standard.png" alt="Image 2">
			<div class="sidebar-item-text">Code of Conduct & Ethical Standards</div>
		</a>
	</div>
</div>
<div class="mainc -with-mobile">
	<div class="label-on-top">
		<h2>DMMMSU STUDENT BODY ORGANIZATION CONSTITUTION</h2>
	</div>
	<h1 class="middle-title">PREAMBLE</h1>
	<p id="statement">We,  he students of the Don Mariano Marcos Memorial State University, imploring the aid of Almighty God, in order to establish a student organization that shall embody our love of democratic ideals and aspirations, promote the common good and interest in the realization of camaraderie and help uplift students welfare in the attainment of the conceived goals and mission of the University, do ordain and promulgate this Constitution.</p>
	<h3 class="article">ARTICLE I NAME AND ADDRESS OF THE ORGANIZATION</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-1">
		<div class="blog-slider__wrp swiper-wrapper">
			<!-- First Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">   
				<div class="blog-slider__content">
					<div class="blog-slider__text">Section 1. The organization shall be known as the Don Mariano Marcos Memorial State University Student Body Organization (DMMMSU-SBO), composed of the University Student Council (USC), Campus Student Body Organizations (CSBO) and the Campus Student Councils (CSC).</div>
				</div>
			</div>
			<!-- Second Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">
				<div class="blog-slider__content">
					<div class="blog-slider__text">Section 2. The DMMMSU-SBO is a non-stock, non-profit and non-sectarian organization of the students enrolled in DMMMSU.</div>
				</div>
			</div>
			<!-- Third Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
				<div class="blog-slider__content">
					<div class="blog-slider__text">Section 3. The main address and office shall be the Don Mariano Marcos Memorial State University-Central Administration, Bacnotan, La Union and there shall be sub- offices from the three (3) campuses and the OUS.</div>
				</div>
			</div>
		</div>
		<div class="blog-slider__pagination"></div>
	</div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">Article II DECLARATION OF OBJECTIVES</h3>
	<!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-2">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">     
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. The organization shall endeavour to uphold and protect students' rights and welfare.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. The organization shall uphold the ideals, dignity and prestige of the university.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. Good moral values, personal discipline, love of country, civic consciousness, efficiency in all disciplines and comprehensive knowledge of the students on the basic law with respect to citizenship shall be fostered with outmost importance.</div>
        </div>
      </div>
      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. Harmonious relationship of students and duly constituted authorities shall be observed.</div>
        </div>
      </div>
      <!-- Fifth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. The practice of democratic living and legitimate group action shall be upheld.</div>
        </div>
      </div>
      <!-- Six Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 6. The training of students as future leaders of our country shall be undertaken as a fundamental activity.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE III BILL OF RIGHTS</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-3">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. Every bona fide member of the DMMMSU-SBO shall enjoy the freedom of speech and expression subject to the limitations as may be provided by the rules and regulations of the University and the Constitution of the Philippines.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. The right to use school facilities or equipment which is of relevance to the total development of the students subject to prior approval of concerned school authorities shall never be undermined.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. Every student has the right to suggest improvement and procurement of necessary school facilities and equipment.</div>
        </div>
      </div>
      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. The right to express ideas freely through the use of school publication subject to the limitations as may be provided by the University rules and policies and the Campus Journalism Act (Republic Act No, 7079) shall never be abridged.</div>
        </div>
      </div>
      <!-- Fifth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. Members of the association shall be accorded with the right to be consulted and informed before the implementation of different programs and activities of the University together with the right of participation.</div>
        </div>
      </div>
      <!-- Sixth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 6. The right to assemble and petition for redress of grievances through just and democratic means subject to limitations provided by law shall not be impaired.</div>
        </div>
      </div>
			<!-- Seventh Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 7. The right to form or join organizations not contrary to the existing laws of the University and the country shall not be denied to any member of the association.</div>
        </div>
      </div>
			<!-- Eight Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 8. The free exercise and enjoyment of religious practice and worship, without discrimination or preference, shall forever be allowed. No religious test shall be required for the exercise of the students' rights.</div>
        </div>
      </div>
			<!-- Nineth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 9. The right of the students to be secured in their persons, papers and effects while within the University premises against unreasonable searches and seizures of whatever nature and for any purpose shall be inviolable.</div>
        </div>
      </div>
			<!-- Tenth  Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">
						<h4>Section 10.</h4>
            a. A bona fide student shall not be divested of the right of petition against an erring administration official, faculty member and/or non-teaching personnel of the University.<br/><br/>b. The right of the student to seek support and protection from the DMMMSU-SBO shall be upheld.
					</div>
        </div>
      </div>
			<!-- Eleventh Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">        
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 11. The right to be informed and the right of free access to personal and/or official records, school policies, and all such other matters directly or indirectly affecting the students shall never be impaired.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE IV MEMBERSHIP</h3>
  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-4">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">     
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. All bona fide students in the undergraduate courses or programs are members upon approval of the registration by the College Dean or Institute Director as the case may be.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">Article V THE UNIVERSITY STUDENT COUNCIL</h3>
  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-5">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. The USC shall be the supreme policy-making body of the DMMMSU-SBO.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. The USC Officers shall be the President, Vice President, the Ethical Standards Officer (ESO) and the appointed secretaries.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. In addition to the aforementioned USC Officers, the elected Regional Officers shall constitute the membership of the USC. The term membership as contemplated herein shall be taken to mean as officers with voting power.</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. The cabinet shall be composed of the Executive Secretary and the secretaries of Student Affairs and Services, Environmental Affairs, Student Information and Communications Technology, Sports and Youth Development, Budget and Finance, Health and Wellness, Ways and Means, Gender and Development, and an Audit Commissioner. In case the cabinet member is not a Regional Officer as contemplated by Section 3 herein, said appointee shall not be eligible to vote.</div>
        </div>
      </div>
			<!-- Fifth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide" id="slider-5">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. The University SAS Director and the CSBO Adviser of the campus of origin of the elected President of the USC shall, in ex-officio capacities, act as moderator and adviser, respectively. They shall study proposals adopted by the USC in line with policies of the University for endorsement to proper authorities for approval. They shall also advise the USC on matters concerning the administration and policies of the university.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE VI THE CAMPUS STUDENT BODY ORGANIZATION (CSBO)</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-6">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. There shall be a CSBO in every campus including the OUS.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. All bona fide students of the undergraduate courses or programs shall compose the CSBO in their respective campuses.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. The officers of the CSBO shall be the Regional Officers.</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. The elective Regional Officers shall be the Chairperson, Vice Chairperson, Secretary, Treasurer, Auditor, Press Relation Officer (P.R.O.), Business Manager and elected Supreme Governor.</div>
        </div>
      </div>
			<!-- Fifth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. There shall be nine (9) working committees in the CSBO, namely: a) Student Affairs and Services, b) Student Information, c) Sports and Development, d) Budget and Finance, e) Environmental Affairs, f) Ways and Means, g) Health and Wellness, h) Gender and Development, and i) Linkages, to be chaired by a Committee Head who shall be appointed by the CSBO Chairperson. In case the Committee Head is not a Regional Officer, a Provincial Governor or a Municipal Mayor, the appointee shall not be eligible to vote. In the exigency of governance, the CSBO Chairperson may form motu proprio or upon the recommendation of the CSC adhoc committee or committees.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE VII THE PROVINCIAL, MUNICIPAL AND BARANGAY OFFICERS</h3>
  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-7">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. The Provincial Officers shall be the Governor, Vice Governor, Secretary, Treasurer, Auditor, Press Relation Officer (P.R.O.), Business Manager and two (2) Peace Officers.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. A Supreme Governor shall be elected by the governors among themselves.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. The Municipal officers shall be the Mayor, Vice Mayor, Secretary, Treasurer, Auditor, Press Relation Officer (P.R.O.), Business Manager and two (2) Peace Officers.</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. The Barangay Officers shall be composed of the classroom captain, three (3) Kagawads, a Secretary, a Treasurer and an Auditor.</div>
        </div>
      </div>
			<!-- Fifth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide" id="slider-7">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. There shall be one (1) department adviser to be chosen by the Municipal Officers from among the faculty members of the department. In the same vein, the College SBO Adviser shall be elected by the Provincial Officers from the ranks of the college's faculty members. In any case, the elected faculty adviser must be with a permanent status and not one with designation to perform administrative function; provided that the prerogative to elect herein by the Municipal and Provincial Officers shall be exclusive. No prior or concurrent advisership shall be required as condition precedent for advisership under this section.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE VIII THE CAMPUS STUDENT COUNCIL</h3>
  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-8">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. There shall be a CSC in every CSBO, including OUS.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. The CSC shall be the legislative body of the CSBO, which shall be composed of the elective Regional Officers, appointed Committee Heads, Provincial Governors and Municipal Mayors.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide" id="slider-8">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. There shall be two advisers of the Regional Officers and the Campus Student Council, one to be chosen among the provincial SBO Advisers by the elective CSC Members and the other shall be the SAS Head. Any proposal to be adopted by the CSBO in line with the policies of the University shall be endorsed by the advisers to the proper authorities for approval. The term of office of the elected CSBO or CSC adviser is coterminous with the elective CSC Members.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE IX QUALIFICATIONS AND DISQUALIFICATION OF OFFICERS</h3>
  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-9">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. A candidate for officership shall have no grade of 74 and lower and/or "INC" and/or "DRP" mark in his academic subjects for the last two (2) semesters attended preceding the election or appointment, except for the barangay officers. A student with "INC" grade may be allowed to run for officership provided that he has completed the requirements prior to the filing of his candidacy. NSTP shall not be included in the determination of whether or not a candidate is qualified.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. The DMMMSU-SBO is a non-stock, non-profit and non-sectarian organization of the students enrolled in DMMMSU.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. A candidate shall be a bona fide undergraduate student in the campus where he is seeking for election for at least two (2) semesters immediately preceding the election.</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. One who seeks office must have a regular load of at least 15 units; provided, that a lesser number of units shall be allowed if it is the regular load prescribed by the curriculum in the semester.</div>
        </div>
      </div>
			<!-- Fifth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. A first semester graduating student shall be barred to run as candidate but shall be allowed to cast his vote.</div>
        </div>
      </div>
			<!-- Sixth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 6. A candidate shall be prohibited to run or be appointed for more than one post in any Barangay, Municipal, Provincial, and Regional elections in a school year.</div>
        </div>
      </div>
			<!-- Seventh Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 7. A candidate who did not win in the election is barred to run again in any office within the academic year to give chance to other student leaders.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE X COMMISION ON ELECTIONS (COMELEC)</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-10">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">     
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. The University COMELEC shall be composed of the Regional COMELEC Chairpersons and shall be elected among them. The other three (3) shall act as Commissioners.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. The Regional COMELEC shall be composed of one representative from each department of a College or Institute and a Regional COMELEC Chairperson shall be elected among them.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. The COMELEC shall adopt the Uniform Election Rules and/or Guidelines of the DMMMSU-SBO.</div>
        </div>
      </div>
      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. The COMELEC shall enforce and administer all laws relative to the conduct of election.</div>
        </div>
      </div>
      <!-- Fifth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. The COMELEC shall announce the result of the election and proclaim the official winners.</div>
        </div>
      </div>
			<!-- Six Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 6. The COMELEC shall be the sole judge of all contests relative to the election return.</div>
        </div>
      </div>
			<!-- Seventh Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 7. The COMELEC officers shall have the same qualifications as those elective CSBO Officers and shall be selected by the SAS Head and/or SAS Facilitator.</div>
        </div>
      </div>
			<!-- Eight Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">        
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 8. The USC University and the Regional COMELEC Chairs and Commissioners shall continuously hold offices unless they graduate, resign, or impeached as the case may be.</div>
        </div>
      </div>
			<!-- Nineth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 9. A COMELEC officer shall not be allowed to hold appointment or run for any post in the SBO unless he resigns from the poll body prior to said candidacy or appointment.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE XI VACANCIES AND SUCCESSION</h3>
  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-11">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. In case of permanent vacancy in the positions of the President, Regional Chairperson, Provincial Governor and Municipal Mayor due to election to higher office, refusal to assume office, disqualification, death or permanent incapacity to discharge the function of the office, the Vice President, Vice Chairperson, Vice Governor, and Vice Mayor as case may be, shall assume the unexpired term of the former.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. In case of permanent vacancy in the position of Vice President, Vice Chairperson, Vice Governor, and Vice Mayor as the case may be, a special election shall be conducted among the officers within the specific SBO level within five school days after the vacancy shall have taken place.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. In case of permanent vacancy in the posts of both President and Vice President, Chairperson and Vice Chairperson, Governor and Vice Governor, Mayor and Vice Mayor as the case may be, the Executive Secretary of the USC and the respective secretaries in the Regional, Provincial, Municipal levels shall act as pro tempore presiding officer and a special election shall be conducted within five school days after the occurrence of the vacancy.</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. In case of permanent void in other elective positions due to the abovementioned reasons, a special election shall be called promptly for the purpose of filing the same.</div>
        </div>
      </div>
			<!-- Fifth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. In the event of an elected Municipal Officer shall change his course of study during the period of his incumbency, a permanent vacancy shall be construed to have arisen from his post, and as such, the pertinent provision of Article XI shall apply. The rule shall be applicable, by analogy, to an elected provincial officer who shall shift to another college or a regional officer who shall change campus.</div>
        </div>
      </div>
			<!-- Sixth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 6. In case an incumbent officer goes out for on-the-job training, he shall file a leave of absence on or before the first day of such on-the-job training; otherwise, permanent vacancy shall be construed to have occurred and, as such, the pertinent provision of Article XI shall apply; provided, that on- the-job training is intended to be a generic term which necessarily includes practice teaching, practicum, off-campus training, and such other terms employed by DMMMSU Colleges or Institutes to denote off-University training, practice, or other activities intended towards gaining actual experience.</div>
        </div>
      </div>  
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE XII ACCOUNTABILITY OF OFFICERS</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-12">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide"> 
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. Advocating the principle of special trust and confidence, the officers of DMMMSU-SBO shall serve with the highest degree of responsibility, integrity, loyalty, and efficiency and shall be accountable to the students of the University.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. The officers of the DMMMSU-SBO, by majority vote of all regular members of the USC, be removed from office by an impeachment trial presided by the Ethical Standards Officer or ESO.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. The grounds for impeachment or recall are loss of confidence, disloyalty to the organization, culpable violation of DMMMSU-SBO Constitution and By- Laws, dishonesty, oppression, misconduct in office and neglect of duties, incompetence, grave offenses involving moral turpitude and acts of lasciviousness, abuse of authority, misuse of organization funds, culpable violation of the Constitution and By-Laws and the Code of Conduct and Ethical Standards for the Officers of the DMMMSU-SBO and unauthorized absences for 3 consecutive or 5 cumulative regular meetings and SBO activities.</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">
						<h4>Section 4. The following rules shall govern impeachment or recall proceedings:</h4><br/>
						a. The impeachment or recall proceedings against an officer/s of the municipal, provincial, or regional levels, whichever is applicable, shall be initiated by way of a written petition or resolution signed by at least twenty-five percent (25%) of the voting members of the CSC as the case may be depending upon where the office sought to be removed are incumbent and shall be addressed to the ESO. Should the member/s or otherwise the officer/s sought to be removed belong to the USC, the petition or resolution shall be signed by at least thirty (30%) of voting members of the USC.
					</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">
						b. The ESO shall then convene a USC Meeting to consider the impeachment or recall of an elected officer.<br/>
						c. The officer against whom the impeachment or recall charge has been filed shall be given ample opportunity for defense before any impeachment or recall vote is taken.</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">
						d. A DMMMSU SBO officer impeached or recalled shall ipso facto be considered resigned or ousted from office and shall no longer assume any position in the student government and student organization at any level after the impeachment.<br/>
						e. The decision of the USC on the impeachment or recall charge is final and executory once the vote is finally taken.</div>
        </div>
      </div>  
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE XIII MEETINGS</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-13">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">     
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. The DMMMSU-SBO shall have two types of meetings, namely regular and special.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. Regular meetings shall be held every month. The venues of meetings shall be designated or agreed upon during the first assembly immediately after the election of officers.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide" id="slider-8">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">
						<h4>Section 3. Special Meetings</h4><br/>
						a. Special meetings of the USC may be called upon by the USC President or at least three (3) members of the USC and/or upon the request of at least two (2) Chairpersons as the need arises.<br/>
						b. Special meetings of the CSC may be called upon by at least three members of the CSC and/or upon the discretion of the chairperson if necessity so dictates.
					</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide"> 
       <div class="blog-slider__content">
         <div class="blog-slider__text">Section 4. Appointed members of the USC and CSC shall be allowed to participate in the discussion and deliberation although they are not eligible to vote on official issues taken up by the Council.</div>
       </div>
     </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE XIV QUORUM</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-14">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">     
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. If and whenever majority of all members in good standing is not obtained, the members voting and present may move and adopt themselves as quorum by a unanimous vote; provided however that the three (3) campuses and the OUS are represented by at least one-third of the number of officers in their respective Campus Student Body Organization.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. In case there is no quorum for two (2) consecutive meetings in the USC, and the same campus caused such absence of quorum, then the next meeting shall proceed as if quorum has been obtained.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide" id="slider-8">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. In meetings of Regional, Provincial, Municipal and Barangay Officers, a majority of the officers in good standing shall constitute a quorum to transact valid business. Less than a quorum can do no more than adjourn.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">ARTICLE XV AMENDMENTS</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-15">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. Any proposed amendment to this Constitution and By-laws shall be submitted to the Executive Secretary by any voting member of the USC. The amendment proposal may come from any sector of the SBO, but it shall be sponsored by at least a voting member of the USC in order that it shall be acted upon by the Council.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. It shall take at least two-thirds vote of the USC members present and voting to pass and approve any amendment, provided there is a quorum.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide" id="slider-8">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. In case there is no quorum, the members may create a special committee to approve and pass any overture or proposition for amendment.</div>
        </div>
      </div>
			<!-- Fourth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide" id="slider-8">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. The USC, by vote of two-thirds of its members present and voting, and duly convened in a regular or special meeting, may transform itself into a constituent assembly to amend or change the Constitution and By-laws.</div>
        </div>
      </div>
			<!-- Fifth Slide for the Second Slider -->
			<div class="blog-slider__item swiper-slide" id="slider-8">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. All subsequent amendments to this Constitution and By-laws shall take effect only upon the ratification by the Campus Student Councils and Class Captains all over the University campuses in a referendum/plebiscite called for the purpose. The quantum of vote needed to ratify shall be simple majority.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
	<h3 class="article">Article XVI MISCELLENEOUS PROVISIONS</h3>
	<!-- START SLIDE -->
	<div class="blog-slider" id="blog-slider-16">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">     
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 1. Vested Rights. No right or remedy in favor of or against the DMMMSU-SBO, its members or officers nor any liability by the organization, its member or officers, shall be removed or impaired either by subsequent dissolutions of said organization or by any subsequent amendments or repeal of this Constitution and B-laws or any part thereof.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 2. Repealing Clause. Except as expressly provided by this constitution, all previous constitution of this organization or any parts thereof inconsistent with any provision of this Constitution shall be deemed repealed.</div>
        </div>
      </div>
      <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 3. Separability Provision. Should any provision of this Constitution or any part thereof be declared invalid, the other provisions, so far as they are separable, shall remain enforced.</div>
        </div>
      </div>
      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 4. Authority on Interpretation. When doubts and/or questions on the interpretation and application of this Constitution and By-laws arise, the USC shall interpret.</div>
        </div>
      </div>  
      <!-- Fifth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">  
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 5. Delimitation on Future Amendments. Future amendments to this Charter and By-laws shall be no sooner than three (3) years after the most recent amendment.</div>
        </div>
      </div>
      <!-- Sixth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide"> 
        <div class="blog-slider__content">
          <div class="blog-slider__text">Section 6. Effectivity Clause. This Constitution and By-laws or any amendment thereof shall take effect upon ratification in a general referendum/plebiscite by undergraduate students of the University who comprise the constituents or body politic of the DMMMSU SBO.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
	<!-- END SLIDE -->
	<div class="space"></div>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/standards.js"></script>
</div>
</body>
</html>
