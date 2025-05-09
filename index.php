<?php

session_start();

$first_name = "";
$last_name = "";
$username = "";
$email = "";
$phone = "";
$address = "";

$fname_err = "";
$Lname_err = "";
$user_err = "";
$email_err = "";
$pass_err = "";
$Cpass_err = "";

$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['fname'] ?? '';
    $last_name = $_POST['Lname'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['em'] ?? '';
    $password = $_POST['pass'] ?? '';
    $confirmed_pass = $_POST['Cpass'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';

    if (empty($first_name)) {
        $fname_err = "First Name is required.";
        $error = true;
    }
    if (empty($last_name)) {
        $Lname_err = "Last Name is required.";
        $error = true;
    }
    if (empty($username)) {
        $user_err = "Username is required.";
        $error = true;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Email format invalid.";
        $error = true;
    }

    include "tools/db.php";
    $dbConnection = getDBConnection();

    $statement = $dbConnection->prepare("SELECT id FROM users WHERE email = ?");
    $statement->bind_param("s", $email);
    $statement->execute();
    $statement->store_result();
    if ($statement->num_rows > 0) {
        $email_err = "Email already used.";
        $error = true;
    }
    $statement->close();

    if (strlen($password) < 6) {
        $pass_err = "Password must be at least 6 characters.";
        $error = true;
    }
    if ($confirmed_pass != $password) {
        $Cpass_err = "Passwords do not match.";
        $error = true;
    }

    if (!$error) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $created_at = date('Y-m-d H:i:s');

        $statement = $dbConnection->prepare(
            "INSERT INTO users (first_name, last_name, username, email, phone, address, password, created_at) " .
            "VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
        );

        $statement->bind_param('ssssssss', $first_name, $last_name, $username, $email, $phone, $address, $password, $created_at);

        $statement->execute();

        $insert_id = $statement->insert_id;
        $statement->close();

        $_SESSION["id"] = $insert_id;
        $_SESSION["first_name"] = $first_name;
        $_SESSION["last_name"] = $last_name;
        $_SESSION["email"] = $email;
        $_SESSION["created_at"] = $created_at;

        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NERV: User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<section class="loginSec">
    <div class="vidBG">
        <video autoplay muted loop id="myVideo">
            <source src="./Evangelion-UI.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="overlay">
        <div class="content-wrapper">
            <div class="logo">
                <a href="https://evangelion.fandom.com/wiki/NERV" target="_blank">
                    <img class="NLogo" src="./NERV-Logo.png" alt="NERV Logo">
                </a>
            </div>

            <form method="post" id="loginF" class="form-container">
                <h1 class="form-title">NERV Access Portal</h1>

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" value="<?= htmlspecialchars($first_name); ?>" required>
                <p class="text-danger"><?= $fname_err; ?></p>

                <label for="Lname">Last Name</label>
                <input type="text" id="Lname" name="Lname" value="<?= htmlspecialchars($last_name); ?>" required>
                <p class="text-danger"><?= $Lname_err; ?></p>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?= htmlspecialchars($username); ?>" required>
                <p class="text-danger"><?= $user_err; ?></p>

                <label for="em">Email</label>
                <input type="email" id="em" name="em" value="<?= htmlspecialchars($email); ?>" required>
                <p class="text-danger"><?= $email_err; ?></p>

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($phone); ?>">

                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="<?= htmlspecialchars($address); ?>">

                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" required>
                <p class="text-danger"><?= $pass_err; ?></p>

                <label for="Cpass">Confirm Password</label>
                <input type="password" id="Cpass" name="Cpass" required>
                <p class="text-danger"><?= $Cpass_err; ?></p>

                <div class="button-group">
                    <button type="submit" class="btn">Register</button>
                    <a class="button-link" href="./index.php">Have an Account? Log In</a>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>

