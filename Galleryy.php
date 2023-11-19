<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: writer.php");
    exit();
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 30px;
            max-width: 800px;
        }

        .picture {
            width: 150px;
            height: 150px;
            margin: 10px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .picture:hover {
            transform: scale(1.5);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .picture-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .picture:hover .picture-overlay {
            opacity: 1;
        }

        .overlay-text {
            color: #fff;
            font-size: 18px;
            text-align: center;
        }

        .button-container {
            display: flex;
            gap: 20px;
            margin-top: 70px;
        }

        .go-to-cv-button,
        .go-to-contact-button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #edd5f1;
            color: #322c2c;
            display: flex;
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
        }

        .navbar a {
            color: #FFFF;
            text-decoration: none;
            font-size: 18px;
            padding: 0px 0px;
        }

        .navbar-logo {
            color: #e4dcdc;
            text-decoration: none;
            font-size: 18px;
            margin: 10;
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
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
    
    </div>
    </div>
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

    <div class="gallery">
        <?php
            $jsonContent = file_get_contents('gallery.json');
            $imageUrls = json_decode($jsonContent);

            if ($imageUrls !== null) {
                foreach ($imageUrls as $imageUrl) {
                    echo '<div class="picture">';
                    echo "<img src=\"$imageUrl\">";
                    echo '</div>';
                }
            } else {
                echo 'Error decoding JSON file.';
            }
        ?>
    </div>
    <script>
    function openImage(imageUrl) {
    console.log('Opening image:', imageUrl);

    var modal = document.createElement('div');
    modal.className = 'lightbox';

    var img = document.createElement('img');
    img.src = imageUrl;

    var closeBtn = document.createElement('span');
    closeBtn.className = 'close-btn';
    closeBtn.innerHTML = '&times;';
    closeBtn.onclick = function () {
        document.body.removeChild(modal);
    };

    modal.appendChild(img);
    modal.appendChild(closeBtn);

    document.body.appendChild(modal);
}


    // Assuming that imageUrls is an array of image URLs from your JSON file
    var imageUrls = [
        "https://i0.wp.com/thetechhacker.com/wp-content/uploads/2018/04/Best-Websites-to-Learn-C-Plus-Plus.jpg?fit=1000%2C640&ssl=1",
        "https://digital-history-berlin.github.io/Python-fuer-Historiker-innen/_images/python-logo.png",
        "https://cdn.vox-cdn.com/thumbor/ada2gg-FudvYRX-s_WuP8QXXjRg=/0x33:640x393/1600x900/cdn.vox-cdn.com/assets/1087137/java_logo_640.jpg"
    ];

    // Use imageUrls to create image elements
    imageUrls.forEach(function (url) {
        var picture = document.createElement('div');
        picture.className = 'picture';
        picture.onclick = function () {
            openImage(url);
        };

        var image = document.createElement('img');
        image.src = url;

        picture.appendChild(image);
        document.getElementById('yourGalleryContainer').appendChild(picture);
    });
</script>


        
    <a href="loginsignup.html
    ">Logout</a>

</body>

</html>
