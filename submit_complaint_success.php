<?php
session_start();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/basiclightbox/dist/basicLightbox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/basiclightbox/dist/basicLightbox.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    


</head>
<body>

<?php include 'about_nav_bar.php'?>
<div class="title_org">
  <h1>COMPLAINT FORM</h1>
</div>

<div class="image-and-form">
  <div class="image-and-text">
    <img src="images/comp.png" alt="Complaint Image" class="complaint-image">
    <h1 class="sas_title">SAS! ALWAYS AT YOUR SERVICE!</h1>
  </div>
  <div class="complaint-container_success">
    <div class="form-container_success" id="success-message">
      <h1 class="h1_succ">Submitted Successfully</h1>
      <img src="images/success.gif" alt="Success GIF" id="success-gif">
      <a href="about_us.php"><button>Go to About Us</button></a>
    </div>
  </div>
</div>










<div class="row4">
<div class="contact-heading">
    <h2>CONTACT US</h2>
    <ul class="social-icons">
    <li><a href="https://www.facebook.com/DMMMSUEduPh/"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://twitter.com/DMMMSUEduPh/"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCMxmVLwjdjWWWUfKV2b5E7g"><i class="fab fa-youtube"></i></a></li>
  </ul>
  </div>
  <div class="division">
    <h2>NLUC</h2>
    <ul>
      <li id="nluc-phone"><i class="fas fa-phone-alt"></i>(072) 687-0634</li>
      <li id="nluc-email"><i class="far fa-envelope"></i>chancellor.nluc@dmmmsu.edu.ph</li>
      <li id="nluc-website"><i class="fas fa-globe"></i> www.dmmmsu.edu.ph</li>
    </ul>
  </div>
  
  <div class="division">
    <h2>MLUC</h2>
    <ul>
      <li id="nluc-phone"><i class="fas fa-phone-alt"></i>(072)-700-5453</li>
      <li id="nluc-email"><i class="far fa-envelope"></i>chancellor.mluc@dmmmsu.edu.ph</li>
      <li id="nluc-website"><i class="fas fa-globe"></i> www.dmmmsu.edu.ph</li>
    </ul>
  </div>
  
  <div class="division">
    <h2>SLUC</h2>
    <ul>
      <li id="nluc-phone"><i class="fas fa-phone-alt"></i>(072)522-1062</li>
      <li id="nluc-email"><i class="far fa-envelope"></i>chancellor.sluc@dmmmsu.edu.ph</li>
      <li id="nluc-website"><i class="fas fa-globe"></i> www.dmmmsu.edu.ph</li>
    </ul>
  </div>
  
  <div class="division">
    <h2>OUS</h2>
    <ul>
      <li id="nluc-phone"><i class="fas fa-phone-alt"></i> (072) 242-3608</li>
      <li id="nluc-email"><i class="far fa-envelope"></i>chancellor.ous@dmmmsu.edu.ph</li>
      <li id="nluc-website"><i class="fas fa-globe"></i> www.dmmmsu.edu.ph</li>
    </ul>
  </div>
</div>



    
    
    <script src="js/about_us.js"></script>
</body>
</html>
