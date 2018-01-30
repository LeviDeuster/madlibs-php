<?php
$dier = $_GET["dier"];
$persoon = $_GET["persoon"];
$land = $_GET["land"];
$vervelen = $_GET["vervelen"];
$speelgoed = $_GET["speelgoed"];
$docent = $_GET["docent"];
$geld = $_GET["geld"];
$bezigheid = $_GET["bezigheid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>
    <div class="story-container">
    <h1>
        Er heerst paniek...
    </h1>
    <?php
        echo "Er heerst paniek in het koninkrijk $land.<br>
        Koning $persoon is ten einde raad en als koning $persoon ten einde raad is,
        dan roept hij zijn ten-einde-raadsheer $docent.<br>
        $docent! Het is een ramp! Het is een schande!<br>
        Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?<br>
        Mijn $dier is verdwenen! Zo maar, zonder waarschuwing, en ik had net $speelgoed voor hem gekocht!<br>
        Majesteit, uw $dier komt vast vanzelf weer terug?<br>
        Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd $bezigheid leren?<br>
        Maar Sire, dar kunt u toch uw $geld voor gebruiken?<br>
        $docent, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.<br>
        $vervelen, Sire";
    ?>

    </div>
</body>
</html>

