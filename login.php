<?php
session_start();

$email = "";
$username = "";
$error = "";
$user_err = ""; // ✅ Declare to prevent undefined warning

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['em-auth']);
    $username = trim($_POST['UAuth']);
    $password = trim($_POST['pass-auth']);

    if (empty($email) || empty($password) || empty($username)) {
        $error = "All fields are required.";
    } else {
        include "tools/db.php";
        $dbConnection = getDBConnection();

        $statement = $dbConnection->prepare(
            "SELECT id, first_name, last_name, username, phone, password, created_at 
             FROM users WHERE email = ? AND username = ?"
        );

        $statement->bind_param('ss', $email, $username);
        $statement->execute();
        $statement->store_result();

        if ($statement->num_rows == 1) {
            $statement->bind_result($id, $first_name, $last_name, $db_username, $phone, $stored_password, $created_at);
            $statement->fetch();

            if (password_verify($password, $stored_password)) {
                $_SESSION["id"] = $id;
                $_SESSION["first_name"] = $first_name;
                $_SESSION["last_name"] = $last_name;
                $_SESSION["email"] = $email;
                $_SESSION["phone"] = $phone;
                $_SESSION["created_at"] = $created_at;

                header("location: ./home.php");
                exit;
            } else {
                $error = "Incorrect password.";
            }
        } else {
            $error = "Email and username combination not found.";
        }

        $statement->close();
    }
}
?>

<title>NERV: Login</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="" rel="stylesheet">
<link rel="stylesheet" href="./styles.css">
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
                <a href="https://evangelion.fandom.com/wiki/NERV">
                    <img class="NLogo" src="./NERV-Logo.png">
                </a>
            </div>

            <article class="logInfo">
                <fieldset class="mainProf">
                    <legend>
                        <h1><header class="profname">Log In/Sign Up</header></h1>
                    </legend>

                    <form method="post" id="loginF">
                        <label for="em-auth">Email Address:</label>
                        <input type="email" id="em-auth" name="em-auth" value="<?= htmlspecialchars($email); ?>" required>
                        <p class="text-danger"><?= $error; ?></p>

                        <label for="UAuth">Username:</label>
                        <input type="text" id="UAuth" name="UAuth" value="<?= htmlspecialchars($username); ?>" required>
                        <p class="text-danger"><?= $user_err; ?></p>

                        <label for="pass-auth">Password:</label>
                        <input type="password" id="pass-auth" name="pass-auth" required>
                        <p class="text-danger"><?= $error; ?></p>

                        <div class="button-group">
                            <button type="submit">Log In</button>
                            <<a class="button-link" href="./index.php">Return to Registration</a>
                        </div>
                    </form>                   
                </fieldset>
            </article>
        </div>
    </div>
</section>
</body>
