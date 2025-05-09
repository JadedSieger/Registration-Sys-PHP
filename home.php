<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NERV: Home</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>
        <nav class="navibar">
            <div class="navidiv">
                <ul class="nav-links">
                    <li><a href="./home.php"><img class="navLogo" src="./NERV-Logo.png" alt="NERV Logo"></a></li>
                    <li><a href="./about.html">About</a></li>
                    <li><a href="https://jadedsieger.github.io/home"><button type="button">Go to Home</button></a></li>
                    <li><a href="./logout.php"><button type="button">Log Out</button></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="homeSec">
        <div class="vidBG">
            <video autoplay muted loop id="myVideo">
                <source src="./Evangelion-UI.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="overlay">
            <div class="content-wrapper">
                <div class="intro">
                    <h1>Welcome to NERV Command</h1>
                    <p>Welcome, <?php echo $_SESSION['first_name']; ?>! You are now part of the elite force fighting to save humanity.</p>
                    <p>Explore the depths of our operations and get familiar with the most important aspects of NERV.</p>
                </div>

                <div class="lore-video">
                    <h2>Learn About NERV</h2>
                    <video autoplay muted loop controls>
                        <source src="./NERV_Lore.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p>This video will guide you through the history and operations of NERV, as well as our critical missions to protect humanity.</p>
                </div>

                <div class="nerv-info">
                    <h2>NERV Operations</h2>
                    <p>Here you will find details on the various aspects of NERV, from the development of the Evangelions to our top-secret projects.</p>
                    <ul>
                        <li><a href="#">Evangelion Units</a></li>
                        <li><a href="#">NERV Facilities</a></li>
                        <li><a href="#">Project Yashima</a></li>
                        <li><a href="#">Operation Exodus</a></li>
                    </ul>
                </div>

                <div class="footer">
                    <p>&copy; <?php echo date("Y"); ?> NERV Command. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
