<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NERV | Instrumentality: Broken Bonds</title>
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
<div class="lore-video">
                <video autoplay muted loop controls>
                    <source src="./video/UN Expansion Teaser (1).mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="intro">
                <h1>INSTRUMENTALITY: BROKEN BONDS</h1>
                <p>
Set in 2015, immediately at the aftermath of the cataclysmic Third Impact, the world lies in ruins — fractured not only in body, but in spirit.<br>
The Human Instrumentality Project has failed to unify humanity, leaving behind a shattered planet and the ghosts of a broken plan.<br>
<br>
With the deaths of Gendo Ikari, Misato Katsuragi, and the Three Children, NERV is left leaderless and disillusioned.<br>
Yet in the shadows of old battlefields, its remnants fight on — clinging to the last traces of individuality and free will.<br>
<br>
SEELE, despite the fall of its ten monolithic leaders, persists.<br>
Its ideology lives on through scattered cells, still obsessed with achieving forced evolution through global convergence and control.<br>
<br>
The JSSDF, once the iron hand of order, now acts without restraint.<br>
With NERV crippled and SEELE fractured, the military seizes the moment — imposing peace through brutality and firepower.<br>

<br>
What side will the remaining United Nations support?<br>

Preservation – The embers of NERV, defending human autonomy<br>
Autocracy – The remnants of SEELE, enforcing transcendence<br>
Totalitarianism– The rogue JSSDF, securing power at any cost<br>

As old alliances collapse and new warfronts rise, the conflict is no longer about Angels or EVAs —
It is a battle for the very soul of humanity. 
</p>
            </div>


            <div class="unit-section">
                <h2>Factions</h2>
                <div class="unit-card">
                    <img src="./images/SEELE-UN.png" alt="JSU">
                    <h3>SEELE-JSSDF-UN</h3>
                    <p>“The World Must Be Unified—No Matter the Cost.”

The remnants of SEELE, backed by loyal elements of the JSSDF and segments of the old United Nations, seek to restore order through control.<br>
Their vision is one of enforced peace, guided by ancient plans and cold calculation. They see free will as chaos, and humanity as something to be shepherded—even manipulated—into unity.<br>
To them, the post-Third Impact world is a chance to complete what they started.</p>
                </div>
                <div class="unit-card">
                    <img src="./images/NERV-UN.png" alt="NERV UN">
                    <h3>NERV-UN</h3>
                    <p>“Humanity Reclaimed—Freedom Earned Through Struggle.”

The survivors and defectors of NERV, now backed by a reformed splinter of the UN, fight for a future free of manipulation.<br>
Scarred by SEELE’s betrayals, they believe that true evolution comes not from control, but from individual choice.<br>
This is a coalition of former insiders, rogue operators, and ordinary people—those who believe in rebuilding the world, not remaking it.

</p>
                </div>
            </div>
          <div class="nerv-info">
                <h2>NERV Links</h2>
                <p>Here you will find details of the Mod.</p>
                <ul>
                    <li><a href="./versions.php">Download Mod</a></li>
                    <li><a href="./units.php">Download Individual Units</a></li>
                </ul>
            </div>
        </section>
    </div>

    <footer class="footer">
        <p>© 2025 NERV Command Interface</p>
    </footer>
</body>
</html>
