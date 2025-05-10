<?php include 'session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NERV | Version Selector</title>
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
       
        <div class="unit-section">
 <h2>Versions</h2>
            <div class="unit-card" onclick="window.open('https://www.dropbox.com/scl/fi/w69fzijohqbb3i8b4d0pb/Instrumentality-Broken-Bonds-1.8-Ramiel-Appears.zip?rlkey=5jg345d702erfuy3t7bvl8hbn&st=g70ygkye&dl=1','_blank')">
                <h1>Version 1.8 - Descent of the Fifth</h1>
                <p>Updates: <br>
- Some UI elements fixed for 11.0.1<br>
- Rebalanced Support Vehicles, such as the Typhon (NERV-UN) and the FCV (Global)<br>
<br>
New Faction: Angels<br>
- Ramiel<br>

<br>
Current Roadmap<br>
- Eighth Angel  (https://evangelion.fandom.com/wiki/Eighth_Angel)<br>
- Arael (https://evangelion.fandom.com/wiki/Arael)<br>
- EVA Unit Implementation<br>
- Textures for canonically accurate characters.<br>
<br>
Units Added (Global):<br>
- Positron Cannon (43.4km RHA Penetration btw)<br>
- 4 FCV types (Bombs, Cruise Missiles, A-10 support)<br>
<br>
NERV-UN Units Added<br>
- XM270 Lower Wield Positron Cannon<br>
- Typhon Ballistic Missile Command Center
</p>
            </div>
               
            <div class="unit-card" onclick="window.open(`https://www.dropbox.com/scl/fi/0ixdjfs0hestfxp67k78h/Instrumentality-Broken-Bonds-1.7.5-UI-SEELE-Camo-Completion-Update.zip?rlkey=zfx0uut4qyaan40odv3xwtvz0&st=delal25u&dl=1`,'_blank')">
                <h1>Instrumentality: Broken Bonds v1.7.5 (UI + Camouflage Completion Patch)</h1>
                <p>Updates:<br>
- UI is now completely original, even the splash screen for mobile.<br>
- The splash screen is also working on pc, just replace the splash screen in your Images with the one from Mod/Images. Remember to copy your original splashes to a folder.<br>
- "Red Mandate Garrison" squad size reduced.<br>
- Missing Profiles fixed.<br>

<br>
SEELE-JSSDF-UN Units Added:<br>
- T-90M Breakthrough<br>
- Object 670 "Black Eagle"<br>
- ZTZ99A<br>
- ZTZ96A<br>
- ZTZ88C<br>
- JSU-Seraphim Execution Group<br>
</p>
            </div>
</div>
    <footer class="footer">
        <p>© 2025 NERV Command Interface</p>
    </footer>
</body>
</html>
