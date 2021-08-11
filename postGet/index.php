<?php
session_start();


// skaiciavimo scenarijus
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    echo '<h2>POSTAS</h2>';
    $rezultatas = (int)($_POST['X'] ?? 0) + (int)($_POST['Y'] ?? 0);
    $_SESSION['rrr'] = $rezultatas;
    $_SESSION['X'] = (int)($_POST['X'] ?? 0);
    $_SESSION['Y'] = (int)($_POST['Y'] ?? 0);
    header('Location: https://localhost/lape/postGet/index.php');
    die;
}
// formos ir rezultato rodymo scenarijus
if (isset($_SESSION['rrr'])) {
    $rezultatas = $_SESSION['rrr'];
    $X = $_SESSION['X'];
    $Y = $_SESSION['Y'];
    unset($_SESSION['rrr'], $_SESSION['X'], $_SESSION['Y']);
}


// tuscios formos rodymo scenarijus
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <h1> <?= $rezultatas ?? '-----' ?> </h1>
    <form action="" method="post">
        X: <input type="text" name="X" value="<?= $X ?? '' ?>"><br>
        Y: <input type="text" name="Y" value="<?= $Y ?? '' ?>"><br>
        <button type="submit">Sumuoti</button>
    </form>
</body>

</html>