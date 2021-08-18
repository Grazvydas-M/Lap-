<?php

require __DIR__ . '/Kibiras2.php';

$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;
$kibiras3 = new Kibiras2;


//prideti viena akmeni

$kibiras1->prideti1Akmeni();
$kibiras2->prideti1Akmeni();

echo '<br>';


//prideti daug akmenu

$kibiras1->pridetiDaugAkmenu(5);
$kibiras3->pridetiDaugAkmenu(10);
echo '<br>';

//akmenu kiekis


$kibiras1->kiekPririnktaAkmenu();
echo '<br>';
$kibiras2->kiekPririnktaAkmenu();
echo '<br>';
$kibiras3->kiekPririnktaAkmenu();
echo '<br>';

Kibiras2::bendrasAkmenuKiekis();