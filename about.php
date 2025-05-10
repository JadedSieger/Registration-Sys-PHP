<?php include 'session.php'; ?>


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

        <!-- Only the overlay background, without content -->
        <div class="overlay"></div>

        <!-- Move content-wrapper outside of the overlay -->
        <div class="content-wrapper">
            <div class="intro">
                <h1>What is NERV?</h1>
                <p>Welcome, <?php echo $_SESSION['first_name']; ?>! You are now part of the elite force fighting to save humanity.</p>
                <p>Explore the depths of our operations and get familiar with the most important aspects of NERV.</p>
            </div>

            <div class="lore-video">
                <h2>Learn About NERV</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/PBRqncfrYtI?si=FwPkFZ3vrBMByrPh" title="YouTube video player" frameborder="0" allow="accelerometer;
                  autoplay; clipboard-write;
                  encrypted-media;
                  gyroscope; 
                  picture-in-picture;
                  web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen>
                  </iframe>
            </div>

            <div class="nerv-info">
                <h2>NERV</h2>
                <p>NERV (German for "nerve") is a special organization that was put together to combat the Angels after the Second Impact and is the organization responsible for the creation of the Evangelions.<br>
                NERV is an international organization with their center of operation located in the city of Tokyo-3, Japan.<br>
                More specifically, they run the majority of their research and operations out of NERV Headquarters, a large facility located in the GeoFront.<br>
                Outside of their main operation in Japan, NERV also has operations in the United States, Germany and possibly more.
</p>
            </div>
      <div class="unit-section">
                <h2>Non-Canon Faction</h2>
                <div class="unit-card">
                    <img src="./images/NERV-UN.png" alt="NERV UN">
                    <h3>NERV-UN</h3>
                    <p>“Humanity Reclaimed—Freedom Earned Through Struggle.”

NERV was once the instrument of a quiet apocalypse—a covert arm of the United Nations, manipulated by SEELE to bring about Instrumentality.<br>
But it was never faceless. It was built by people.<br>
<strong>Misato Katsuragi</strong>, who carried the weight of the world on her shoulders.<br>
<strong>Rei Ayanami</strong>, who defied her origin.<br>
<strong>Asuka Langley Soryu</strong>, who refused to be forgotten.<br>
And above all, <strong>Shinji Ikari</strong>, the boy who chose life—not perfection, not unity, but the unbearable pain and beauty of being human.<br>

The world that followed was not saved—it was left broken, raw, and real. But from that brokenness, a new force emerged.<br>

NERV-UN is not a continuation of old power, but a reclamation of meaning.<br>
Formed in the aftermath of the failed Human Instrumentality Project and the collapse of SEELE’s global machinery,<br>
NERV-UN is a decentralized, restructured alliance of survivors, scientists, former NERV staff, and ordinary citizens. They do not seek gods or monsters.<br>
They seek accountability, autonomy, and peace forged through understanding—not control.<br>

The Evangelions are gone, but their legacy remains. Their pilots were children—witnesses and victims of a system that demanded everything from them.<br>
Shinji's final decision did not fix the world, but it gave humanity the right to try again. NERV-UN exists to honor that chance.<br>

This is not a new beginning. It is a continuation of a story scarred by sacrifice and driven by memory. And they remember everything.<br>

</p>
                </div>
            </div>
        </section>
    </div>
    </section>
<div class="footer">
                <p>&copy; <?php echo date("Y"); ?> NERV Command. All rights reserved.</p>
</div>
</body>
</html>
