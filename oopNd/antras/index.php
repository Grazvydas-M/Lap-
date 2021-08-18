<?php

require __DIR__ . '/Pinigine.php';




$pinigine1 = new Pinigine;


//pridedame pinigus
$pinigine1->ideti(2);
$pinigine1->ideti(5);

var_dump($pinigine1);