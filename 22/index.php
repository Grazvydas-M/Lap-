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

// SELECT column_name(s)
// FROM table1
// INNER JOIN table2
// ON table1.column_name = table2.column_name;


$sql = "SELECT `name`, surname, title, authors.id AS aid, books.id AS bid 
FROM authors
LEFT JOIN books
ON authors.id = books.author_id
ORDER BY `name`
";

$stmt = $pdo->query($sql);   // steitmento objektas
echo '<ul>';
while ($row = $stmt->fetch()) {
    echo '<li><b>ID: </b> ' . $row['aid'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['title'] . '</li>';
}
echo '</ul>';