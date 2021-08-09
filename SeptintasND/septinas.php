<!-- Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save)
 jau GET metodu. -->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
    header('location: https://localhost/lape/SeptintasND/septinas.php?color=yellow');
    exit();
}

if (isset($_GET['color']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $color = 'green';
    if ($_GET['color'] == 'yellow') {
        $color = 'yellow';
    }
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
    <title>Septintas</title>
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