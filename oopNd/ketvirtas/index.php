<?php

require __DIR__ . '/KibirasNePo1.php';
// require __DIR__ . '/Kibiras3.php';

$kibiras1 = new KibirasNePo1();

$kibiras1->prideti1Akmeni();
echo '<pre>';
var_dump($kibiras1);