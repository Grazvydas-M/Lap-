<!-- 2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, 
URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->



<?php

$color = 'black';
if (isset($_GET['color'])) {
    $color = '#' . $_GET['color'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web mechanika 7.2</title>
</head>
<style>
a {
    color: red;
}
</style>

}

<body style="background-color: <?= $color ?>;">
    <a href="./antras.php">Juodas</a>

</body>

</html>