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
    <title>UNIGUIDE| Uniform Election Rules & Guidelines of the DMMMSU-SBO </title>
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
        <h2>UNIFORM ELECTION RULES AND/OR GUIDELINES OF THE DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY STUDENT BODY ORGANIZATION (DMMMSU-SBO)</h2>
      </div>
      <p><i>Be it resolved by the University Student Council of the Don Mariano Marcos Memorial State University assembled:</i></p>
      <h3 class="article">ARTICLE I QUALIFICATIONS AND DISQUALIFICATIONS OF OFFICERS</h3>
      <!-- START SLIDE -->
      <div class="blog-slider" id="blog-slider-22">
        <div class="blog-slider__wrp swiper-wrapper">
          <!-- First Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 1. A candidate for officership shall not have a grade of "74 or lower," and/or "INC" and/or "DRP" mark in his academic subjects for the last two (2) semesters preceding the election or appointment, except for barangay officers. A student with "INC" grade may be allowed to run for officership provided that the completion requirements were satisfied prior to the filing of candidacy. NSTP shall not be included in the determination whether or not a candidate is qualified.</div>
            </div>
          </div>
          <!-- Second Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 2. A prospective candidate who had been meted out suspension or any graver penalty by a competent authority shall be barred from filing his candidacy.</div>
            </div>
          </div>
          <!-- Thrid Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 3. A candidate shall be a bona fide undergraduate student in the campus where he is seeking for election for at least two (2) semesters immediately preceding the said election.</div>
            </div>
          </div>
          <!-- Fourth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 4. One who seeks office must have a regular load of at least 15 units; provided, that a lesser number of units shall be allowed if it is the regular load prescribed by the curriculum for the semester. Moreover, a candidate for CBSO officer may come from different colleges/institutes.</div>
            </div>
          </div>
          <!-- Fifth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 5. A first-semester graduating student shall be barred to run for office but shall be allowed to cast his vote.</div>
            </div>
          </div>
          <!-- Sixth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 6. A candidate who did not win in the election is barred to run again in any office within the academic year to give chance to other student leaders.</div>
            </div>
          </div>
        </div>
        <div class="blog-slider__pagination"></div>
      </div>
      <!-- END SLIDE -->
      <div class="space"></div>
      <h3 class="article">ARTICLE II CAMPAIGN</h3>
      <!-- START SLIDE -->
      <div class="blog-slider" id="blog-slider-23">
        <div class="blog-slider__wrp swiper-wrapper">
          <!-- First Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 1. All candidates shall be in proper or prescribed uniform and wearing a valid ID during campaign.</div>
            </div>
          </div>
          <!-- Second Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 2. The political party or group concerned, in behalf of its official candidates, shall secure a permit from the Chancellor and Campus COMELEC Chairperson to campaign.</div>
            </div>
          </div>
          <!-- Thrid Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 3. Candidates will be given the opportunity to campaign and present their platform for a given period of time. When face-to-face campaign will be possible, each political party shall be given a maximum period of 15 minutes to campaign in every classroom. This includes intermission number if any.</div>
            </div>
          </div>
          <!-- Fourth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 4. Campaign Paraphernalia <br/>a) Campaign paraphernalia shall include but not limited to posters, a short clip (which consists of the name of the party, picture of candidates, name, course and year and their advocacies), pamphlets, sample ballots, stickers and media which consists of the name of the party, picture of the candidates, name, course and year and their advocacies. The use of posters and media shall be covered by the rules in the preceding subsections. <br/>
                <br/>b) Campaign posters shall have a maximum size of 4 feet by 5 feet to be posted only in a COMELEC designated area (onsite or online).
              </div>
            </div>
          </div>
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">c) The use of mass media like social media, official web pages, and mobile texting is allowed however the following limitations shall be observed: <br/>
                <br/>  i. Derogatory remarks, malicious statements, defaming and demoralizing words against his/her fellow candidates is not allowed. <br/>
                <br/>  ii. The contents of the campaign must be limited to the position running for, credentials, platforms and experiences in leadership and public service. <br/>
                <br/>  iii. The use of media shall not violate existing laws of the land like the Cyber Crime Law and Related Crimes under the Revised Penal Code.
              </div>
            </div>
          </div>
          <!-- Fifth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 5. Mutilating, defacing, removing, or covering any campaign poster of another candidate shall be considered as an election offense.</div>
            </div>
          </div>
          <!-- Sixth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 6. Black propaganda or attack on the personal life of any candidate, virtual intimidation, cyber bullying and harassment by another candidate or party shall be banned to promote a high-level campaign; provided, that any charge proven to be based on truth or accuracy shall not be considered as black propaganda under this section, in as much as the electorate shall be clothed with the right to know about the fitness or quality of every candidate for the position he is running for.</div>
            </div>
          </div>
          <!-- Seventh Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 7. Campaign shall be limited within the premises or territorial jurisdiction of the school.</div>
            </div>
          </div>
          <!-- Eight Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 8. There shall be a campus grand rally, sponsored by the COMELEC, a day before the election.</div>
            </div>
          </div>
          <!-- Nineth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 9. There shall be no campaigning on the Election Day.</div>
            </div>
          </div>
          <!-- Tenth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 10. Any candidate or party who shall be recommended, endorsed, or sponsored by a faculty or staff member or any administration official or personnel shall be barred from electoral process.</div>
            </div>
          </div>
          <!-- Eleventh Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 11. Any candidate who shall be found guilty of deliberately violating any of the above provisions shall be summarily disqualified from running in any office.﻿</div>
            </div>
          </div>
        </div>
        <div class="blog-slider__pagination"></div>
      </div>
      <!-- END SLIDE -->
      <div class="space"></div>
      <h3 class="article">ARTICLE III VOTING</h3>
      <!-- START SLIDE -->
      <div class="blog-slider" id="blog-slider-24">
        <div class="blog-slider__wrp swiper-wrapper">
          <!-- First Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 1. Casting of votes shall start at 8:00am and ends at 3:00pm. Voting precinct shall be the classroom.</div>
            </div>
          </div>
          <!-- Second Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 2. Block or party voting shall not be permitted.</div>
            </div>
          </div>
        </div>
        <div class="blog-slider__pagination"></div>
      </div>
      <!-- END SLIDE -->
      <div class="space"></div>
      <h3 class="article">ARTICLE IV CANVASSING OF VOTES</h3>
      <!-- START SLIDE -->
      <div class="blog-slider" id="blog-slider-25">
        <div class="blog-slider__wrp swiper-wrapper">
          <!-- First Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 1. Only COMELEC members or personnel, class advisers, and class captains shall be qualified to hold and/or handle the ballots and/or ballot boxes for the counting votes.</div>
            </div>
          </div>
          <!-- Second Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 2. Only ballots bearing the registered name or names of the candidate in the certificate of candidacy shall be counted in his favor.</div>
            </div>
          </div>
          <!-- Thrid Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 3. Family or first name only shall be counted if the candidate is the sole bearer of the name in that position.</div>
            </div>
          </div>
          <!-- Fourth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 4. Minor error in the spelling of the name of the candidate shall not be a ground to consider the ballot void.</div>
            </div>
          </div>
          <!-- Fifth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 5. Mutilated, defaced or vandalized ballots shall be considered void.</div>
            </div>
          </div>
          <!-- Sixth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 6. Each party shall have at least one watcher in every precinct during the counting period.</div>
            </div>
          </div>
          <!-- Seventh Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 7. A candidate with no opponent shall garner at least 20% from the total votes casted to be declared winner.</div>
            </div>
          </div>
          <!-- Eight Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 8. In case of tie, the concerned candidates shall decide on how to break the deadlock with the guidance of the COMELEC.</div>
            </div>
          </div>
          <!-- Nineth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 9. A tally sheet shall be executed or signed by the COMELEC member or personnel, the class adviser and the class captain at the precinct level. Said tally sheet shall be delivered without delay to the college or provincial COMELEC for the certificate of canvass to be signed by the provincial COMELEC composed of department representatives. The certificates of canvass from the colleges shall be tallied for the campus official result which shall be executed by the chairman and members of the campus COMELEC.</div>
            </div>
          </div>
          <!-- Tenth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 10. Campuses can automate their SBO Elections provided that the following conditions shall be met: <br/>
                <br/>  a. An implementing rules and regulations or manual of the system shall be prepared and disseminated a month before the conduct of the election. <br/>
                <br/> b. The system shall undergo pilot testing or dry run to ensure its validity and reliability.
              </div>
            </div>
          </div>
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">c. Computers, gadgets and internet connectivity are adequate to accommodate the number of voters per precinct. <br/>
                <br/>d. Training shall be provided by the system provider or developer to the COMELEC Officers and Members and Class Captains.
              </div>
            </div>
          </div>
        </div>
        <div class="blog-slider__pagination"></div>
      </div>
      <!-- END SLIDE -->
      <div class="space"></div>
      <h3 class="article">ARTICLE V PROCLAMATION AND PROTEST</h3>
      <!-- START SLIDE -->
      <div class="blog-slider" id="blog-slider-26">
        <div class="blog-slider__wrp swiper-wrapper">
          <!-- First Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 1. Proclamation shall be done by the COMELEC 24 hours after the campus COMELEC shall have finished tallying the certificates of canvass from the colleges. Nonetheless, if a pre-proclamation protest is filed, the proclamation of the concerned candidate or candidates may be delayed depending upon the disposition of the issue or issues involved, but in no case that the resolution of the complaint or complaints go beyond twenty-four hours from the time of filing.</div>
            </div>
          </div>
          <!-- Second Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 2. Any protest concerning the result of the canvassing or counting shall be in writing with all relevant evidence appended thereon, duly signed by the aggrieved party or candidate and filed with the campus COMELEC within 24 hours after the conclusion of tally by said campus COMELEC. An anonymous complaint shall be treated as a mere scrap of paper.</div>
            </div>
          </div>
          <!-- Thrid Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 3. The campus COMELEC sitting en banc shall decide summarily and speedily on the merits of election complaints and protests, without compromising due process of all parties involved.</div>
            </div>
          </div>
          <!-- Fourth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 4. All complaints related to the election of officers filed after the proclamation of the winner or winners shall be forever barred.</div>
            </div>
          </div>
          <!-- Fifth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 5. Lawyers or attorneys-at-law shall not be allowed to intervene in COMELEC proceedings.</div>
            </div>
          </div>
        </div>
        <div class="blog-slider__pagination"></div>
      </div>
      <!-- END SLIDE -->
      <div class="space"></div>
      <h3 class="article">ARTICLE VI GENERAL PROVISIONS</h3>
      <!-- START SLIDE -->
      <div class="blog-slider" id="blog-slider-27">
        <div class="blog-slider__wrp swiper-wrapper">
          <!-- First Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 1. The campus COMELEC shall motu proprio or at the behest of the SAS Head, elect a faculty adviser or consultant who shall aid the poll body in the interpretation and implementation of these rules and guidelines for the smooth, orderly, and peaceful conduct of the balloting.</div>
            </div>
          </div>
          <!-- Second Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 2. No campus or college or department official, faculty member or non- teaching staff shall be permitted to intercede, mediate, or get involved in the elections or other official activities or proceedings of the COMELEC.</div>
            </div>
          </div>
          <!-- Thrid Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 3. These rules and guidelines shall operate to repeal or supersede all existing ones, ad hoc or otherwise, in the three campuses of the Don Mariano Marcos Memorial State University, insofar as they run counter to or contradict this instant piece of legislation.</div>
            </div>
          </div>
          <!-- Fourth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 4. Any proposed amendment to these uniform election rules and/or guidelines shall be submitted to the Executive Secretary by any voting member of the USC. The amendment proposal may come from any sector of the SBO, but it shall be sponsored by at least a voting member of the USC to be acted upon by the council.</div>
            </div>
          </div>
          <!-- Fifth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 5. It shall take a majority vote of the USC members present and voting to pass and approve any amendment to this measure.</div>
            </div>
          </div>
          <!-- Sixth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 6. Should any provision of this measure or any part thereof be declared invalid, the other provisions, so far as they are separable, shall remain enforced.</div>
            </div>
          </div>
          <!-- Seventh Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__content">
              <div class="blog-slider__text">Section 7. This measure shall be effective starting from the Student Body Organization elections of School Year 2022-2023.</div>
            </div>
          </div>
        </div>
        <div class="blog-slider__pagination"></div>
      </div>
      <!-- END SLIDE -->
      <div class="space"></div>
      <div class="space"></div>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script src="js/standards.js"></script>
    </div>
  </body>
</html>