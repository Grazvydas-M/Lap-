<?php

require __DIR__ . '/Stikline.php';


$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);


$stikline1->ipilti(500);
echo '<pre>';
print_r($stikline1);

$stikline2->ipilti($stikline1->ispilti());
print_r($stikline2);


$stikline3->ipilti($stikline2->ispilti());
print_r($stikline3);