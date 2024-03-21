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
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link href="https://cdn.jsdelivr.net/npm/ress@4.0.0/dist/ress.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/corevalues.css">
    <link rel="stylesheet" href="css/uniguide-home.css">
    <link rel="stylesheet" href="css/responsive.css"/>
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
  </head>
  <body>
    <?php include 'uniguide-navbar.php'; ?>
    <div class="core-title">DMMMMSU CORE VALUES</div>
		<div class="scrollable">
			<section class="info">
				<div class="infographic-wrapper">
					<div class="infographic-items">
						<h1>S</h1>
						<div class="clip-wrapper">
							<div class="clip-1"></div>
							<div class="clip-2"></div>
							<div class="content"><i class="fas fa-handshake"></i></div>
						</div>
						<h2>SERVICE</h2>
						<p id="p-S">
							Service to our stakeholders
						</p>
					</div>
					<div class="infographic-items">
						<h1>P</h1>
						<div class="clip-wrapper">
							<div class="clip-1"></div>
							<div class="clip-2"></div>
							<div class="content"><i class="fas fa-briefcase"></i></div>
						</div>
						<h2>PRODUCTIVITY</h2>
						<p id="p-P">
							Productivity with passion for work
						</p>
					</div>
					<div class="infographic-items">
						<h1>E</h1>
						<div class="clip-wrapper">
							<div class="clip-1"></div>
							<div class="clip-2"></div>
							<div class="content"><i class="fas fa-lightbulb"></i></div>
						</div>
						<h2>EXCELLENCE</h2>
						<p id="p-E">
							Excellence in our programs through scholarly undertakings
						</p>
					</div>
					<div class="infographic-items">
						<h1>C</h1>
						<div class="clip-wrapper">
							<div class="clip-1"></div>
							<div class="clip-2"></div>
							<div class="content"><i class="fas fa-lock"></i></div>
						</div>
						<h2>COMMITTMENT</h2>
						<p id="p-C">
							Commitment in delivering our mandates
						</p>
					</div>
					<div class="infographic-items">
						<h1>I</h1>
						<div class="clip-wrapper">
							<div class="clip-1"></div>
							<div class="clip-2"></div>
							<div class="content"><i class="fas fa-rocket"></i></div>
						</div>
						<h2>INNOVATIVENESS</h2>
						<p id="p-I">
							Innovation towards attaining operative systems, breakthroughs, and milestones
						</p>
					</div>
					<div class="infographic-items">
						<h1>A</h1>
						<div class="clip-wrapper">
							<div class="clip-1"></div>
							<div class="clip-2"></div>
							<div class="content"><i class="fas fa-bullhorn"></i></div>
						</div>
						<h2>ADVOCACY</h2>
						<p id="p-A">
							Advocacy in transforming lives
						</p>
					</div>
					<div class="infographic-items">
						<h1>L</h1>
						<div class="clip-wrapper">
							<div class="clip-1"></div>
							<div class="clip-2"></div>
							<div class="content"><i class="fas fa-award"></i></div>
						</div>
						<h2>LEADERSHIP</h2>
						<p id="p-L">
							Leadership for transformation, empowerment, and sustainable development
						</p>
					</div>
				</div>
				<br/>
			</section>
		</div>
    <br/><br/><br/>
  </body>
</html>