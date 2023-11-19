<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$DateOfBirth = $_POST['DateOfBirth'];
$gender = $_POST['rgender'];

$newUser = [
    'username' => $username,
    'email' => $email,
    'password' => $password,
    'firstname' => $firstname,
    'lastname' => $lastname,
    'gender' => $gender,
];

$usersFile = 'credentials.txt';

$users = [];

if (file_exists($usersFile)) {
    $lines = file($usersFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $userData = explode(',', $line);
        $existingUser = [
            'username' => $userData[0],
            'email' => $userData[1],
            'password' => $userData[2],
            'firstname' => $userData[3],
            'lastname' => $userData[4],
            'gender' => $userData[5],
        ];
        $users[] = $existingUser;
    }
}

foreach ($users as $existingUser) {
    if (isset($existingUser['username']) && isset($existingUser['email']) && ($existingUser['username'] === $newUser['username'] || $newUser['email'] === $existingUser['email'])) {
        echo "User already exists, login if you have an account or use another username and email";
        echo '<script>window.location.href = "index.html";</script>';
        exit;
    }
}

$users[] = $newUser;
file_put_contents($usersFile, implode(PHP_EOL, array_map(function ($user) {
    return implode(',', $user);
}, $users)));

$_SESSION["username"] = ucfirst($username);  // Log in the user

header("Location: welcome.php");  // Redirect to the home page
exit();
?>

<?php include('header.php'); ?>

<!-- The rest of your page content goes here -->
