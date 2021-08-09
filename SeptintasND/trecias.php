<!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->



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



<body style="background-color: <?= $color ?>;">
    <form method="get" action="">
        <input type="text" name="color">
        <input type="submit" value="Switch color">
    </form>


</body>

</html>