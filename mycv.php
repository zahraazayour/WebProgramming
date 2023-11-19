<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginsignup.html");
    exit();
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
   .navbar {
            background-color: #a987a9;
            width: 100%;
            padding: 10px 0;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .navbar a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 18px;
            padding: 0px 20px;
        }

        .navbar-logo {
            color: #e4dcdc;
            text-decoration: none;
            font-size: 18px;
            margin: 0;
        }

       
        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }
       
.margin-content {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    padding-left: 220px;
    margin-top: 60px; 
}

       .vertical-margin {

     background-color: #d4b5d4b1;
    width: 200px;
    max-height: 100%;
    overflow-y: auto;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    padding-top: 20px;
    z-index: 999; 
    }
    .welcome-msg {
            display: flex;
            align-items: center;
        }

        .welcome-text {
            font-size: 20px;
            margin-right: 10px;
        }

        .welcome-button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 20px;
            color: #FFFFFF;
        }
   




        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #e2d9d9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-family: 'Georgia', serif;
            font-size: 36px;
            color: #443044;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 18px;
            color: #6d6d6d;
        }
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #edd5f1;
            color: #322c2c;
            display: flex; 
        }

        .vertical-margin {
            background-color: #d4b5d4b1; 
            width: 200px; 
            max-height: 100%; 
            overflow-y: auto;
            position: fixed; 
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding-top: 20px; 
        }

        .margin-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1; 
            padding-left: 220px; 
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #e2d9d9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-family: 'Georgia', serif; 
            font-size: 36px;
            color: #443044; 
            margin-bottom: 5px;
        }

        .header p {
            font-size: 18px;
            color: #6d6d6d; 
        }

        .section {
            margin-bottom: 40px;
            padding: 20px;
        }

        .section h2 {
            font-family: 'Georgia', serif; 
            font-size: 24px;
            color: #000000;
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #3e2c3d;
        }

        .section p {
            font-size: 16px;
            line-height: 1.6;
            color: #000000;
        }

        .date {
            font-weight: bold;
            color: #4e2e4d;
        }

        .contact {
            margin-top: 20px;
        }

        .education, .experience, .skills {
            margin-top: 0px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        .skills ul {
            display: flex;
            flex-wrap: wrap;
        }

        .skills li {
            margin-right: 15px;
            margin-bottom: 15px;
            background-color: #755173; 
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            color: #c8b6b6;
            display: flex;
            align-items: center;
        }
        .skills li i {
            margin-right: 10px;
        }
        .skills li:hover {
            background-color: #943c94; 
            color: #ffffff; 
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.6); 
            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease; 
        }

        .work-experience {
            display: flex; 
            flex-wrap: wrap; 
            justify-content: space-between;
        }

        .work-experience-box {
            flex-basis: calc(47% - 20px); 
            background-color: #d4b5d4b1; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border: 2px solid #653b65;
            margin-top: 20px;
        }

        
        .information {
            width: 300px;
            height: 335px; 
            margin: 0 auto;
            text-align: center;
            background-color: #755173; 
            color: #e4dcdc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba( 0, 0, 0.2);
        }

       
        .picture-margin {
            text-align: center;
            margin-top: -1px;
        }

        
        .profile-picture {
            width: 150px;
            height: 140px;
            border-radius: 10%;
            object-fit: cover;
        }

        
        .contact p {
            margin: 5px 0;
        }

        .contact p i {
            margin-right:10px;
        }

        .responsibilities ul {
            list-style-type: disc; 
            padding-left: 20px;
        }

        .email-link {
            text-decoration: none;
            color: inherit;
        }

        .email-link:hover {
            text-decoration: underline;
        }
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #edd5f1;
            color: #322c2c;
            display: flex; 
        }
        .logout-link {
            display: block;
            margin-top: 20px; /* Adjust as needed */
            text-align: center;
            text-decoration: none;
            color: #FFFFFF;
            font-size: 18px;
        }


       
    </style>
