<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <title>Event Page</title>
    <style>
        body {
            margin: 0;
            font-family: 'Futura Md BT', sans-serif;
            weight: 100;
        }

        .left-side {
            text-align: center;
            font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif;
            color: #2c6346;
        }

        .left-side h1 {
            margin-top: 10px;
        }

        .smaller-text {
            font-size: 20px;
            text-decoration: none;
            color: #54D483;
        }

        .smaller-text:visited {
            color: #54D483;
        }

        .container-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin-left: 8.3%;
            max-width: 1500px;
        }

        .container {
            position: relative;
            margin: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            width: 300px;
            height: 220px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            transition: 0.3s ease;
        }

        .container:hover {
            transform: scale(1.05);
        }

        .container:nth-child(3n+1) {
            margin-left: 0;
        }

        .container img {
            width: 50%;
            height: auto;
            margin-left: 77px;
            margin-top: 30px;

        }

        #con-plan{
            width:40%;
            margin-left: 95px;
            margin-top: 45px;
        }
        .container h3 {
            margin: 20px;
            text-decoration: none;
            color: #FFFFFF;
            cursor: pointer;
            font-size:23px;
            font-family: 'Futura Md BT', sans-serif;
            text-align: center;
        }

        .container-link {
            text-decoration: none;
            position: relative;
        }

        .container-link h3 {
            margin: 20px;
            color: #FFFFFF;
        }

        .overlay {
            position: absolute;
            top: -100%; /* Slide-in from top position */
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease, top 0.2s ease; /* Added top transition */
            color: #ffffff;
        }

        .container-link:hover .overlay {
            opacity: 1;
            top: 0; /* Slide-in to top position */
            background-color:#2c6346;
        }

        /* Centered Button Container */
        .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        text-decoration: none;
        color: white;
    }

    .button-container a{
        text-decoration: none;
        color: white;
    }

    .button-capsule {
            background-color: #fcb900;
            border: 1px solid #ccc;
            overflow: hidden;
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
            padding: 0 15px;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: 0.3s ease;
            min-width: 200px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        
        }

        .button-capsule:hover {
            transform: scale(1.05);
            background-color: #005900;
        }

        .button-capsule img {
            width: 25px;
            height: 25px;
            vertical-align: middle;
            margin-right: 10px;
        }


        /* Temporary Icons */
        .temporary-icon {
            background-color: #ccc;
            width: 27px;
            height: 27px;
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            text-decoration: none; 
        }

    
    </style>
</head>
<body>
    <div class="left-side">
        <h1>Welcome to Online Student Handbook</h1>
    </div>

    <!-- Centered Button Container -->
    <div class="button-container">
        <!-- Temporary Buttons -->
        <div class="button-capsule">
            <img src="icons/philosophy.png" alt="PMVG | Mantra">
            <a href="pmvg.php">PMVG | Mantra</a>
        </div>

        <div class="button-capsule">
            <img src="icons/pooll.png" alt="Policy & Objective Statements">
            <a href="standards.php">Policy & Objective Statements</a>
        </div>

        <div class="button-capsule">
            <img src="icons/values.png" alt="Core Values">
            <a href="corevalues.php">Core Values</a>
        </div>

        <div class="button-capsule">
            <img src="icons/graduate.png" alt="Graduate Attributes">
            <a href="gradattri.php">Graduate Attributes</a>
        </div>
    </div>

    <div class="container-wrapper">
        <a href="AcademicPolicies.php" class="container-link">
            <div class="container">
                <img src="icons/academic-policy.png" alt="cont 1">
                <div class="overlay"><h3>Academic Policies</h3></div>
            </div>
        </a>
        
        <a href="SAS.php" class="container-link">
            <div class="container">
                <img src="icons/sas.png" alt="cont 2">
                <div class="overlay"><h3>Student Affairs and Services</h3></div>
            </div>
        </a>

        <a href="SASCP.php" class="container-link">
            <div class="container">
                <img id="con-plan" src="icons/con-plan.png" alt="cont 3">
                <div class="overlay"><h3>Student Affairs and Services Continuity Plan</h3></div>
            </div>
        </a>

        <a href="SSAFAP.php" class="container-link">
            <div class="container">
                <img src="icons/assist-prog.png" alt="cont 4">
                <div class="overlay"><h3>Student Scholarship, Assistantship & Financial Assistance Program</h3></div>
            </div>
        </a>

        <a href="SCOD.php" class="container-link">
            <div class="container">
                <img src="icons/discipline.png" alt="cont 5">
                <div class="overlay"><h3>Student Code of Discipline</h3></div>
            </div>
        </a>

        <a href="SBO.php" class="container-link">
            <div class="container">
                <img src="icons/stud-body.png" alt="cont 6">
                <div class="overlay"><h3>Student Body Organization Constitution and By-Laws</h3></div>
            </div>
        </a>

        <a href="SRDR.php" class="container-link">
            <div class="container">
                <img src="icons/stud-right.png" alt="cont 7">
                <div class="overlay"><h3>Students Rights, Duties and Responsibilities</h3></div>
            </div>
        </a>

        <a href="MutualAidGuidelines.php" class="container-link">
            <div class="container">
                <img src="icons/mutual-aid.png" alt="cont 8">
                <div class="overlay"><h3>Mutual Aid Guidlines</h3></div>
            </div>
        </a>

        

    </div>
</body>
</html>
