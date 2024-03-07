<?php
session_start();

if (isset($_GET['logout'])) {
  // Unset all session variables
  $_SESSION = [];

  // Destroy the session
  session_destroy();

  // Redirect to the login page after logout
  header("Location: ../user_register.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/gameoption.css">
    <link rel="stylesheet" href="../css/uniguide-home.css">
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
            <li><a href="../uniguide-home.php">Home</a></li>
            <li><a href="../about_us.php">About Us</a></li>
            <li><a href="../courses.php">Colleges</a></li>
            <li><a href="../games/gameoptions.php">Games</a></li>
            <li><a href="../contact_us.php">Contact Us</a></li>
            <li id=exit><a href="?logout=true">Log Out</a></li>
        </ul>
    </nav>
</header>

<section class="game-bod">
    <div class="title_game">
        <h1>Interactive Mini Games</h1>
    </div>

    <div class="container-wrapper">
        <a href="quiz.html" class="container-link">
            <div class="container">
                <img src="images/quiz.png" alt="game1">
                <div class="overlay">
                    <h3>Quiz Bee</h3><br>
                    <p>Get ready for an exciting DMMMSU Mini Game Quiz Bee! Test your knowledge about DMMMSU</p>
                </div>
            </div>
        </a>
        
        <a href="match.html" class="container-link">
            <div class="container">
                <img src="images/card.png" alt="game2">
                <div class="overlay">
                    <h3>Matching Type</h3>
                    <p>Unleash your memory skills and explore about DMMMSU in exciting matching game</p>
                </div>
            </div>
        </a>

        <a href="fillin.html" class="container-link">
            <div class="container">
                <img src="images/fill.png" alt="game3">
                <div class="overlay">
                    <h3>Fill in the Blanks</h3>
                    <p> Unite in melody, test your knowledge!</p>
                </div>
            </div>
        </a>

        <a href="guess.html" class="container-link">
            <div class="container">
                <img src="images/guess.png" alt="game4">
                <div class="overlay">
                    <h3>Word Guess</h3>
                    <p>"Embark on a Word Guessing about DMMMSU! </p>
                </div>
            </div>
        </a>
    </div>
</section>
</body>
</html>