</head>
<body>
    


    <div class="navbar">
        <a class="navbar-logo" href="#">Your Pages</a>
        <ul>
            <li><a href="loginsignup2.html">Logout</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="mycv.php">CV</a></li>
            <li><a href="Galleryy.php">Gallery</a></li>
            <li><a href="ContactInfo.php">Contact-Information</a></li>
        </ul>
    </div>

        
    


    <div class="vertical-margin">
       
    </div>
    <div class="margin-content">
      
        <div class="header">
            <h1>Zahraa Zayour</h1>
            <p>Computer Science Student</p>
        </div>
        <a href="loginsignup.html">Logout</a>
        <div class="welcome-msg" style="float: right;">
                <div class="welcome-text" style="display: inline-block;"> 
                    <?php
                        echo '<p>';
                        echo "Welcome, ";
                        echo $_SESSION['username'];
                        echo '</p>';
                    ?>
                </div>
                
            </div>
        <div class="information">
            <div class="picture-margin">
                <img src="https://th.bing.com/th/id/R.cb6a7fa71683552b0608720031eec10d?rik=4v6MVu%2fFy5KyVQ&riu=http%3a%2f%2fcliparts.co%2fcliparts%2fkTM%2fb79%2fkTMb79r8c.png&ehk=RUo1ClLfLKfRuKTi0Kfsl4Ek3l0NqAAw6fV7Ok1VO2I%3d&risl=&pid=ImgRaw&r=0" alt="Profile Picture" class="profile-picture">
            </div>
            <h2><b>Contact Information:</b></h2>
            <p class="contact"><a class="email-link" href="mailto:zahraa.zayour@lau.edu"><i class="fas fa-envelope"></i> Email: zahraa.zayour@lau.edu</a></p>
            <p class="contact"><a class="email-link" href="mailto:zahraa.zayour@lau.edu"><i class="fas fa-phone"></i> Phone Number: +961 81 631 984</a></p>
            <p><i class="fas fa-map-marker-alt"></i> Address: South governate, Saida district</p>
        </div>
        <hr>
        <div class="section">
            <h2>Work Experience</h2>
            <div class="work-experience">
                <div class="work-experience-box">
                    <p class="date"><b>June 2023 - August 2023</b></p>
                    <p><i>Web Developer Intern</i></p>
                    <p>Middle East Airlines (MEA), Lebanon</p>
                    <p><b>Responsibilities:</b></p>
                    <div class="responsibilities">
                        <ul>
                            <li>Developed and maintained web applications.</li>
                            <li>Collaborated with cross-functional teams to deliver projects on time.</li>
                            <li>Provided technical support and troubleshooting.</li>
                        </ul>
                    </div>
                </div>
                <div class="work-experience-box">
                    <p class="date"><b>June 2023 - August 2023</b></p>
                    <p><i>Web Developer Intern</i></p>
                    <p>Integrated Digital Systems (IDS), Lebanon</p>
                    <p><b>Responsibilities:</b></p>
                    <div class="responsibilities">
                        <ul>
                            <li>Developed and maintained web applications.</li>
                            <li>Collaborated with cross-functional teams to deliver projects on time.</li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="work-experience-box">
                <p class="date"><b>November 2022 - Present</b></p>
                <p><i>Coding Instructor</i></p>
                <p>Geek Express, Lebanon</p>
                <p><b>Responsibilities:</b></p>
                <div class="responsibilities">
                    <ul>
                        <li>Delivered several individual classes in application development using MIT app inventor.</li>
                        <li>Delivered group classes in basic artificial intelligence concepts.</li>
                        <li>Trained students for an online competition.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="vertical-margin">
        <div class="section">
            <h2 style="margin-top: 20px;">Education:</h2>
            <ul>
                <li class="date">2021 - Present</li>
                <li><i class="fas fa-dot-circle"></i> Bachelor of Science in Computer Science</li>
                <li><i class="fas fa-dot-circle"></i> Minor in Physics</li>
                <li><i class="fas fa-dot-circle"></i> Lebanese American University, Beirut</li>
                <li><i class="fas fa-dot-circle"></i> Dean's Distinction List</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Soft Skills:</h2>
            <p>
                <i class="fas fa-check"></i> detail-oriented 
                <i class="fas fa-check"></i> hard worker 
                <i class="fas fa-check"></i> curious 
                <i class="fas fa-check"></i> pianist 
                <i class="fas fa-check"></i> team worker 
                <i class="fas fa-check"></i> communication skills 
                <i class="fas fa-check"></i> accurate
            </p>
        </div>
        <hr>
        <div class="section skills">
            <h2>Technical skills:</h2>
            <ul>
                <li><i class="fas fa-code"></i> HTML</li>
                <li><i class="fas fa-paint-brush"></i> CSS</li>
                <li><i class="fas fa-database"></i> SQL</li>
                <li><i class="fas fa-laptop-code"></i> PHP</li>
                <li><i class="fas fa-cube"></i> OOP</li>
                <li><i class="fas fa-robot"></i> Machine Learning</li>
                <li><i class="fas fa-coffee"></i> Java</li>
                <li><i class="fab fa-python"></i> Python</li>
                <li><i class="fas fa-code"></i> C</li>
                <li><i class="fas fa-chart-line"></i> Algorithm</li>
                <li><i class="fas fa-microchip"></i> Verilog</li>
                <li><i class="fab fa-windows"></i> Microsoft</li>
            </ul>
        </div>
        
    </div>
    
    
</body>
</html>

    
