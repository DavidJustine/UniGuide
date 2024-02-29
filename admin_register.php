<!DOCTYPE html>
<html>

<head>
  <title>Register Form</title>
  <link rel="stylesheet" href="css/admin_register.css">
  <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet">
  <style>
    body {
			margin: 0;
			padding: 0;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			overflow: hidden;
		}
    
    /* Added styles for the two sections */
    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      transform: translateX(100%);
			animation: slide-in 1s forwards;
      flex-direction: row;
      width: 100vw;
			height: 100%;
    }

    @keyframes slide-in {
			from {
				transform: translateX(100%);
			}

			to {
				transform: translateX(0);
			}
		}

    .logo{
        display: block;
        max-width: 40%;
        margin-right: 15%;
    }
    
    h1{
        font-size: 20px;
        font-family: "Cinzel";       
        letter-spacing: 3px;
        margin-right: 15%;
        color:#ffffff;    
        text-align:center;                   
    }

    h3{
      font-family: "Cinzel";
        text-align: center;   
        letter-spacing: 1px;
        font-size: smaller;
        margin-right: 15%;
        color:#ffffff;                
    }

    .left-section {
        width: 30%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-image: url('images/left.png');
        background-repeat: no-repeat;
        background-size: 100%; /* Updated value */
        padding: 15.7% 5% 14.7% 9%;
        box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.3);
}



    .right-section {
      width: 70%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
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
			margin-right: 15%;
      margin-top:80px;
			width: 200px;
		  }
	
	.button:hover {
	  background-color: #95e796;
	  color: white;
	}


.right-section h1{
        font-size: 40px;
        font-family: "Cinzel";          
        letter-spacing: 3px;
        color:#2c6346;                       
    }

    .right-section h3{
      font-family: "Cinzel";
        text-align: center;   
        letter-spacing: 1px;
        font-size: smaller;
        color:#2c6346;                
    }

    input:focus {
			outline: none;
			border-color: #46E068;
			box-shadow: 0 0 5px #46E068;
			}
      
    .createacc{
        display: block;
        max-width: 40%;
        margin-left: 10%;
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
			margin-left: 25%;
			width: 200px;
		  }

#submit:hover {
  background-color: #2c6346;
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

  
  
</head>

<body style="background: #ffffff;">
  <div class="container">
    <div class="left-section">
      <img src="images/logo.png" alt="Logo" class="logo" />
      <h3>Republic of Philippines</h3>
      <h1>Don Mariano Marcos Memorial State University</h1>
      <a href="admin_login.php" class="button">LOGIN</a>
    </div>
    <div class="right-section">
      <div class="createacc">
        <h1>Create Account</h1>
        <h3>Be an Admin<br>of Student Affairs and Services</h3>
      </div>
      <form action="register_process.php" method="post">
    <table>
        <tr>
            <td><input type="text" id="username" name="username" placeholder="Username" /></td>
        </tr>
        <tr>
            <td><input type="password" id="password" name="password" placeholder="Password" /></td>
        </tr>
    </table>
    <button id="submit">REGISTER</button>
</form>

      <div class="message-container"></div>
    </div>
  </div>
</body>

</html>