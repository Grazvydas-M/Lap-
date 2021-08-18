<!-- Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) 
ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą. -->

<?php

require __DIR__ . '/Kibiras1.php';

$kibiras = new Kibiras1;


//prideti viena akmeni

$kibiras->prideti1Akmeni();
print_r($kibiras);
echo '<br>';


//prideti daug akmenu

$kibiras->pridetiDaugAkmenu(5);
print_r($kibiras);
echo '<br>';

//akmenu kiekis

$kibiras->kiekPririnktaAkmenu();