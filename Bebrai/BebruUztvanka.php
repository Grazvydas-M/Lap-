<?php

require __DIR__ . '/functions.php';



if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $bebrai = getBebrai();
    if ('prideti-juodus' == $_POST['ka_daryti']) {
        $bebrai['juodieji'] += (int)$_POST['j_plus'];
    } elseif ('atimti-juodus' == $_POST['ka_daryti']) {
        $bebrai['juodieji'] -= (int)$_POST['j_minus'];
    } elseif ('prideti-rudus' == $_POST['ka_daryti']) {
        $bebrai['rudieji'] += (int)$_POST['r_plus'];
    } elseif ('atimti-rudus' == $_POST['ka_daryti']) {
        $bebrai['rudieji'] -= (int)$_POST['r_minus'];
    }
    setBebrai($bebrai);
    header('Location: https://localhost/lape/Bebrai/BebruUztvanka.php');
    die;
}

if ('GET' == $_SERVER['REQUEST_METHOD']) :



    $bebrai = getBebrai();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebru uztvanka</title>
    <style>
    div,
    h2 {
        margin: 15px;
        padding: 8px;
        border: 1px solid #ccc;
    }

    label {
        display: inline-block;
        width: 140px;
    }
    </style>
</head>

<body>
    <h2>Juodieji: <?= $bebrai['juodieji'] ?></h2>
    <h2>Rudieji: <?= $bebrai['rudieji'] ?></h2>
    <form action="https://localhost/lape/Bebrai/BebruUztvanka.php" method="POST">
        <div> <label>Prideti juodus:</label><input type="text" name="j_plus">
            <button type="submit" name="ka_daryti" value="prideti-juodus">+</button>
        </div>
        <div> <label>Atimti juodus:</label><input type="text" name="j_minus">
            <button type="submit" name="ka_daryti" value="atimti-juodus">-</button>
        </div>
        <div> <label>Prideti rudus:</label><input type="text" name="r_plus">
            <button type="submit" name="ka_daryti" value="prideti-rudus">+</button>
        </div>
        <div> <label>Atimti rudus:</label><input type="text" name="r_minus">
            <button type="submit" name="ka_daryti" value="atimti-rudus">-</button>
        </div>
    </form>

</body>

</html>
<?php endif;