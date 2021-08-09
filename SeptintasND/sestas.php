<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. 
Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir 
geltonai- kai iš POST. -->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
}

if (isset($_GET['color']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $color = 'green';
}


?>


<style>
body {
    background-color: <?php echo $color ?>;
}
</style>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sestas</title>
</head>

<body>
    <form action="" method="GET">
        <input type="text" name="color" hidden>
        <button>Green</button>
    </form>
    <form action="" method="POST">
        <button>Yellow</button>
    </form>

</body>

</html>