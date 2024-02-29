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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Colleges</title>
  
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
  <link rel="stylesheet" href="css/courses.css">
  <link rel="stylesheet" href="css/uniguide-home.css">

</head>
<body>
  <?php include 'uniguide-navbar.php'; ?>


<section>
<div class="college-programs-title">
<img src="images/logo.png" alt="Logo">
  <h1>DMMMSU COLLEGE PROGRAMS</h1>
</div>

  <div class="swiper">
    <div class="swiper-wrapper">
    <div class="swiper-slide swiper-slide--one" style="background-image: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url('images/coe_img.jpg'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover;">
    <span>MLUC</span>
    <div class="flex-container">
        <div class="coe-info">
            <div class=main-logo>
                <h2 id="coe-heading">COE</h2>
                <img id="coe-logo" src="images/img-2.png" alt="COE Logo">
            </div>
            <div>
                <p>College of Engineering</p>
            </div>
            
        </div>
    </div>
    <div class="readmore">
        <a href="colleges/college_coe.php" class="readmore">
            <div class="courses-container">
                <div class="read"><h3>Read More</h3></div>
            </div>
        </a>
    </div>
</div>




<div class="swiper-slide swiper-slide--two" style="background-image: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url('images/cas_img.jpg'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover;">
    <span>MLUC</span>
    <div class="flex-container">
        <div class="coe-info">
            <div class="main-logo">
                <h2 id=cas-heading>CAS</h2>
                <img id="cas-logo" src="images/img-6.png" alt="CAS Logo">
            </div>
            <div>
                <p>College of Arts and Sciences</p>
            </div>
        </div>
    </div>
    <div class="readmore">
        <a href="colleges/college_cas.php" class="readmore">
            <div class="courses-container">
                <div class="read"><h3>Read More</h3></div>
            </div>
        </a>
    </div>
</div>

<div class="swiper-slide swiper-slide--three" style="background-image: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url('images/com_img.jpg'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover;">
    <span>MLUC</span>
    <div class="flex-container">
        <div class="coe-info">
            <div class="main-logo">
                <h2 id="com-heading">COM</h2>
                <img id="com-logo" src="images/img-3.png" alt="COM Logo">
            </div>
            <div>
                <p>College of Management</p>
            </div>
        </div>
    </div>
    <div class="readmore">
        <a href="colleges/college_com.php" class="readmore">
            <div class="courses-container">
                <div class="read"><h3>Read More</h3></div>
            </div>
        </a>
    </div>
</div>


<div class="swiper-slide swiper-slide--four" style="background-image: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url('images/ce_img.jpg'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover;">
    <span>MLUC</span>
    <div class="flex-container">
        <div class="coe-info">
            <div class="main-logo">
                <h2 id="ce-heading">CE</h2>
                <img id="ce-logo" src="images/img-4.png" alt="CE Logo">
            </div>
            <div>
                <p>College of Education</p>
            </div>
        </div>
    </div>
    <div class="readmore">
        <a href="colleges/college_ce.php" class="readmore">
            <div class="courses-container">
                <div class="read"><h3>Read More</h3></div>
            </div>
        </a>
    </div>
</div>


<div class="swiper-slide swiper-slide--five" style="background-image: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url('images/cit_img.jpg'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover;">
    <span>MLUC</span>
    <div class="flex-container">
        <div class="coe-info">
            <div class="main-logo">
                <h2 id="cit-heading">CIT</h2>
                <img id="cit-logo" src="images/img-1.png" alt="CIT Logo">
            </div>
            <div>
                <p>College of Information Technology</p>
            </div>
        </div>
    </div>
    <div class="readmore">
        <a href="colleges/college_cit.php" class="readmore">
            <div class="courses-container">
                <div class="read"><h3>Read More</h3></div>
            </div>
        </a>
    </div>
</div>


<div class="swiper-slide swiper-slide--six" style="background-image: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url('images/cot_img.jpg'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover;">
    <span>MLUC</span>
    <div class="flex-container">
        <div class="coe-info">
            <div class="main-logo">
                <h2 id="cot-heading">COT</h2>
                <img id="cot-logo" src="images/img-5.png" alt="COT Logo">
            </div>
            <div>
                <p>College of Technology</p>
            </div>
        </div>
    </div>
    <div class="readmore">
        <a href="colleges/college_cot.php" class="readmore">
            <div class="courses-container">
                <div class="read"><h3>Read More</h3></div>
            </div>
        </a>
    </div>
</div>

<div class="swiper-slide swiper-slide--seven" style="background-image: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url('images/icje_img.jpg'); background-repeat: no-repeat; background-position: 50% 50%; background-size: cover;">
    <span>MLUC</span>
    <div class="flex-container">
        <div class="coe-info">
            <div class="main-logo">
                <h2 id="icje-heading">ICJE</h2>
                <img id="icje-logo" src="images/img-7.png" alt="ICJE Logo">
            </div>
            <div>
                <p>Institute of Criminal Justice Education</p>
            </div>
        </div>
    </div>
    <div class="readmore">
        <a href="colleges/college_icje.php" class="readmore">
            <div class="courses-container">
                <div class="read"><h3>Read More</h3></div>
            </div>
        </a>
    </div>
</div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script>
  <script  src="js/colprog.js"></script>

</body>
</html>
