<?php
$hebben = $_POST["hebben"];
$persoon = $_POST["persoon"];
$getal = $_POST["getal"];
$vakantie = $_POST["vakantie"];
$beste = $_POST["beste"];
$slechtste = $_POST["slechtste"];
$ergste = $_POST["ergste"];
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
        Onkunde
    </h1>
    <?php
        echo "Er zijn veel mensen die niet kunnen $hebben.<br>
        Neem nou $persoon. Zelfs met de hulp van een $vakantie
        of zelfs $getal kan $persoon niet $hebben.<br>
        Dat heeft niet te maken met een gebrek aan een gebrek aan $beste,
        maar wel met een teveel aan $slechtste.<br>
        Te veel $slechtste leidt tot $ergste en dat is niet goed als je wilt $hebben.
        Helaas voor $persoon";
    ?>

    </div>
</body>
</html>
