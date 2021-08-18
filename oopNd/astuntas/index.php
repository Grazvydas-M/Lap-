<!-- Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. 
Parašyti metodą monetos(), kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - popierinių pinigų skaičiavimui. -->

<?php

require __DIR__ . '/pinigineTurbo.php';




$pinigine1 = new Pinigine;


//pridedame pinigus
$pinigine1->ideti(2);
$pinigine1->ideti(5);

var_dump($pinigine1);