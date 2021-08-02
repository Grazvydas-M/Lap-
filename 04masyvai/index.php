<?php

$masyvas = [];


echo '<pre>';



// $masyvas['kojines'] = 7;
$masyvas[2] = 88;
$masyvas[0] = 44;
$masyvas[1] = 99;
$masyvas['belekas'] = 99;
$masyvas[1] = 555;
$masyvas[] = 'tatata';
array_push($masyvas, 'blablabla');


$masyvas1 = [ 4, 5, 'labas'];

print_r($masyvas);
print_r($masyvas1);

$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $value) {
   echo 'Reikšmė: ' . $value . '<br>';
}


$A = 8;
// $B = $A; // pagal reiksme by value
$B = &$A;  //pagal nuoroda by referrence

$A = 10;

echo "A = $A  B = $B";