<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<style>
	.navbar {
			overflow: hidden;
			background-image: url("images/navbar.png");
			background-size: cover;
			padding: 20px 10px;
			text-align: center;
			display: flex;
			justify-content: center;
			line-height: 2.3;
			box-sizing: border-box;
			border-bottom: 3px solid #bcf3c8;
			z-index: 6; /* set a higher z-index than the banner */
		}

	.navbar a {
		float: left;
		display:flex;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
		font-family: 'Futura Md BT', sans-serif;
		font-weight: 700;
	}

	.menu-container {
		width: 600px;
		display: flex;
		justify-content: space-between;
	}

	.dropdown {
		overflow: hidden;
		font-family: 'Futura Md BT', sans-serif; 
		font-weight: 700;
		line-height: 2.3; /* increase spacing above label */
 		box-sizing: border-box;	
	}

	.dropdown .dropbtn {
		font-size: 17px;
		border: none;
		outline: none;
		color: white;
		padding: 14px 16px;
		background-color: inherit;
		font-family: inherit;
		margin: 0;
		font-family: 'Futura Md BT', sans-serif;
		font-weight: 700;
		line-height: 2.3; /* increase spacing above label */
 		box-sizing: border-box;	
	}

	.navbar a:hover, .dropdown:hover .dropbtn {
		color: #acffbe;

	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		
	}

	.dropdown-content a {
		float: none;
		color: #46E068;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}

	.dropdown:hover .dropdown-content {
		display: block;
	}

	.profile-dropdown {
		float: right;
		margin-right: 20px;
	}

	.profile-dropdown .dropdown-content {
		right: 12%;
	}

	.profile-dropdown .dropdown-content a {
		color: #46E068;
	}

	.profile-dropdown:hover .dropbtn {
		color: #acffbe;
	}
	
	.navlogo {
		position: relative;
		width: 100px; /* set the width of the logo container */
		height: 70px; /* set the height of the logo container */
		margin-right: 200px;
	}

	.navlogo img {
		position: absolute;
		top: 0;
		left: 0;
		max-width: 78%;
		height: auto;
	}

	.navbar i.fa-user {
		font-size: 20px; /* set a default size */
		color: white;
		margin-right: 10px;
		margin-left: 200px;
		transform: scale(2); /* increase size by 2 times */
	}


	.banner {
		position: relative;
		width: 100%;
		height: 410px; /* set a fixed height for the banner */
		overflow: hidden; /* hide any overflow from the image */
		z-index: -2; /* set a lower z-index than the navbar */
	}

	.full-width {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

	.profile {
		position: relative;
	}

	.profile-icon {
		background-color: #666666;
		width: 40px;
		height: 40px;
		border-radius: 50%;
		border: none;
	}

	.hometext {
		position: absolute;
		top: 20px;
		left: 10%;
		font-size: 18px;
		color: white;
	}

	.hometext p {
		margin-bottom: 0;
		font-family: 'Futura Md BT', sans-serif;
	}

	.hometext h4 {
		position: absolute;
		left: 0;
		font-size: 50px;
		color: white;
		margin-top: 0;
		font-family: 'ADAM', sans-serif;
		letter-spacing: 5px;
	}

	.hometext h5 {
		font-size: 20px;
		color: white;
		margin-top: 110px;
		line-height: 1.2;
		font-family: 'SansSerifFLF', sans-serif;
	}

	.greet{
		font-family: 'ADAM', sans-serif;
		margin-top:10px;
	}

	.footer {
		background-color: #f2f2f2;
		padding: 20px;
		text-align: center;
	}
	</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="navbar">
  <div class="navlogo">
    <a href="home.php"><img src="images/logo.png" alt="Logo"></a>
  </div>
  <div class="menu-container">

  	<div class="dropdown">
	<a href="home.php" class="dropbtn">HOME</a>
    </div>
    <div class="dropdown">
	<a href="about_us.php" class="dropbtn">ABOUT US</a>
    </div>
    <div class="dropdown">
	<a href="courses.php" class="dropbtn">COLLEGES</a>
    </div>

	<div class="dropdown">
	<a href="games/gameoptions.php" class="dropbtn">GAMES</a>
    </div>

	<div class="dropdown">
	<a href="contact_us.php" class="dropbtn">CONTACT US</a>
    </div>
    </div>
  </div>
</div>

<div class="banner">
  <img src="images/banner1.png" alt="banner" class="full-width">
  <div class="hometext">
    <p>WEB APPLICATION OF</p>
    <h4>DMMMSU MLUC</h4>
    <h5>This is a web application of DMMMSU MLUC<br>with information about the campus<br>and courses</h5>
  </div>
</div>
</div>

<?php
	include 'contents.php';
?>


<br><br><br><br><br>
<div class="footer">
        <p>All rights reserved 2023| DMMMSU MLUC</p>
    </div>

</body>
</html>
