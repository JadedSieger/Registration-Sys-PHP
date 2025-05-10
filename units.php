<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NERV | Unit Overview</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <nav class="navibar">
            <div class="navidiv">
                <ul class="nav-links">
                    <li><a href="./home.php"><img class="navLogo" src="./NERV-Logo.png" alt="NERV Logo"></a></li>
                    <li><a href="./about.php"><button type="button">About</button></a></li>
                    <li><a href="https://jadedsieger.github.io/home"><button type="button">Go to Home</button></a></li>
                    <li><a href="./logout.php"><button type="button">Log Out</button></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="overlay"></div>
    <div class="vidBG">
        <video autoplay muted loop id="myVideo">
            <source src="./Evangelion-UI.mp4" type="video/mp4">
        </video>
    </div>

        <section class="homeSec">
            <div class="intro">
                <h1>Evangelion & Military Units</h1>
                <p>Explore the weapons of mankind: from biomechanical titans to frontline military assets.</p>
            </div>

            <div class="unit-section">
                <h2>Evangelion Units</h2>
                <div class="unit-card">
                    <img src="./images/00.webp" alt="Unit 00">
                    <h3>Unit-01</h3>
                    <p>The first functional Evangelion unit created, serving as the prototype for the rest of the Evangelion series. </p>
                </div>
                <div class="unit-card">
                    <img src="./images/01.webp" alt="Unit 01">
                    <h3>Unit-01</h3>
                    <p>the first non-prototype Evangelion unit, and is referred to as the "EVA-01 TEST TYPE". </p>
                </div>
                <div class="unit-card">
                    <img src="./images/02.webp" alt="Unit 02">
                    <h3>Unit-02</h3>
                    <p>The design of Unit-02 supposedly rectifies the mistakes made during the construction of Prototype Unit-00 and Test Type Unit-01, piloted by Asuka Langley. Specialized for combat versatility.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/03.webp" alt="Unit 03">
                    <h3>Unit-03</h3>
                    <p>Evangelion Unit that never sees action before being possessed by Bardiel. It was piloted by Tōji Suzuhara..</p>
                </div>
                <div class="unit-card">
                    <img src="./images/04.webp" alt="Unit 04">
                    <h3>Unit-04</h3>
                    <p>Unit-04 was a test subject for installing an S² Engine into an ordinary Evangelion, likely by using the one recovered from Shamshel.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/05.webp" alt="Unit 05">
                    <h3>Unit-05</h3>
                    <p>the first Evangelion unit which is not built with a humanoid-like appearance, like Units 00–03. Piloted by Mari Makinami Illustrious. </p>
                </div>
                <div class="unit-card">
                    <img src="./images/06.webp" alt="Unit 06">
                    <h3>Unit-06</h3>
                    <p>Evangelion Mark.06 was constructed at NERV's lunar 7th Branch, Tabgha Base. piloted by Kaworu Nagisa.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/07-Prov.webp" alt="Unit 07">
                    <h3>Unit-07</h3>
                    <p>It is an autonomous mass-produced Evangelion unit</p>
                </div>
               <div class="unit-card">
                    <img src="./images/08.webp" alt="Unit 08">
                    <h3>Unit-08</h3>
                    <p>Also known as General-Purpose Humanoid Battle Weapon Android Evangelion Utility Model (WILLE Custom) Unit Eight Alpha").</p>
                </div>
                <div class="unit-card">
                    <img src="./images/09.webp" alt="Unit 09">
                    <h3>Unit-09</h3>
                    <p>It was sent by NERV to attack the AAA Wunder in order to recover Shinji Ikari from WILLE, it is piloted by Rei Ayanami</p>
                </div>
               <div class="unit-card">
                    <img src="./images/10.webp" alt="Unit 10">
                    <h3>Unit-10</h3>
                    <p> Master of the NHG Erlösung and is one of the remaining Adams. Like the other Vessels of the Adams, the Mark.10 is piloted by the advanced Ayanami Series.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/11.webp" alt="Unit 11">
                    <h3>Unit-11</h3>
                    <p>Mark.11 is the Master of the NHG Erbsünde and is one of the remaining Adams.</p>
                </div>
               <div class="unit-card">
                    <img src="./images/12.webp" alt="Unit 12">
                    <h3>Unit-12</h3>
                    <p>Mark.12 is the Master of the NHG Gebet and is one of the remaining Adams.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/13.webp" alt="Unit 13">
                    <h3>Unit-13</h3>
                    <p>piloted simultaneously by two pilots, Shinji Ikari and Kaworu Nagisa.</p>
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
