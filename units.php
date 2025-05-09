<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NERV | Unit Overview</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="overlay"></div>
    <div class="vidBG">
        <video autoplay muted loop id="myVideo">
            <source src="./video/TerminalDogma.mp4" type="video/mp4">
        </video>
    </div>

    <div class="content-wrapper">
        <header>
            <div class="navibar">
                <ul class="nav-links">
                    <li><img src="./images/nerv-icon.png" class="navLogo" alt="NERV Logo"></li>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="units.php">Units</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>

        <section class="homeSec">
            <div class="intro">
                <h1>Evangelion & Military Units</h1>
                <p>Explore the weapons of mankind: from biomechanical titans to frontline military assets.</p>
            </div>

            <div class="unit-section">
                <h2>Evangelion Units</h2>
                <div class="unit-card">
                    <img src="./images/01.png" alt="Unit 01">
                    <h3>Unit-01</h3>
                    <p>The flagship Evangelion piloted by Shinji Ikari. Equipped with progressive knife and positron rifle.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/02.png" alt="Unit 02">
                    <h3>Unit-02</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/03.png" alt="Unit 03">
                    <h3>Unit-03</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/04.png" alt="Unit 04">
                    <h3>Unit-04</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/05.png" alt="Unit 05">
                    <h3>Unit-05</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/06.png" alt="Unit 06">
                    <h3>Unit-06</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/07-Prov.png" alt="Unit 07">
                    <h3>Unit-07</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
               <div class="unit-card">
                    <img src="./images/08.png" alt="Unit 08">
                    <h3>Unit-08</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/09.png" alt="Unit 09">
                    <h3>Unit-09</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
               <div class="unit-card">
                    <img src="./images/10.png" alt="Unit 10">
                    <h3>Unit-10</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/11.png" alt="Unit 11">
                    <h3>Unit-11</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
               <div class="unit-card">
                    <img src="./images/12.png" alt="Unit 12">
                    <h3>Unit-12</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/13.png" alt="Unit 13">
                    <h3>Unit-13</h3>
                    <p>The first production model, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
            </div>

            <div class="unit-section">
                <h2>Conventional Units</h2>
                <div class="unit-card">
                    <img src="./images/mbt.png" alt="Main Battle Tank">
                    <h3>Main Battle Tank</h3>
                    <p>Used for delaying actions and providing heavy fire support during Angel attacks.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/railgun.png" alt="Positron Cannon">
                    <h3>Positron Cannon</h3>
                    <p>Experimental anti-Angel weapon capable of piercing AT Fields, used during Operation Yashima.</p>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <p>© 2025 NERV Command Interface</p>
    </footer>
</body>
</html>
