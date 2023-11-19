<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $textFile = 'credentials.txt';

    if (file_exists($textFile) && ($fileContent = file_get_contents($textFile)) !== false) {
        $lines = explode(PHP_EOL, $fileContent);

        foreach ($lines as $line) {
            $credentials = array_map('trim', explode(',', $line));
            if (isset($credentials[0], $credentials[2]) && $credentials[0] === $username && $credentials[2] === $password) {
                $_SESSION["username"] = ucfirst($username);

                header("Location: index.php");
                exit();
            }
        }
    }

    header("Location: index.php");
    exit();
}
?>

<?php include('header.php'); ?>

<!-- The rest of your page content goes here -->
