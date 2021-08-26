<?php

if (isset($_POST['new'])) {
    $host = '127.0.0.1';
    $db   = 'medziai';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $options); // pdo objektas


    //naujas

}
if (isset($_POST['new'])) {
    $name = $_POST['name'];
    $height = $_POST['height'];
    $type = $_POST['type'];

    $sql = "INSERT INTO medziai
(`name`, height, `type`)
VALUES ('Slyva', $height, 1) 
";

    $pdo->query($sql);
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>

    <form action="" method="post">
        <div>NAME: <input type="text" name="name"></div>
        <div>HEIGHT: <input type="text" name="height"></div>
        <div>TYPE: <input type="text" name=""></div>
        <div>TYPE:
            <select name="type">
                <option value="1">Lapuotis</option>
                <option value="2">Spygliuotis</option>
                <option value="3">Palme</option>
            </select>
            <button type="submit" name="new">Prideti</button>

    </form>

</body>

</html>