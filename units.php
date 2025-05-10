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
                <div class="unit-card" onclick="window.open('https://www.dropbox.com/scl/fi/a5hlzpge9hjbhhrl1028h/Merkava-4NV.zip?rlkey=bt5u7l40nj7bjuqshcrl337qz&st=k6jlfj6l&dl=1','_blank')">
                    <img src="./images/Profile-Merkava.png" alt="Merkava-4NV">
                    <h3>Merkava-4NV</h3>
                    <p>The Merkava 4NV is a heavily modified variant of Israel’s proven main battle tank, reengineered under NERV-UN oversight for post-Impact warfare.<br>
 Designed to operate in unpredictable terrain and hostile anomalies, the 4NV integrates anti-AT Field plating, internal life support for contaminated zones,<br>
 and a remote AI-assisted fire control system—technology born from lessons learned in the shadow of Evangelions.</p>
                </div>
                <div class="unit-card" onclick="window.open('https://www.dropbox.com/scl/fi/qdxcbcmgcir49ttxn0iad/FMC-M113A2.zip?rlkey=ddq6jkilud7nnyew2sve8av8s&st=n41njiwi&dl=1','_blank')">
                    <img src="./images/Profile-FMCUN.png" alt="M113A2+ FMC-UN">
                    <h3>M113A2+ FMC-UN</h3>
                    <p>The M113A2+ FMC-UN is a revitalized armored personnel carrier serving under NERV-UN’s conventional forces.<br>
While its frame hails from a bygone era, its systems have been overhauled with electronic warfare suites, enhanced mobility packages, and adaptive armor upgrades.<br>

It serves as a reliable backbone for infantry support operations, escorting Evangelion deployments and holding defensive lines in urban and post-Impact terrain.<br>
In a world reshaped by gods and ghosts, the M113A2+ reminds us that human will still moves on treads.</p>
                </div>
                <div class="unit-card" onclick="window.open('https://www.dropbox.com/scl/fi/067axws4bwk5unulhzs30/FwMC-M113A2.zip?rlkey=0wn9ydm7tnfd97k5n2q8ekvtg&st=ivqjrdwz&dl=1','_blank')">
                    <img src="./images/Profile-FWMCUN.png" alt="M113A2+ FwMC-UN">
                    <h3>M113A2+ FwMC-UN</h3>
                    <p>The M113A2+ FMC-UN is a revitalized armored personnel carrier serving under NERV-UN’s conventional forces.<br>
                        Painted by the 43rd Cyberwarfare Division for their Armored Personnel Carriers.</p>
                </div>
                <div class="unit-card" onclick="window.open('https://www.dropbox.com/scl/fi/4woq3elw5venprw1zr74p/FSV-M113A2.zip?rlkey=yyntah0oiitnwefpu6h1ocmov&st=9uilbh60&dl=1','_blank')">
                    <img src="./images/Profile-FSVUN.png" alt="M113A2+ Fire Support Vehicle - NERV-UN">
                    <h3>M113A2+ Fire Support Vehicle - NERV-UN </h3>
                    <p>An evolution of battlefield necessity, the M113A2+ Fire Support Vehicle brings heavy firepower to NERV-UN’s rapid response units.<br>
Outfitted with a remote-operated 90mm cannon, and updated sensor arrays,<br>
it delivers precise, overwhelming support against hostile ground and aerial targets—human or otherwise.</p>
                </div>
                <div class="unit-card" onclick="window.open('https://www.dropbox.com/scl/fi/izjygrjpc2pzofw4kem9g/HMMWV.zip?rlkey=68ji8338wxpn4uj63cwcewols&st=llitwpgg&dl=1','_blank')">
                    <img src="./images/Profile-HMV.png" alt="Humvee">
                    <h3>HMMWV</h3>
                    <p>Designed for swift and adaptable response, the HMMWV-NV serves as a versatile transport and light combat vehicle within NERV-UN’s fleet.<br>
 Equipped with reinforced armor and a manned heavy machine gun mount, the HMMWV-NV is built to withstand hostile environments and carry troops or supplies to where they’re needed most.</p>
                </div>
                <div class="unit-card" onclick="window.open('https://www.dropbox.com/scl/fi/5exh1ydyc098ykq0gnk2c/M113P-UN.zip?rlkey=61iu1hdet3ly0lw2fd4c7h2vk&st=8eoesxp0&dl=1','_blank')">
                    <img src="./images/Profile-M113P-UN.png" alt="M113P-NERV-UN">
                    <h3>M113P-NERV-UN </h3>
                    <p>The M113P-UN is a modified version of the M113 armored personnel carrier, redesigned to meet the demanding requirements of the post-Impact world.<br>
As part of NERV-UN’s armored fleet, the M113P-UN boasts enhanced armor plating, advanced reactive defense systems, and a versatile platform for troop deployment or field support operations.</p>
                </div>
                <div class="unit-card" onclick="window.open('https://www.dropbox.com/scl/fi/jyxc8mingg7bb9c0oyhss/Typhoon-U.zip?rlkey=9xdvtxkvc377e1wausivkopxl&st=vjbs37cu&dl=1','_blank')">
                    <img src="./images/Profile-Typhoon.png" alt="Typhoon KamAZ">
                    <h3>Ural-63095 </h3>
                    <p>The Ural-63095 NERV Variant is an imposing mobile command vehicle re-engineered for Heavy Battlespace Support and cyberwarfare operations.<br>
Originally designed as a high-mobility, armored off-road vehicle, the Typhoon U has been adapted by NERV for a variety of mission-critical roles,<br>
including battlefield control, rapid deployment, Kinetic Energy Weapon direction, and support for cybernetic and information warfare operations</p>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <p>© 2025 NERV Command Interface</p>
    </footer>
</body>
</html>
