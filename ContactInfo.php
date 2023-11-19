<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: writer.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(222, 190, 224);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        .contact-container {
            background-color: rgb(200, 178, 204);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(85, 92, 144, 0.1);
            padding: 20px;
            width: 80%;
            max-width: 600px;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-info {
            text-align: center;
        }

        h1 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-details {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }

        .contact-link {
            text-decoration: none;
            color: rgb(137, 148, 230);
            font-weight: bold;
        }

       

        .navbar {
            background-color: rgb(173, 141, 173);
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
            color: #FFFF;
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
        .logout-link-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* 100% of the viewport height, adjust as needed */
        }

        .logout-link {
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
        <li><a href="welcome.php">Home</a></li>
        <li><a href="mycv.php">CV</a></li>
        <li><a href="Galleryy.php">Gallery</a></li>
        <li><a href="ContactInfo.php">Contact-Information</a></li>
    </ul>
</div>

<div class="container">
    <div class="contact-container">
    <div class="welcome-msg" style="float: right;">
                <div class="welcome-text" style="display: inline-block;"> 
                    <?php
                        echo '<p>';
                        echo "Welcome, ";
                        echo $_SESSION['username'];
                        echo '</p>';
                    ?>
                </div>
                <button class="welcome-button" style="display: inline-block;" id="button" onclick="logout()">
                    <i class="fa fa-power-off"></i> 
                </button>
            </div>
        <div class="contact-info">
            <h1>Contact Information</h1>
            <p><b>Name:</b> Zahraa Zayour</p>
            <p><b>Email:</b> <a class="contact-link" href="mailto:zahraa.zayour@lau.edu">zahraa.zayour@lau.edu</a></p>
            <p><strong>Phone:</strong> <a class="contact-link" href="tel:81631984">81 631984</a></p>
            <p><b>Address:</b> Beirut, Qraitem, facing LAU</p>
        </div>
        <div class="contact-details">
            <h2>Contact Me</h2>
            <p>If you have any questions or would like to get in touch, please feel free to email me at the address above.</p>
        </div>
    </div>
</div>
<a href="loginsignup.html">Logout</a>
</body>
</html>
