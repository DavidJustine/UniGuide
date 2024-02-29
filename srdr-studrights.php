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
    <title>UNIGUIDE| Academic Policies</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="css/student_rights_duties_nav_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
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
        <a href="srdr-studrights.php">
            <img class="sidebar-item-img" src="icons/rights.png" alt="Image 1">
            <div class="sidebar-item-text">STUDENTS' RIGHTS</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="srdr-studduties.php">
            <img class="sidebar-item-img" src="icons/duty.png" alt="Image 2">
            <div class="sidebar-item-text">STUDENTS' DUTIES & RESPONSIBILITIES</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2 id="h2-rights">STUDENTS' RIGHTS<br><br><br></h2>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to receive, primarily through competent instruction, relevant quality education in line with national goals and conducive to the full development as person with dignity.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/1.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/2.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to choose freely their field of study subject to existing curricula and continue their course they are in up to graduation, except in cases of academic deficiency or violation of disciplinary regulations.</p>
    </div>
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to school guidance and counselling services for making decisions and selecting the alternatives in fields or work suited to their potentials.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/3.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/4.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to access to his own records, the confidentiality which the school shall maintain and preserve.</p>
    </div>
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to be issued official certificates, diplomas, transcripts of records, grades, transfer credentials and other similar documents within 30 days from the date of request.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/5.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/6.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align"> The right to publish student publications in line with approved policies and guidelines and to invite university/college accredited resource speakers during approved assemblies symposia and other student activities.</p>
    </div>  
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to expression of opinions and suggestions and to effective channels of communications with appropriate academic and administrative bodies of the University.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/7.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/8.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to form, establish, join, and participate in organizations/associations/ societies recognized by the school to foster their intellectual, cultural, spiritual and physical growth and development and for purposes not contrary to law.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to be free from involuntary contributions except those approved by their organizations/associations or prescribed by higher authorities.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/9.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/10.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to be informed of policies affecting he school in relation to region in particular and the country in general, through authorized representation in councils or committees as may be allowed by the Board.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to receive reasonable protection within the school premises.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/11.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/12.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to be informed of the rules and regulations affecting them.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to participate in curricular and co-curricular activities.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/13.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/14.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to due process of law.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to be assisted by the school through current and adequate information on work opportunities.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/15.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/16.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to receive medical and dental services as well as first aid services in case of emergency.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">Students have the right of freedom of speech, expression and assembly, for as long as the exercise is peaceful and it does not interfere with, obstruct or disrupt the operation of the University and does not violate the rights of others in accordance with existing laws.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/17.jpg" alt="Image Description">
        </div>
    </div>  
</div>


</div>



</body>
</html>
