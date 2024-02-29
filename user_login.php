<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/user_login.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bauhaus+93&display=swap">
	<link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet">

<style>
		body {
				position: absolute;
				top: 0;
				left: -100%;
				width: 100%;
				height: 100%;
				transition: all 0.5s ease-in-out;
				overflow: hidden; /* Hide scrollbars */
			}

		.page {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		transform: translateX(100%);
		transition: opacity 0.5s ease, transform 0.5s ease;
		}

		.page.active {
		opacity: 1;
		transform: translateX(0%);
		}

				/* Added styles for the two sections */
				.container {
				display: flex;
				align-items: center;
				justify-content: center;
				}
			
				.logo{
					display: block;
					max-width: 140%;
					margin-left: 10%;
				}
				
				h1{
					font-size: 40px;
       				 font-family: "Cinzel";          
					letter-spacing: 3px;
					margin-left: 1%;
					color:#2c6346;    
					text-align:center;                   
				}
			
				h3{
        			font-family: "Cinzel";   
					text-align: center;   
					letter-spacing: 1px;
					font-size:15px;
					margin-left: 1%;
					color:#2c6346;                
				}
			
				.left-section {
					width: 70%;
					display: flex;
					flex-direction: column;
		
					justify-content: center;
					}
			
			.left-section h1 .bauhaus-font{
			font-size: 50px;
			font-family: 'Bauhaus 93', sans-serif;  /* Change to Bauhaus or appropriate Bauhaus font */
			letter-spacing: 3px;
			margin-left: 1%;
			color: #46E068;
			}

			
				.right-section {
				width: 30%;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				background-image: url('images/right.png');
				background-repeat: no-repeat;
				background-size: 120%; /* Updated value */
				padding: 12% 5% 16.1% 2%;
				box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.3);
				}
				
				.button {
					font-family: "Cinzel";    
					display: inline-block;
					padding: 7px 8px;
					border-radius: 10px;
					background-color: #2c6346;
					border: 2px solid #fcb900;
					color: #ffffff;
					font-size: 20px;
					text-decoration: none;
					text-align: center;
					transition: all 0.2s ease-in-out;
					margin-left: 50px;
					margin-top:80px;	
					width: 200px;
				}
			
			.button:hover {
			background-color: #95e796;
			color: white;
			}
			
			
			.right-section h1{
					font-size: 20px;
        font-family: "Cinzel";          
					letter-spacing: 3px;
					margin-left: 10px;
					color:#ffffff; 
					width: 300px;                      
				}
			
				.right-section h3{
        font-family: "Cinzel";   
					text-align: center;   
					letter-spacing: 1px;
					font-size: smaller;
					margin-left: 10px;
					color:#ffffff;
					width: 300px;                  
				}

				input:focus {
					outline: none;
					border-color: #46E068;
					box-shadow: 0 0 5px #46E068;
					}

			
				.createacc{
					display: block;
					max-width: 40%;

				}
				.createacc img{
					width:160px;
					align-items:center;
					margin-left: 45%;
				}
				
				
				#submit {
        			font-family: "Cinzel";   
					display: inline-block;
					padding: 7px 8px;
					border-radius: 10px;
					background-color: #fcb900;
					border: 2px solid #ffffff;
					color: #ffffff;
					font-size: 20px;
					text-decoration: none;
					text-align: center;
					transition: all 0.2s ease-in-out;
					margin-left:415px;
					width: 200px;
				}
			
			#submit:hover {
			background-color: #95e796;
			color: white;
			}

			.message {
		background-color: #ffffff;
		font-family: 'Futura Md BT', sans-serif; 
		font-size: 25px;
		border-radius: 20px;
		border: 2px solid #27ae60;
		color: #4CAF50;
		padding: 50px;
		margin-top: 40px;
		position: absolute;
		top: 40%;
		left: 50%;
		transform: translateX(-50%);
		z-index: 1;
		}

</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		
			$(document).ready(function() {
			$('body').css('left', '0');
		});
	</script>
	
</head>
<body>
	<div class="container">
	  <div class="left-section">
	  <h1> Welcome to DMMMMSU!<br></span></h1>
		<h3>Login your info<br></h3>
		<form action="user_login_process.php" method="post">
    <table>
        <tr>
		<td><input type="text" id="student_id" name="student_id" placeholder="Student-ID" /></td>
        </tr>
        <tr>
            <td><input type="password" id="password" name="password" placeholder="Password" /></td>
        </tr>
    </table>
    <button type="submit" id="submit">LOG IN</button>
</form>


	  </div>
	  <div class="right-section">
		<div class=" createacc">
			<img src="images/logo.png" alt="Logo" class="logo" />
		  <h3>Republic of Philippines</h3>
		  <h1>Don Mariano Marcos Memorial State University<br></h1>
		  <a href="user_register.php" class="button">REGISTER</a>
		</div>
	</div>
  </body>
</html>
