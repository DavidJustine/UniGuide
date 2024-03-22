<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link href="https://cdn.jsdelivr.net/npm/ress@4.0.0/dist/ress.min.css" rel="stylesheet"/>
    <title>Register Form</title>
    <link rel="stylesheet" href="css/user_register.css"/>
    <link rel="stylesheet" href="css/responsive.css">
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
				// transform: translateX(100%);
				// animation: slide-in 1s forwards;
				flex-direction: row;
				width: 100vw;
				height: 100%;
			}

			/* @keyframes slide-in {
						from {
						transform: translateX(100%);
						}
						to {
						transform: translateX(0);
						}
						} */
			.logo {
				display: block;
				max-width: 163px;
				// margin: 16px 32px 0 0;
			}

			h1 {
				font-size: 20px;
				font-family: "Cinzel";
				letter-spacing: 3px;
				margin-right: 32px;
				color: #ffffff;
				text-align: center;
				margin: 0;
			}

			h3 {
				font-family: "Cinzel";
				text-align: center;
				font-size: 13px;
				margin: 0 0 8px 0;
				color: #fff;
			}

			.left-section {
				width: 30%;
				height: 100%;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				background: #fcb900 url('images/left.png');
				background-repeat: no-repeat;
				background-size: contain;
				background-position: 20px 0;
				/* Updated value */
				// padding: 15.7% 5% 14.7% 9%;
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
				// border: 2px solid #fcb900;
				color: #ffffff;
				font-size: 20px;
				text-decoration: none;
				text-align: center;
				transition: all 0.2s ease-in-out;
				// margin-right: 15%;
				margin-top: 62px;
				width: 200px;
			}

			.button:hover {
				background-color: #95e796;
				color: white;
			}

			.right-section h1 {
				font-size: 40px;
				font-family: "Cinzel";
				letter-spacing: 3px;
				color: #2c6346;
			}

			.right-section h3 {
				font-family: "Cinzel";
				text-align: center;
				letter-spacing: 1px;
				font-size: 14px;
				color: #2c6346;
				margin: 0;
			}

			input:focus {
				outline: none;
				border-color: #46E068;
				box-shadow: 0 0 5px #46E068;
			}

			.createacc {
				display: block;
				// max-width: 40%;
				// margin-left: 10%;
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

			#guest {
				font-family: "Cinzel";
				display: inline-block;
				padding: 7px 8px;
				border-radius: 10px;
				background-color: #ffff;
				border: 2px solid #ffffff;
				color: #555;
				font-size: 15px;
				text-decoration: none;
				text-align: center;
				transition: all 0.2s ease-in-out;
				// margin-left: 18%;
				margin-top: 20px;
				width: 150px;
			}

			#guest:hover {
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
  <body id="landing" class="register">
    <div class="container">
      <div class="left-section">
        <img src="images/logo.png" alt="Logo" class="logo" />
        <h3>Republic of the Philippines</h3>
        <h1>Don Mariano Marcos Memorial State University</h1>
        <a href="user_login.php" class="button">LOGIN</a>
      </div>
      <div class="right-section">
        <div class="createacc">
          <h1>Create Account</h1>
          <h3>Online Student<br>Handbook for DMMMMSU</h3>
        </div>
        <form action="user_register_process.php" method="post">
          <table>
            <tr>
              <td><input type="text" id="student_id" name="student_id" placeholder="xxx-xxxx-x" required /></td>
            </tr>
            <tr>
              <td><input type="text" id="username" name="username" placeholder="Student Name" required /></td>
            </tr>
            <tr>
              <td><input type="password" id="password" name="password" placeholder="Password" required /></td>
            </tr>
            <tr>
              <td>
                <select id="role" name="role" required>
                  <option value="NLUC student">NLUC Student</option>
                  <option value="MLUC student">MLUC Student</option>
                  <option value="SLUC student">SLUC Student</option>
                </select>
              </td>
            </tr>
          </table>
          <button type="submit" id="submit">REGISTER</button>
        </form>
        <a href="uniguide-home.php?role=Guest" id="guest" class="button">Enter as Guest</a>
        <div class="message-container"></div>
      </div>
    </div>
  </body>
</html>