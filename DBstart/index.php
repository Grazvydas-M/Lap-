<?php

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


// trynimas is duomenu bazes
// DELETE FROM table_name
// WHERE some_column = some_value

$sql = "DELETE FROM medziai
WHERE name = 'Slyva'
";
$pdo->query($sql);





// rasymas i duomenu baze
// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)
// irasant duomenis stringas butinai turi buti su viengubomis kabutemis

$height = rand(1, 1000) / 100;

$sql = "INSERT INTO medziai
(`name`, height, `type`)
VALUES ('Slyva', $height, 1) 
";

$pdo->query($sql);




// duomenu bazes redagavimas
// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 

$sql = "UPDATE medziai
SET height = 15
WHERE height < 10
";

$pdo->query($sql);










// skaitymas is duomenu bazes
// SELECT column_name(s) FROM table_name

$sql = "SELECT id, `name`, height, `type`
FROM medziai
WHERE `type` <> 2
ORDER BY height, name
LIMIT 10
";

$stmt = $pdo->query($sql);   // steitmento objektas
echo '<ul>';
while ($row = $stmt->fetch()) {
    echo '<li>' . $row['id'] . ' ' . $row['name'] . ' ' . $row['height'] . $row['type'] . '</li>';
}
echo '</ul>';