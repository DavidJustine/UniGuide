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
    <title>UNIGUIDE| Student Affairs and Services</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/student_affair_services_nav_bar.css">
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
        <a href="sas-principle.php">
            <img class="sidebar-item-img" src="icons/principle.png" alt="Image 1">
            <div class="sidebar-item-text">Principles and Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sas-objectives.php">
            <img class="sidebar-item-img" src="icons/objective.png" alt="Image 2">
            <div class="sidebar-item-text">Objectives of the SAS Program</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sas-sas.php">
            <img class="sidebar-item-img" src="icons/affairs.png" alt="Image 2">
            <div class="sidebar-item-text">Student Affairs and Services</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>STUDENT AFFAIRS AND SERVICES<br><br></h2>
</div>

<h3>Student Affairs and Services (SAS) are the services and programs in the University that are concerned with academic support experiences of students to attain holistic student development. Academic support services include activities that relate to student welfare, student development and those that relate to institutional programs and services.</h3>
<br><br>   <p><br>1. Student Welfare Services <br><br> These are basic services and programs that promote and ensure student well-being:</p>

<!-- START SLIDE -->
<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">a. Information and Orientation Services: These are informative activities and materials designed to facilitate students' adjustment to life in tertiary/higher education as well as basic education in the university.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
            b. Guidance anf Counseling: The guidance and counseling unit aids students in reaching their full potential through self-awareness and assessment programs. It offers orientation, individual and group counseling, and utilizes peer counselors for positive student behavior.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">c. Career and Job Placement Services: The unit provides career guidance to new students, assisting them in choosing the right college program. It collaborates with various organizations, including DOLE, for pre-employment workshops and job fairs.</div>
        </div>
      </div>

      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">d. Economic Enterprise Development: The Student Affairs and Services support students' economic needs through income-generating projects, entrepreneurship, and cooperatives. Policies will be established to regulate and enhance student initiatives, aligning with their projects and causes.</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">e. Student Handbook Development: The University should periodically review and update the various provisions of the student handbook in order to cater the changes in the educational spectrum. Review should be done collaboratively by aligned units including the participation of the student body of the university.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->

  <p><br><br><br>2. Student Development Programs and Services <br><br> These are designed for the exploration, enhancement and development of the student's full potential for personal development, leadership and social responsibility through various institutional and student-initiated activities:</p>

  <!-- START SLIDE -->
<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">a. Student Government: The DMMMSU-Student Body Organization links the university administration and students for cooperation. The University Student Council governs student groups, with its President representing the SBO in the University Board of Regents.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
            b. Student Discipline: A committee on student discipline is organized at the college, campus and university levels to ensure observance the laws of the ﻿land, rules and regulations of the University and the standards of a good society. Standards of behavior befitting of a student in DMMMSU is embodied in the Revised Student Code of Discipline.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">c. Student Publication: 
        The University follows RA 7079, ensuring press freedom and fostering campus journalism's growth to enhance ethical values, critical thinking, and moral character among students. Official student publications like The Green Valley Treasure (NLUC), MLUC Voice, and Forum (SLUC) are published across the three campuses.</div>
        </div>
      </div>

      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Members of the publication staff are privileged to attend conferences, seminars, workshops to improve their journalistic skills and to compete with other student journalist from other academic institutions.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->

<p><br><br><br> 3. Institutional Student Programs and Services: <br><br>The services and programs designed to pro-actively respond to the basic health, food, shelter, and safety concerns of students including students with special needs and disabilities and the school.</p>

  <!-- START SLIDE -->
  <div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">a. Admission and Records Services: 
            The Office of Registrar offers efficient and friendly services to students for registration, scheduling conflicts, and document requests. It ensures data confidentiality and record integrity while handling Official Transcript of Records, diplomas, and certifications.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
            b. Scholarships and Financial Assistance: The unit manages scholarship applications, assesses scholar performance against benefactor criteria, and offers diverse scholarships based on intellectual, leadership, and special talents. Special programs aid economically disadvantaged students in pursuing degrees for personal and societal benefit.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">c. Food Services: 
          Snacks and meals are served in canteens/cafeterias which are supervised by the Business Affairs Office.</div>
        </div>
      </div>

      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">d. Medical and Dental Services: Each campus has a medical and dental unit for a healthy university environment. Qualified staff offer diagnostics, treatments, surgeries, and preventive activities. The unit maintains updated student medical records, conducting exams and examinations.</div>
        </div>
      </div>
    
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">e. Safety and Security Services: The University places great importance to the safety and security of the students and the entire academic environment thus, peace and order are maintained through the Office of the Director for Administrative Services.</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">f. Student Housing and Residential Services: The University is committed in bringing excellent and quality service to its stakeholders most especially to its students who would like to enjoy affordable accommodation inside the premises. Facilities like dormitories, hostels, and the like are available to cater students in the campus.</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">g. Multi-Faith Spiritual Development Services: The Spiritual Development Unit fosters a welcoming atmosphere for religious expression in line with institutional principles. Catholic masses are held by a University Chaplain across campuses, while ecumenical services cater to students of different religious denominations.</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">h. Services for Students with Special Needs and Persons with Disabilities: Services for Students with Special Needs and Persons with Disabilities are programs and activities designed to provide equal opportunities to Persons With Disabilities (PWDs), indigenous peoples, solo parent, etc. (academic accommodation for learners with special needs).</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">i. Cultural Development: Cultural organizations within the University, overseen by the Director for Cultural Affairs and campus Heads, offer platforms for cultural appreciation. Groups like dance troupes, choirs, and dramatic clubs hold auditions and allow exceptional members to partake in local, national, and global competitions.</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">j. Sports Development: 
            Sports activities, overseen by the University Sports Director and Campus Sports Heads, promote student fitness and wellness. Engagement in sports programs, leagues, and intramurals fosters camaraderie, discipline, and teamwork.</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">k. Alumni Relations: The Office of Alumni Affairs leads alumni associations and their supportive activities, coordinating events like homecoming and fundraising. It tracks alumni achievements and employment status, ensuring alignment with University programs.</div>
        </div>
      </div>
    

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<br><br><br><br><br><br>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/standards.js"></script>


</body>
</html>
