<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir 
GET duomenų perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu 
kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->

<?php
$c =  ($_GET['color'] ?? false) ? 'red' : 'black';
//
//
// $_GET['color'] ?? false 
// jeigu kintamasis color yra tai grazinam 1 kuris virsta true
// ternaris grazina $c = 'red'
// jeigu kintamojo color nera tai ?? sintakse grazina false ternario salygai
//  tada ternaris grazina $c = 'black'
// 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web mechanika 7.1</title>
    <style>
    body {
        background-color: <?php echo $c ?>;
    }

    a {
        color: pink;
    }
    </style>
</head>

<body>
    <a href="https://localhost/lape/SeptintasND/pirmas.php">Be</a>
    <a href="https://localhost/lape/SeptintasND/pirmas.php?color=1">Su</a>

</body>

</html>